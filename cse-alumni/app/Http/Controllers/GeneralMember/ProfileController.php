<?php
namespace App\Http\Controllers\GeneralMember;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
{   
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function updateProfession($id)
	{  
		$updateProfessionModel=resolve('App\ViewModels\IUpdateProfessionModel');
		$updateProfessionModel->update($id);
		return response()->json(['success'=>'profession updated successfully']);
	}
	public function updateImage($id)
	{
		$updateImageModel=resolve('App\ViewModels\IUpdateImageModel');
		$updateImageModel->update($id);
		return response()->json(['success'=>'Image updated successfully']);
	}
	public function show($batchId)
	{   
		if(!auth()->user()->hasAnyRole(['admin','GeneralMember','CommitteeMember']))
		{
			abort(401,"This is role is not allowed");
		}
		$viewAlumniModel=resolve('App\ViewModels\IViewAlumniModel');
		$alumniObjects=$viewAlumniModel->getAllByBatch($batchId);
		return view('generalMember.index',compact('alumniObjects','batchId'));
	}
	public function edit($id)
	{
		if(Auth::id()!=$id)
		{
			return abort(401,"This role is not allowed");
		}
		$viewAlumniModel=resolve('App\ViewModels\IViewAlumniModel');
		$alumniObject=$viewAlumniModel->get($id);
		return view('generalMember.basicInfoEdit',compact('alumniObject'));
	}
}
