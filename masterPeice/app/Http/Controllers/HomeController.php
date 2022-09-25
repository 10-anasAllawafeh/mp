<?php

namespace App\Http\Controllers;

use App\Models\Joboffer;
use Illuminate\Http\Request;
use App\Models\User;
use TCG\Voyager\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function addjob(Request $request)
    {
        $file= $request->file('image');
        $path= "";
        if (!empty($file)) {
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('/storage/posts/June2022'), $filename);
            $path='posts/June2022/'.$filename;
        }
        $path;
        $title=$request->input('title');
        $excerpt=$request->input('excerpt');
        $body=$request->input('body');
        $city=$request->input('city');
        $image=$path;
        $category=$request->input('category');
        DB::insert('INSERT INTO posts (author_id, title, excerpt, body, city, image, category_id) VALUES(?,?,?,?,?,?,?)',[Auth::user()->id,$title,$excerpt,$body,$city,$image,$category]);
        return redirect()->back()->with('message', 'Job Added Succefully');
    }
    public function job()
    {
        $jobs= DB::select('SELECT * FROM posts WHERE author_id=?;',[Auth::user()->id]);
        $categories= DB::select('SELECT * FROM categories;');
        // $jobOffers=Joboffer::where('worker_id', '=', Auth::id());
        // $jobOffers=DB::table('Joboffers')->where('worker_id', '=', Auth::id());
        $jobOffers=DB::select('SELECT Joboffers.id,Joboffers.job_time,Joboffers.job_description,Joboffers.job_price,users.name,users.city FROM Joboffers RIGHT JOIN users ON users.id=joboffers.customer_id WHERE job_status="pending" AND worker_id=?',[Auth::id()]);
        // dd($jobOffers);
        return view('job',compact('jobs','categories','jobOffers'));
    }

    public function welcome()
    {

        $categories= DB::select('SELECT * FROM categories');
        $popularPosts= DB::select('SELECT * FROM posts LIMIT 3;');
        $latestPosts= DB::select('SELECT * FROM posts
                                  ORDER BY id DESC
                                  LIMIT 3;');
        $cityPosts=  DB::select('SELECT * FROM posts WHERE city=? LIMIT 3;',[ Auth::user()->city]);

        return view('welcome', compact('categories','popularPosts','latestPosts','cityPosts'));
    }

    public function edituser(Request $request, $id){

        $file= $request->input('image');
        $path= "";

        if (!empty($file)) 
        {
            $filename= $file->getClientOriginalName();
            $file -> move(public_path('storage/users/July2022'), $filename);
            $path= "users/July2022".$filename;
        }

        $path;
        $name= $request->input('name');
        $email=$request->input('email');
        $city=$request->input('userCity');
        $phone=$request->input('phone');

        if (!empty($file)) 
        {
            DB::update("INSERT INTO users (name,email,avatar,city,phone) VALUES ('$name','$email','$path','$city','$phone') WHERE id=$id");
        } 
        else 
        {
            DB::update('UPDATE users SET name=?, email=?, city=?, phone=? WHERE id=?;',[$name,$email,$city,$phone,$id]);
        }

        return redirect('/home')->with('status', 'Data Edited Succeffully');
    }

    function jobOffer(){
        Joboffer::create([
            'worker_id' =>request('worker_id'),
            'customer_id' =>Auth::id(),
            'job_description' =>request('description'),
            'job_time' =>request('timing'),
            'job_price' =>request('pricing'),
        ]);
        return redirect()->with('messeage','Your offer has been submitted,please wait the worker reply');
    }
    function approveJob($id){
        DB::update('UPDATE Joboffers SET job_status="approved" WHERE id=?',[$id]);
        // $job=DB::select('SELECT * FROM Joboffers WHERE id=?',[$id]);
        // dd($job);
        return redirect()->back()->with('message','Job Approved Succefully');

    }
    function declineJob($id){
        DB::update('UPDATE Joboffers SET job_status="declined" WHERE id=?',[$id]);
        // $job=DB::select('SELECT * FROM Joboffers WHERE id=?',[$id]);
        // dd($job);
        return redirect()->back()->with('message','Job declined Succefully');

    }
    function approvedJob(){
        $jobOffers=[];
        if (Auth::user()->role_id == 3) {
            $jobOffers=DB::select('SELECT Joboffers.id,Joboffers.job_time,Joboffers.job_description,Joboffers.job_price,users.name,users.city FROM Joboffers RIGHT JOIN users ON users.id=joboffers.customer_id WHERE job_status="approved" AND worker_id=?',[Auth::id()]);
        } else {
            $jobOffers=DB::select('SELECT Joboffers.id,Joboffers.job_time,Joboffers.job_description,Joboffers.job_price,users.name,users.city FROM Joboffers RIGHT JOIN users ON users.id=joboffers.worker_id WHERE job_status="approved" AND worker_id=?',[Auth::id()]);
        }
        
        return view('approvedjobs',compact('jobOffers'));
    }
}
