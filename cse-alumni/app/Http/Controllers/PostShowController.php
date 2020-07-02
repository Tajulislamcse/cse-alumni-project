<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostShowController extends Controller
{
    public function index()
    {
      $news=Post::where([
    	'category'=>'news',
    	'status'=>1

    ])->take(5)->get();


      $events=Post::where([
    	'category'=>'events',
    	'status'=>1

    ])->take(5)->get();


      return view('frontPage',compact('news','events'));
    }
    public function details($id)
    {
    	$post=Post::find($id);
    	return view('post.details',compact('post'));

    }
}
