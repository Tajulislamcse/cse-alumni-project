<?php
namespace App\BusinessObjects;
trait Employee
{   
	private $Id;
	private $profession;
	private $appointmentDate;
	public function setEmployeeId($Id)
	{
		$this->Id=$Id;
	}
	public function getEmployeeId()
	{
		return $this->Id;
	}
	public function setProfession($profession)
	{
		$this->profession=$profession;
	}
	public function getProfession()
	{
		return $this->profession;
	}
	public function setAppointmentDate($appointmentDate)
	{
		$this->appointmentDate=$appointmentDate;
	}
	public function getAppointmentDate()
	{
		return $this->appointmentDate;
	}
}	