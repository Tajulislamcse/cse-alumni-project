<?php

namespace App\Http\Controllers\Alumni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

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
 return view('alumni.pages.index',compact('fetchAllalumnis'));
 
    /*
 for($i=1;$i<=4;$i++)
 {
       $user =User::find($i);

		foreach ($user->roles as $role) 
		{
		    return User::where(['batch'=>$batchNo,'role_user.role_id'=>$role->pivot->role_id])->get();
		    // if($role_id==2)
		     //{ $i=1;
		     	//return User::find(++$i)->where('batch',$batchNo)->get();
		     //}	
		}
	}	
        
	for($i=1;$i<=4;$i++)
	{
	$user=User::find($i);
	foreach($user->roles as $role)
	{
		if($role->name=='alumni')

	}
    }
      
      // Company::find(1)->users()->where('company_user.owner', 1)->get();

      //->get();
        // return $user->roles()->name;
       //foreach( $user as $role)
        //	echo $role->batch."\n";
   
  /*
		$users = \DB::table('users')->with('roles')->join('roles', 'roles.user_id', '=', 'users.id')->where('roles.name', 'admin')->get();
		*/
   }

}
