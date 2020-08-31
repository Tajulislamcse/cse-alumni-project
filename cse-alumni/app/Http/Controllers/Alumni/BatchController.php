<?php

namespace App\Http\Controllers\Alumni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class BatchController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
       $this->middleware('role:alumni');
         $this->middleware('role:admin');
    }
	
    
   public function index($batchNo)
   {

  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
   **/
    
 $objOfviewAlumniModel=resolve('App\ViewModels\IViewAlumniModel');
 $fetchAllalumnis=$objOfviewAlumniModel->getAll($batchNo);
 return view('alumni.pages.index',compact('fetchAllalumnis'));
 
   
  }
}
