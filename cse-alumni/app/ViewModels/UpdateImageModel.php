<?php
namespace App\ViewModels;
use App\Services\IAlumniService;
use Illuminate\Http\Request;
use App\Factories\AlumniFactory;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
class UpdateImageModel implements IUpdateImageModel
{   
	private $_alumniService;
	public $image;
	public function __construct(Request $request,IAlumniService $alumniService)
	{
		$this->_alumniService=$alumniService;
		$this->loadFields($request);
	}
	public function update($id)
	{
		$alumniObject=AlumniFactory::setImage($this);
		$this->_alumniService->updateImage($alumniObject,$id);
	}
	public function loadFields(Request $request)
	{ 
		$validateData=$request->validate([
			'image'=>'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048'
		]);
		$imageFile=$request->file('image');
		$imageName=uniqid().'.'.$imageFile->getClientOriginalExtension();
		$resizeImg = Image::make($imageFile)->resize(200,200)->stream();
		Storage::disk('public')->put('images/Alumni/'.$imageName,$resizeImg);
		$this->image=$imageName;
	}
}