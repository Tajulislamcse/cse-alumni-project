<?php
namespace App\ViewModels;
use Illuminate\Http\Request;
use App\Services\IAlumniCommitteeService;
use App\Factories\AlumniCommitteeFactory;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
class StoreAlumniCommitteeModel implements IStoreAlumniCommitteeModel
{
	private $_alumniCommitteeService;
	public $name;
	public $designation;
	public $image;
	public $batch;
	public $bloodgroup;
	public $profession;
	public $email;
	public $password;
	public $gender;
	public function __construct(IAlumniCommitteeService $alumniCommitteeService, Request $request)
	{
		$this->_alumniCommitteeService=$alumniCommitteeService;
		$this->loadFields($request);
	}
	public function store()
	{
		$object=AlumniCommitteeFactory::setProperty($this);
		$this->_alumniCommitteeService->store($object);
	}
	public function loadFields(Request $request)
	{

		$validatedData = $request->validate([
			'name'=>'required',
			'designation'=>'required',
			'batch'=>'required',
			'image'=>'mimes:jpeg,jpg,png,gif,svg|max:2048',
			'bloodgroup'=>'required',
			'profession'=>'nullable',
			'email'=>'required|email',
			'password'=>'required|min:5',
			'gender' => 'required|in:male,female',
		]);
		if($request->hasFile('image'))
		{
			$imageFile=$request->file('image');
			$imageName=time().'.'.$imageFile->getClientOriginalExtension();
			$resizeImg = Image::make($imageFile)->resize(100,100)->stream();
			Storage::disk('public')->put('images/committee/'.$imageName,$resizeImg);
		}
		else
		{
			$request->gender=='male'?$imageName='maleAvater.png'
			                        :$imageName='femaleAvater.png';
		}
		$this->name=$request->name;
		$this->designation=$request->designation;
		$this->image=$imageName;
		$this->batch=$request->batch;
		$this->bloodgroup=$request->bloodgroup;
		$this->profession=$request->profession;
		$this->email=$request->email;
		$this->password=bcrypt($request->password);
		$this->gender=$request->gender;
	}
}