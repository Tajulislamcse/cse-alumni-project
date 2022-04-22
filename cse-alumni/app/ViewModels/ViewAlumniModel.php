<?php
namespace App\ViewModels;
use App\Services\IAlumniService;
class ViewAlumniModel implements IViewAlumniModel
{
	private $_alumniService;
	public function __construct(IAlumniService $alumniService)
	{
		$this->_alumniService=$alumniService;

	}
	public function getAllByBatch($batchId)
	{
		return $this->_alumniService->getAllByBatch($batchId);
	
	}
	public function get($id)
	{
		return $this->_alumniService->get($id);
	}


}