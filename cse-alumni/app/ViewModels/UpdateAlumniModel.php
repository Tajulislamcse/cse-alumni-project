<?php
namespace App\ViewModels;
use Illuminate\Http\Request;
use App\Services\IAlumniService;
use App\Factories\AlumniFactory;
class UpdateAlumniModel implements IUpdateAlumniModel
{ 
	private $_alumniService;
	public $alumniId;
	public $name;
	public $batch;
	public $session;
	public $bloodgroup;
	public $phoneNo;
	public $email;
	public $gender;
	public function __construct(Request $request,IAlumniService $alumniService)
	{
		$this->_alumniService=$alumniService;
		$this->loadFields($request);
	}
	public function update($id)
	{
		$alumniObject=AlumniFactory::setProperty($this);
		$this->_alumniService->updateBasicInfo($alumniObject,$id);
	}
	public function loadFields(Request $request)
	{ 
		$validatedData = $request->validate([
			'alumniId' => 'required|numeric|unique:users|digits:8',
			'name'=>'required',
			'batch'=>'required',
			'session'=>'required',
			'bloodgroup'=>'required',
			'phoneNo'=>'unique:users|regex:/[0-9]/',
			'email'=>'required|email|unique:users',
			//'password'=>'required|min:5',
			'gender' => 'required|in:male,female',
		]);
		$this->alumniId=$request->alumniId;
		$this->name=$request->name;
		$this->batch=$request->batch;
		$this->session=$request->session;
		$this->bloodgroup=$request->bloodgroup;
		$this->phoneNo=$request->phoneNo;
		$this->email=$request->email;
		//$this->password=bcrypt($request->password);
		$this->gender=$request->gender;
	}
}
