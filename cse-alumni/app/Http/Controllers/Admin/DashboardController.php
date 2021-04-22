<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{   

	public function index()
	{
		$adminDashboardModel=resolve('App\ViewModels\IAdminDashboardModel');
		$data=$adminDashboardModel->getData();
		return view('admin.dashboard',compact('data'));
		
	}

}
