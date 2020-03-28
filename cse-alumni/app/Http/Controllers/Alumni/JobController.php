<?php

namespace App\Http\Controllers\Alumni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alumni;
use App\Notifications\JobChange;
use Illuminate\Support\Facades\Notification;
//use App\User;


class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // return Alumni::where('roll','LIKE','__1%')->get(); //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
      // $alumni=new Alumni();
         $fetchrecordbyid=Alumni::find($id);
       //return $fetchrecordbyid->profession;

       return view('FrontEnd.pages.editJob',compact('fetchrecordbyid'));
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
        
         $forupdate=Alumni::find($id);
        //$forupdate->name=$request->name;
        $forupdate->profession=$request->profession;
        $forupdate->save();
        //$alumni=new Alumni();
        $alumnis=Alumni::all();
        foreach ($alumnis as  $onealumni) {
            Notification::route('mail', $onealumni->email)
        
               ->notify(new JobChange($onealumni));
           }
        return redirect('/');

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
