<?php
namespace App\Services;
use App\BusinessObjects\IAlumni;
use App\Repositories\IAlumniMainRepository;
use App\Repositories\IProfessionRepository;
use App\Services\INotificationService;

class AlumniService implements IAlumniService
{ 
	private $_alumniMainRepository;
	private $_professionRepository;
	private $_notificationService;

	public function __construct(IAlumniMainRepository $alumniMainRepository,IProfessionRepository $professionRepository,INotificationService $notificationService)
	{
		$this->_alumniMainRepository=$alumniMainRepository;
		$this->_professionRepository=$professionRepository;
		$this->_notificationService=$notificationService;

	}
	public function store(IAlumni $alumni)
	{
		$user=$this->_alumniMainRepository->store($alumni);
		$profession=$this->_professionRepository->getProfession($alumni);
		$user->profession()->save($profession);
		$this->_notificationService->sendNotificationToAdmins($user);
	}
	public function getAllByBatch($batch)
	{
		return $this->_alumniMainRepository->getAllByBatch($batch);
	}
	public function get($id)
	{
		return $this->_alumniMainRepository->get($id);
	}
	public function updateBasicInfo(IAlumni $alumni,$id)
	{
		$this->_alumniMainRepository->updateBasicInfo($alumni,$id);
     
	}
	
	public function updateProfession(IAlumni $alumni,$id)
	{
		$updatedProfession=$this->_professionRepository->updateProfession($alumni,$id);
	$this->_notificationService->sendNotificationToAlumniMembers($updatedProfession);
	}
	public function updateImage(IAlumni $alumni,$id)
	{
		$this->_alumniMainRepository->updateImage($alumni,$id);
	}

}