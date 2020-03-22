<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\ViewModels\DataTablesModel;
class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //public function index($id)
    //{
    
        /*
        $objOfviewAlumniModel=resolve('App\ViewModels\IViewAlumniModel');
        $fetchAllalumnis=$objOfviewAlumniModel->getAll();
        return view('FrontEnd.pages.index',compact('fetchAllalumnis'));
        */
   // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('FrontEnd.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumni=resolve('App\ViewModels\ICreateAlumniModel');
        $alumni->store();
        return redirect('/');
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
         $objOfviewAlumniModel=resolve('App\ViewModels\IViewAlumniModel');
         $fetchRecord=$objOfviewAlumniModel->get($id);
         return view('FrontEnd.pages.details',compact('fetchRecord'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*
    public function update(Request $request, $id)
    {
        $objOfCreateAlumniModel=resolve('App\ViewModels\ICreateAlumniModel');
        $objOfCreateAlumniModel->update($id);
        return redirect('admin/alumnis');
    }
    */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*
    public function destroy($id)
    {
        $objOfviewAlumniModel=resolve('App\ViewModels\IViewAlumniModel');
        $objOfviewAlumniModel->delete($id);
        return redirect('/admin/alumnis');
    }

    */
    
    
    

  
}
