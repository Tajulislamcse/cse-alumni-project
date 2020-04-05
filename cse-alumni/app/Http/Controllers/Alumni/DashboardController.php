<?php

namespace App\Http\Controllers\Alumni;

use Illuminate\Http\Request;

class DashboardController extends Controller
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
