<?php
namespace App\BusinessObjects;
interface ITeacher extends IPerson
{
	public function setEmployeeId($employeeId);
	public function getEmployeeId();
	public function setDescription($description);
	public function getDescription();
	public function setResearchInterest($researchInterest);
	public function getResearchInterest();
	public function setConferencArticles($conferenceArticles);
	public function getConferenceArticles();
}