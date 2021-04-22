<?php
namespace App\ViewModels;
use App\Services\IAlumniService;
use Illuminate\Http\Request;
use App\Factories\AlumniFactory;
use Carbon\Carbon;
class UpdateProfessionModel implements IUpdateProfessionModel
{   
	private $_alumniService;
	public $profession;
	public $appointmentDate;
	public function __construct(Request $request,IAlumniService $alumniService)
	{
		$this->_alumniService=$alumniService;
		$this->loadFields($request);
	}
	public function update($id)
	{
		$object=AlumniFactory::setProfession($this);
		$this->_alumniService->updateProfession($object,$id);
	}
	public function loadFields(Request $request)
	{ 
		$validateData =$request->validate([
			'profession'=>'required',
			'appointmentDate'=>'required'
		]);
		$this->profession=$request->profession;
		$formattedDate=Carbon::createFromFormat('m/d/Y', $request->appointmentDate)->format('F d, Y');
		$this->appointmentDate=$formattedDate;
	}
}