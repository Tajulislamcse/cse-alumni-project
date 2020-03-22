<?php
namespace App\Services;
use App\BusinessObjects\IAlumni;
use App\Repositories\IAlumniRepository;
//use App\ViewModels\PagedData;

class AlumniService implements IAlumniService
{
	private $_alumniRepository;
	public function __construct(IAlumniRepository $alumniRepository)
	{
		$this->_alumniRepository=$alumniRepository;
	}
	public function store(IAlumni $alumni)
	{
		$this->_alumniRepository->store($alumni);
	}
	public function getAll()
	{
		return $this->_alumniRepository->getAll();
	}
	public function get($id)
	{
		return $this->_alumniRepository->get($id);
	}

	/*
	public function update($sendFactory,$id)
	{
		$this->_alumniRepository->update($sendFactory,$id);
	}
	public function delete($id)
	{
		$this->_alumniRepository->delete($id);
	}
    */
    
    

	 
}