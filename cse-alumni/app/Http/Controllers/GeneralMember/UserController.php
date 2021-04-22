<?php
namespace App\Http\Controllers\GeneralMember;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{  
	public function __construct()
	{
		$this->middleware('auth')->except('create','store');
	}
	public function create()
	{
		return view('generalMember.register');
	}
	public function store()
	{
		$storeAlumniModel=resolve('App\ViewModels\IStoreAlumniModel');
		$storeAlumniModel->store();
		session()->flash('message','Your registration has been submitted and is pending approval by an admin. If your account is approved, then you will notify via email. You can\'t log in until your account is approved.');
		return redirect()->back();
	}
	public function show($id)
	{ 
		if(!auth()->user()->hasAnyRole(['GeneralMember','CommitteeMember','admin']))
		{
			return abort(401,"This role is not allowed");
		}
		$viewAlumniModel=resolve('App\ViewModels\IViewAlumniModel');
		$alumniObject=$viewAlumniModel->get($id);
		return view('generalMember.details',compact('alumniObject'));
	}
	public function edit($id)
	{
		if(Auth::id()!=$id)
		{
			return abort(401,"This role is not allowed");
		}
		$viewAlumniModel=resolve('App\ViewModels\IViewAlumniModel');
		$alumniObject=$viewAlumniModel->get($id);
		return view('generalMember.profileEdit',compact('alumniObject'));
	}

	public function update($id)
	{   
		
		$updateAlumniModel=resolve('App\ViewModels\IUpdateAlumniModel');
		$updateAlumniModel->update($id);
		session()->flash('message','Your Information has been updated successfully');
		return redirect("/user/profile/$id");
	}
	public function destroy($id)
	{
		//
	}
}
