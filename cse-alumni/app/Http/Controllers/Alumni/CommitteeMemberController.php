<?php

namespace App\Http\Controllers\Alumni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Committee;

class CommitteeMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:committee');
    }
    
    public function index()
    {
        
          $getMember=Committee::where('designation','member')->get();
          $getPresident=Committee::where('designation','president')->get();
           $getSecretary=Committee::where('designation','secretary')->get();
       return view('committee.index',compact('getMember','getPresident','getSecretary'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('committee.test');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $committee=new Committee();
        $committee->name=$request->name;
        $committee->designation=$request->designation;
         $imageName = time() . '.' . $request->file('image')->getClientOriginalExtension();
         $request->file('image')->move(public_path('uploads'), $imageName);
         $committee->image = $imageName;

        $committee->batch=$request->batch;
        $committee->bloodgroup=$request->bloodgroup;
        $committee->profession=$request->profession;
        $committee->email=$request->email;
        $committee->save(); 
        return redirect('alumni/committee');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
