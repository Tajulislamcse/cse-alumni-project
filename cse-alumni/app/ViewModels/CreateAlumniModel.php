<?php
namespace App\ViewModels;
use Illuminate\Http\Request;
use App\Services\IAlumniService;
use App\Factories\AlumniFactory;
class CreateAlumniModel implements ICreateAlumniModel
{
	private $_alumniService;
	public $id;
	public $roll;
	public $name;
	public $batch;
	public $session;
	public $bloodgroup;
	public $image;
	public $profession;
	public $phonenumber;
	public $email;
	public $password;

	public function __construct(IAlumniService $alumniService,Request $request)
	{
		$this->_alumniService=$alumniService;
		$this->loadFields($request);
	}
	public function store()
	{
		$sendFactory=AlumniFactory::setValueToBo($this);
		$this->_alumniService->store($sendFactory);
	}
	public function loadFields(Request $request)
	{ 
        $storeName = time() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('uploads'), $storeName);
        

	    $this->id=$request->id;
		$this->roll=$request->roll;
		$this->name=$request->name;
		$this->batch=$request->batch;
		$this->session=$request->session;
		$this->bloodgroup=$request->bloodgroup;
		$this->image=$storeName;
		$this->profession=$request->profession;
		$this->phonenumber=$request->phonenumber;
		$this->email=$request->email;
		$this->password=$request->password;
	}
	public function update($id)
	{
		$sendFactory=AlumniFactory::setValueToBo($this);
		$this->_alumniService->update($sendFactory,$id);
	}
	
}
