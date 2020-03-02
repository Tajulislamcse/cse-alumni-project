<?php
namespace App\ViewModels;
use App\Services\ITeacherService;
use Illuminate\Http\Request;
use App\Factories\TeacherFactory;

class CreateTeacherModel implements ICreateTeacherModel
{
  private $_teacherService;
  public $employeeId;
  public $name;
  public $image;
  public $bloodGroup;
  public $phoneNumber;
  public $email;
  public $description;
  public $researchInterest;
  public $conferenceArticles;

  public function __construct(ITeacherService $teacherService,Request $request)
  {
  	$this->_teacherService=$teacherService;
  	$this->loadFields($request);
  }
  public function loadFields(Request $request)
  {
  	$this->employeeId=$request->employeeId;
  	$this->name=$request->name;
  	$this->image=$request->image;
  	$this->bloodGroup=$request->bloodGroup;
  	$this->phoneNumber=$request->phoneNumber;
  	$this->email=$request->email;
  	$this->description=$request->description;
  	$this->researchInterest=$request->researchInterest;
  	$this->conferenceArticles=$request->conferenceArticles;
  }
  public function store()
  {
    $sendFactory=TeacherFactory::setValueToBo($this);
    $this->_teacherService->store($sendFactory);
  }

  public function update($id)
	{
		$sendFactory=TeacherFactory::setValueToBo($this);
		$this->_teacherService->update($sendFactory,$id);
	}

}