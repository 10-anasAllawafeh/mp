<?php

namespace App\Http\Controllers;

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
            $file-> move(public_path('/storage/users/June2022'), $filename);
            $path='users/June2022/'.$filename;
        }
        $path;
        $title=$request->input('title');
        $excerpt=$request->input('excerpt');
        $body=$request->input('body');
        $city=$request->input('city');
        $image=$path;
        $category=$request->input('category');
        DB::insert('INSERT INTO posts (auther_id, title, excerpt, body, city, image, category) VALUES(?,?,?,?,?,?)',[Auth::user()->id,$title,$excerpt,$body,$city,$image,$category]);
        redirect('job')->with('message', 'Job Added Succefully');
    }
    public function job()
    {
        $jobs= DB::select('SELECT * FROM posts WHERE author_id=?;',[Auth::user()->id]);
        $categories= DB::select('SELECT * FROM categories;');
        return view('job',compact('jobs','categories'));
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
}
