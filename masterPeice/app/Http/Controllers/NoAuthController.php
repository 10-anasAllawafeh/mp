<?php

namespace App\Http\Controllers;
use App\Models\User;
use TCG\Voyager\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class NoAuthController extends Controller
{
    public function __constructor(){

    }

    public function welcome()
    {

        $categories= DB::select('SELECT * FROM categories');
        $popularPosts= DB::select('SELECT * FROM posts LIMIT 3;');
        $latestPosts= DB::select('SELECT * FROM posts
                                  ORDER BY id DESC
                                  LIMIT 3;');
        if (Auth::user()) {
            $cityPosts=  DB::select('SELECT * FROM posts WHERE city=? LIMIT 3;',[ Auth::user()->city]);
        }
        else{
            $cityPosts= [];
        };

        return view('welcome', compact('categories','popularPosts','latestPosts','cityPosts'));
    }
}
