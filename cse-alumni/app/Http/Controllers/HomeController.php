<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\SliderImg;
//use Intervention\Image\ImageManagerStatic as Image;

class HomeController extends Controller
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


  $getAll=SliderImg::all();
 //return $getAll;


     return view('home',compact('news','events','getAll'));


    
    }
    

}
