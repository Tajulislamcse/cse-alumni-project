<?php
namespace App\BusinessObjects;
class Teacher extends Person implements ITeacher
{   
	private $employeeId;
	private $description;
	private $researchInterest;
	private $conferenceArticles;

	public function setEmployeeId($employeeId)
	{
		$this->employeeId=$employeeId;
	}
	public function getEmployeeId()
	{
		return $this->employeeId;
	}
	public function setDescription($description)
	{
		$this->description=$description;
	}
	public function getDescription()
	{
		return $this->description;
	}
	public function setResearchInterest($researchInterest)
	{
		$this->researchInterest=$researchInterest;
	}
	public function getResearchInterest()
	{
		return $this->researchInterest;
	}
	public function setConferencArticles($conferenceArticles)
	{
		$this->conferenceArticles=$conferenceArticles;

	}
    public function getConferenceArticles()
    {
    	return $this->conferenceArticles;
    }




}