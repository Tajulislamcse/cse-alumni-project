<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getAll=Post::latest()->get();
        return view('admin.post.index',compact('getAll'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post=new Post();
        $post->user_id=Auth::id();
        $post->title=$request->title;
         
         
            $image = $request->file('image');
       
       
//            make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName = $request->title.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
//            check category dir is exists
         

            //            check category slider dir is exists
            if (!Storage::disk('public')->exists('images/post'))
            {
                Storage::disk('public')->makeDirectory('images/post');
            }
            //            resize image for category slider and upload
            $resizeImg = Image::make($image)->resize(500,281)->stream();
            Storage::disk('public')->put('images/post/'.$imageName,$resizeImg);


         $post->image=$imageName;
         $post->category=$request->category;
         $post->body = strip_tags($request->body);
         if(isset($request->status))
         {
            $post->status=true;
         }
         else
            $post->status=false;
        $post->save(); 
        return redirect('/admin/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
       return view('admin.post.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post=Post::find($id);
         $post->user_id=Auth::id();
        $post->title=$request->title;
         
            $image = $request->file('image');
       
       
            $currentDate = Carbon::now()->toDateString();
            $imageName = $request->title.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
//            check category dir is exists
            if (!Storage::disk('public')->exists('images/post'))
            {
                Storage::disk('public')->makeDirectory('images/post');
            }
//            delete old image
            if (Storage::disk('public')->exists('images/post/'.$post->image))
            {
                Storage::disk('public')->delete('images/post/'.$post->image);
            }
//            resize image for category and upload
            $resizeImg = Image::make($image)->resize(500,281)->stream();
            Storage::disk('public')->put('images/post/'.$imageName,$resizeImg);


         $post->image = $imageName;
         $post->category=$request->category;
         $post->body = strip_tags($request->body);
         if(isset($request->status))
         {
            $post->status=true;
         }
         else
            $post->status=false;
       
        $post->save();
        return redirect('/admin/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        if (Storage::disk('public')->exists('images/post/'.$post->image))
        {
            Storage::disk('public')->delete('images/post/'.$post->image);
        }
       
        $post->delete();
         
       return redirect('/admin/post');
    }
}
