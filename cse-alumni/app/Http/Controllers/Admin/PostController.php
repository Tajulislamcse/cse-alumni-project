<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;


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
         $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
         $request->file('image')->move(public_path('uploads'), $imageName);
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
         $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
         $request->file('image')->move(public_path('uploads'), $imageName);
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
        $post->delete();
        
        return redirect('/admin/post');
    }
}
