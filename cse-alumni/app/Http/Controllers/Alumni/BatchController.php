<?php

namespace App\Http\Controllers\Alumni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alumni;
class BatchController extends Controller
{

	
    
   public function index($batchNo)
   {

  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
   **/
 $objOfviewAlumniModel=resolve('App\ViewModels\IViewAlumniModel');
 $fetchAllalumnis=$objOfviewAlumniModel->getAll($batchNo);
 return view('.pages.index',compact('fetchAllalumnis'));


   }
}
