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
	public function getAll($batchNo)
	{
		return $this->_alumniService->getAll($batchNo);
	}
	public function get($id)
	{
		return $this->_alumniService->get($id);
	}
    /*
	public function delete($id)
	{
		$this->_alumniService->delete($id);

	}

  */

	 
  


}