<?php
namespace App\Factories;
class TeacherFactory
{

	public static function convertDatabaseDataToBo($fetchAllRecord)
	{  
		$teachers=[];
		foreach ($fetchAllRecord as  $allTeacherRecord) 
		{
	      $objOfTeacherCls=resolve('App\BusinessObjects\ITeacher');
	      $objOfTeacherCls->setId($allTeacherRecord['id']);
          $objOfTeacherCls->setEmployeeid($allTeacherRecord['employeeId']);
          $objOfTeacherCls->setName($allTeacherRecord['name']);
          $objOfTeacherCls->setImage($allTeacherRecord['image']);
          $objOfTeacherCls->setBloodgroup($allTeacherRecord['bloodGroup']);
          $objOfTeacherCls->setPhonenumber($allTeacherRecord['phoneNumber']);
          $objOfTeacherCls->setEmail($allTeacherRecord['email']);
          $objOfTeacherCls->setDescription($allTeacherRecord['description']);
          $objOfTeacherCls->setResearchinterest($allTeacherRecord['researchInterest']);
          $objOfTeacherCls->setConferencearticles($allTeacherRecord['conferenceArticles']);
           $teachers[]=$objOfTeacherCls;
		}
		return $teachers;
     
	}

	public static function setValueToBo($teacherInformation)
	{
		$objOfTeacherCls=resolve('App\BusinessObjects\ITeacher');
		$objOfTeacherCls->setEmployeeid($teacherInformation->employeeId);
		$objOfTeacherCls->setName($teacherInformation->name);
		$objOfTeacherCls->setImage($teacherInformation->image);
		$objOfTeacherCls->setBloodgroup($teacherInformation->bloodGroup);
		$objOfTeacherCls->setPhonenumber($teacherInformation->phoneNumber);
		$objOfTeacherCls->setEmail($teacherInformation->email);
		$objOfTeacherCls->setDescription($teacherInformation->description);
		$objOfTeacherCls->setResearchinterest($teacherInformation->researchInterest);
		$objOfTeacherCls->setConferencearticles($teacherInformation->conferenceArticles);
		return $objOfTeacherCls;
	}
	public static function convertIntoBoFromDatabaseData($fetchRecord)
	{
		  $objOfTeacherCls=resolve('App\BusinessObjects\ITeacher');
	      $objOfTeacherCls->setId($fetchRecord['id']);
          $objOfTeacherCls->setEmployeeid($fetchRecord['employeeId']);
          $objOfTeacherCls->setName($fetchRecord['name']);
          $objOfTeacherCls->setImage($fetchRecord['image']);
          $objOfTeacherCls->setBloodgroup($fetchRecord['bloodGroup']);
          $objOfTeacherCls->setPhonenumber($fetchRecord['phoneNumber']);
          $objOfTeacherCls->setEmail($fetchRecord['email']);
          $objOfTeacherCls->setDescription($fetchRecord['description']);
          $objOfTeacherCls->setResearchinterest($fetchRecord['researchInterest']);
          $objOfTeacherCls->setConferencearticles($fetchRecord['conferenceArticles']);
          return $objOfTeacherCls;
	}
}