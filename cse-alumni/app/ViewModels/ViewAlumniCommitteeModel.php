<?php
namespace App\ViewModels;
use App\Services\IAlumniCommitteeService;
class ViewAlumniCommitteeModel implements IViewAlumniCommitteeModel
{
	private $_alumniCommitteeService;
	public function __construct(IAlumniCommitteeService $alumniCommitteeService)
	{
		$this->_alumniCommitteeService=$alumniCommitteeService;

	}
	public function getAll()
	{
		$committees=$this->_alumniCommitteeService->getAll();
		$presidents=[];
		$secretaries=[];
		$members=[];
		foreach ($committees as $committee)
		{
			if($committee->getDesignation()=='president')
				$presidents[]=$committee;
			elseif($committee->getDesignation()=='secretary')
				$secretaries[]=$committee;
			else
				$members[]=$committee;
		}
		return array($presidents,$secretaries,$members);   
	
	}

}