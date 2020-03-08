<?php
namespace App\Factories;
class AlumniFactory
{   
	public static function setValueToBoFromDatabase($fetchAlldataFromDatabase)
	{
		    $alumnis=[];
		foreach ($fetchAlldataFromDatabase as  $alumni) 
		{
			$obj=resolve('App\BusinessObjects\IAlumni');
			$obj->setId($alumni['id']);
			$obj->setRoll($alumni['roll']);
			$obj->setName($alumni['name']);
			$obj->setBatch($alumni['batch']);
			$obj->setSession($alumni['session']);
			$obj->setBloodgroup($alumni['bloodgroup']);
			$obj->setImage($alumni['image']);
			$obj->setProfession($alumni['profession']);
			$obj->setPhonenumber($alumni['phonenumber']);
			$obj->setEmail($alumni['email']);
			$alumnis[]=$obj;
		}
		return $alumnis;
	}
	public static function setValueToBo($alumniInformation)
	{
		$alumni=resolve('App\BusinessObjects\IAlumni');
		$alumni->setId($alumniInformation->id);
		$alumni->setRoll($alumniInformation->roll);
		$alumni->setName($alumniInformation->name);
		$alumni->setBatch($alumniInformation->batch);
		$alumni->setSession($alumniInformation->session);
		$alumni->setBloodgroup($alumniInformation->bloodgroup);
		$alumni->setImage($alumniInformation->image);
		$alumni->setProfession($alumniInformation->profession);
		$alumni->setPhonenumber($alumniInformation->phonenumber);
		$alumni->setEmail($alumniInformation->email);
		$alumni->setPassword($alumniInformation->password);
		return $alumni;
	}
	public static function convertIntoBoFromDatabaseData($fetchRecord)
	{       
		    $obj2=resolve('App\BusinessObjects\IAlumni');
		    $obj2->setId($fetchRecord['id']);
			$obj2->setRoll($fetchRecord['roll']);
			$obj2->setName($fetchRecord['name']);
			$obj2->setBatch($fetchRecord['batch']);
			$obj2->setSession($fetchRecord['session']);
			$obj2->setBloodgroup($fetchRecord['bloodgroup']);
			$obj2->setImage($fetchRecord['image']);
			$obj2->setProfession($fetchRecord['profession']);
			$obj2->setPhonenumber($fetchRecord['phonenumber']);
			$obj2->setEmail($fetchRecord['email']);
			return $obj2;
	}
}