<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alumni;
class BatchController extends Controller
{
    
   public function index($batchNo)
   {


 $objOfviewAlumniModel=resolve('App\ViewModels\IViewAlumniModel');
 $fetchAllalumnis=$objOfviewAlumniModel->getAll($batchNo);
  //$fetchAllalumnis;
 return view('FrontEnd.pages.index',compact('fetchAllalumnis'));




   //	$fetchAllalumnis=Alumni::where('batch',$id)->get();
//return view('FrontEnd.pages.index',compact('fetchAllalumnis'));
   }
}
