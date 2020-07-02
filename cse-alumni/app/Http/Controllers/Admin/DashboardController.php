<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Models\Committee;
use App\Models\Post;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    
     public function index()

    {
              $roleName="alumni";
        
        $getAllalumni=User::whereHas('roles', function ($q) use ($roleName) {
    $q->where([
        'name'=>$roleName,
        
        
    ]);
})->count();
        $roleName="alumni";
        $batch="cse-7th";
        $alumni7th=User::whereHas('roles', function ($q) use ($roleName,$batch) {
    $q->where([
        'name'=>$roleName,
        'batch'=>$batch
        
    ]);
})->count();

    $batch="cse-6th";
        $alumni6th=User::whereHas('roles', function ($q) use ($roleName,$batch) {
    $q->where([
        'name'=>$roleName,
        'batch'=>$batch
        
    ]);
})->count(); 


        $batch="cse-5th";
        $alumni5th=User::whereHas('roles', function ($q) use ($roleName,$batch) {
    $q->where([
        'name'=>$roleName,
        'batch'=>$batch
        
    ]);
})->count();  

        $batch="cse-4th";
        $alumni4th=User::whereHas('roles', function ($q) use ($roleName,$batch) {
    $q->where([
        'name'=>$roleName,
        'batch'=>$batch
        
    ]);
})->count(); 

                $batch="cse-3rd";
        $alumni3rd=User::whereHas('roles', function ($q) use ($roleName,$batch) {
    $q->where([
        'name'=>$roleName,
        'batch'=>$batch
        
    ]);
})->count();

                $batch="cse-2nd";
        $alumni2nd=User::whereHas('roles', function ($q) use ($roleName,$batch) {
    $q->where([
        'name'=>$roleName,
        'batch'=>$batch
        
    ]);
})->count();
                $batch="cse-1st";
        $alumni1st=User::whereHas('roles', function ($q) use ($roleName,$batch) {
    $q->where([
        'name'=>$roleName,
        'batch'=>$batch
        
    ]);
})->count();

 

        $newAlumniToday=User::whereHas('roles', function ($q) use ($roleName) {
    $q->where([
        'name'=>$roleName,
        
    ]);
})->whereDate('created_at',Carbon::today())->get();



//$roleName="alumni";

 
   //return $alumniList;

      $alumniCommittee=Committee::all();
      // $alumniCommittee;


        //return view('admin.dashboard');
    $totalPost=Post::where('status',1)->count();
 
    
    $pendingPost=Post::where('status',0)->count();
      return view('admin.dashboard',compact('getAllalumni','alumni1st','alumni2nd','alumni3rd','alumni4th','alumni5th','alumni6th','alumni7th','newAlumniToday','alumniCommittee','totalPost','pendingPost')); 
   }

        public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }
}
