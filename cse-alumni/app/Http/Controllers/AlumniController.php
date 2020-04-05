<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumniController extends Controller
{
    
     public function index()
    {
        return view('alumni.dashboard');
    }

        public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:alumni');
    }


}
