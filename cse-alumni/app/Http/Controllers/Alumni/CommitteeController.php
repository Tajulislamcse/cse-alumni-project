<?php

namespace App\Http\Controllers\Alumni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Committee;


class CommitteeController extends Controller
{
    //
    public function index()
    {
    	  $getMember=Committee::where('designation','member')->get();
          $getPresident=Committee::where('designation','president')->get();
           $getSecretary=Committee::where('designation','secretary')->get();
       return view('committee.index',compact('getMember','getPresident','getSecretary'));
    }
}
