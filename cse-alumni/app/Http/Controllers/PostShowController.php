<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostShowController extends Controller
{

    public function details($id)
    {
    	$post=Post::find($id);
    	return view('post.details',compact('post'));

    }
}
