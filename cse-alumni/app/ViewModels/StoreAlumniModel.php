<?php
namespace App\ViewModels;
use Illuminate\Http\Request;
use App\Services\IAlumniService;
use App\Factories\AlumniFactory;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
class StoreAlumniModel implements IStoreAlumniModel
{ 
	private $_alumniService;
	public $alumniId;
	public $name;
	public $batch;
	public $session;
	public $bloodgroup;
	public $image;
	public $profession;
	public $phoneNo;
	public $email;
	public $password;
	public $gender;
	public function __construct(Request $request,IAlumniService $alumniService)
	{
		$this->_alumniService=$alumniService;
		$this->loadFields($request);
	}
	public function store()
	{
		$alumniObject=AlumniFactory::setProperty($this);
		$this->_alumniService->store($alumniObject);
	}
	public function update($id)
	{
		$alumniObject=AlumniFactory::setProperty($this);
		$this->_alumniService->updateProfile($alumniObject,$id);
	}
	public function loadFields(Request $request)
	{ 

		$validatedData = $request->validate([
			'alumniId' => 'required|numeric|unique:users|digits:8',
			'name'=>'required',
			'batch'=>'required',
			'image'=>'image|mimes:jpeg,jpg,png,gif,svg|max:2048',
			'session'=>'required',
			'bloodgroup'=>'required',
			'profession'=>'nullable',
			'phoneNo'=>'unique:users|regex:/[0-9]/',
			'email'=>'required|email|unique:users',
			'password'=>'required|min:5',
			'gender' => 'required|in:male,female',
		]);
		if($request->hasFile('image'))
		{
			$imageFile=$request->file('image');
			$imageName=uniqid().'.'.$imageFile->getClientOriginalExtension();
			$resizeImg = Image::make($imageFile)->resize(200,200)->stream();
			Storage::disk('public')->put('images/Alumni/'.$imageName,$resizeImg);
		}
		else
		{
			$request->gender=='male'?$imageName='maleAvater.png'
			                        :$imageName='femaleAvater.png';
		}
		$this->alumniId=$request->alumniId;
		$this->name=$request->name;
		$this->batch=$request->batch;
		$this->image=$imageName;
		$this->session=$request->session;
		$this->bloodgroup=$request->bloodgroup;
		$this->profession=$request->profession;
		$this->phoneNo=$request->phoneNo;
		$this->email=$request->email;
		$this->password=bcrypt($request->password);
		$this->gender=$request->gender;
	}
}
