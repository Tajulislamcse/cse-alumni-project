<?php
namespace App\Services;
use App\BusinessObjects\IAlumni;
use App\Repositories\IAlumniCommitteeRepository;
use App\Repositories\IProfessionRepository;
class AlumniCommitteeService implements IAlumniCommitteeService
{
	private $_alumniCommitteeRepository;
	private $_professionRepository;
	public function __construct(IAlumniCommitteeRepository $alumniCommitteeRepository,IProfessionRepository $professionRepository)
	{
		$this->_alumniCommitteeRepository=$alumniCommitteeRepository;
		$this->_professionRepository=$professionRepository;
	}
	public function store(IAlumni $alumni)
	{
		$committee=$this->_alumniCommitteeRepository->store($alumni);
		$profession=$this->_professionRepository->getProfession($alumni);
		$committee->profession()->save($profession);
	}
	public function getAll()
	{
		return $this->_alumniCommitteeRepository->getAll();
	}
}