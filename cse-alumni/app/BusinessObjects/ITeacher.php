<?php
namespace App\BusinessObjects;
interface ITeacher extends IPerson
{
	public function setEmployeeid($employeeId);
	public function getEmployeeid();
	public function setDescription($description);
	public function getDescription();
	public function setResearchinterest($researchInterest);
	public function getResearchinterest();
	public function setConferencearticles($conferenceArticles);
	public function getConferencearticles();
}