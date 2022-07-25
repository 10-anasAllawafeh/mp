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
