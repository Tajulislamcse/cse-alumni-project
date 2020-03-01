<?php
namespace App\BusinessObjects;
class Teacher extends Person implements ITeacher
{   
	private $id;
	private $employeeId;
	private $description;
	private $researchInterest;
	private $conferenceArticles;
    
    public function setId($id)
    {
    	$this->id=$id;
    }
    public function getId()
    {
    	return $this->id;
    }
	public function setEmployeeid($employeeId)
	{
		$this->employeeId=$employeeId;
	}
	public function getEmployeeid()
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
	public function setResearchinterest($researchInterest)
	{
		$this->researchInterest=$researchInterest;
	}
	public function getResearchinterest()
	{
		return $this->researchInterest;
	}
	public function setConferencearticles($conferenceArticles)
	{
		$this->conferenceArticles=$conferenceArticles;

	}
    public function getConferencearticles()
    {
    	return $this->conferenceArticles;
    }




}