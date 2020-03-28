<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;

class TestController extends Controller
{
   public function index($id)
   {


 $objOfviewAlumniModel=resolve('App\ViewModels\IViewAlumniModel');
        $fetchAllalumnis=$objOfviewAlumniModel->getAll($id);
        return view('FrontEnd.pages.index',compact('fetchAllalumnis'));




   //	$fetchAllalumnis=Alumni::where('batch',$id)->get();
//return view('FrontEnd.pages.index',compact('fetchAllalumnis'));
   }
}
