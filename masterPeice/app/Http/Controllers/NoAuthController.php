<?php

namespace App\Http\Controllers;
use App\Models\User;
use TCG\Voyager\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

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
    public function category($category_id)
    {
        $categoryPosts= DB::select('SELECT posts.id,posts.title,posts.image,posts.excerpt,categories.name FROM posts INNER JOIN categories ON posts.category_id=categories.id WHERE category_id=?',[$category_id]);
        return view('categories',compact('categoryPosts'));
    }
    public function poster($poster_id)
    {
        $posterPosts= DB::select('SELECT * FROM posts INNER JOIN users ON posts.author_id=users.id WHERE author_id=?',[$poster_id]);
        $category=Category::find($posterPosts[0]->category_id);
        $visitor_id='';
        if (Auth::user() !== null) {
            $visitor_id=Auth::id();
        }
        // dd($visitor_id,$posterPosts[0]->author_id);
        if ($posterPosts[0]->author_id === $visitor_id) {
           return redirect('/home');
        }
        // $posterPosts= Post::whereAuther_id($poster_id);
        return view('poster',compact('posterPosts','category','visitor_id'));
    }
    public function post($post_id)
    {
        $post= DB::select('SELECT * FROM posts INNER JOIN users ON posts.author_id=users.id WHERE posts.id=?',[$post_id]);
        return view('post',compact('post'));
    }
}
