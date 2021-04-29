<?php
namespace App\Http\Controllers\CommitteeMember;
use App\Http\Controllers\Controller;
class ProfileController extends Controller
{
	public function create()
	{
		return view('committeeMember.create');
	}
	public function store()
	{ 
		$storeAlumniModel=resolve('App\ViewModels\IStoreAlumniCommitteeModel');
		$storeAlumniModel->store();
		session()->flash('message','Your registration has been submitted and is pending approval by an admin. If your account is approved, then you will notify via email. You can\'t log in until your account is approved.');
		return redirect()->back();
	}
	public function index()
	{
		$viewAlumniModel=resolve('App\ViewModels\IViewAlumniCommitteeModel');
		list($president,$secretary,$members)=$viewAlumniModel->getAll();
		return view('committeeMember.index',compact('president','secretary','members'));
	}
}
