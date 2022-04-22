<?php
namespace App\Factories;
class AlumniFactory
{ 
	public static function setProperty($alumni)
	//convert it into Business Object.This function used for store and update.
	{
		$alumniObject=resolve('App\BusinessObjects\IAlumni');
		$alumniObject->setAlumniId($alumni->alumniId);
		$alumniObject->setName($alumni->name);
		$alumniObject->setBatch($alumni->batch);
		$alumniObject->setSession($alumni->session);
		$alumniObject->setBloodgroup($alumni->bloodgroup);
		if($alumni->password)//because we don't update password when profile is updated.Image and profession are also updated separately.
		{
			$alumniObject->setPassword($alumni->password);
			$alumniObject->setImage($alumni->image);
			$alumniObject->setProfession($alumni->profession);
		}
		$alumniObject->setPhoneNo($alumni->phoneNo);
		$alumniObject->setEmail($alumni->email);
		$alumniObject->setGender($alumni->gender);
		return $alumniObject;
	}
	public static function convertIntoObjects($alumniEloquentModels)
	{//convert it into Business Object
		$alumniObjects=[];
		foreach ($alumniEloquentModels as  $alumni) 
		{
			$alumniObject=resolve('App\BusinessObjects\IAlumni');
			$alumniObject->setId($alumni['id']);
			$alumniObject->setAlumniId($alumni['alumniId']);
			$alumniObject->setName($alumni['name']);
			$alumniObject->setBatch($alumni->batch->name);
			$alumniObject->setImage($alumni['image']);
			$alumniObjects[]=$alumniObject;
		}
		return $alumniObjects;//Array of objects
	}
	public static function convertIntoObject($alumniEloquentModel)
	{//convert it into Business Object
		$alumniObject=resolve('App\BusinessObjects\IAlumni');
		$alumniObject->setId($alumniEloquentModel['id']);
		$alumniObject->setAlumniId($alumniEloquentModel['alumniId']);
		$alumniObject->setName($alumniEloquentModel['name']);
		$alumniObject->setBatch($alumniEloquentModel->batch->name);
		$alumniObject->setSession($alumniEloquentModel['session']);
		$alumniObject->setBloodgroup($alumniEloquentModel['bloodgroup']);
		$alumniObject->setImage($alumniEloquentModel['image']);
		$alumniObject->setEmployeeId($alumniEloquentModel->profession['id']);
		$alumniObject->setProfession($alumniEloquentModel->profession['name']);
		$alumniObject->setPhoneNo($alumniEloquentModel['phoneNo']);
		$alumniObject->setEmail($alumniEloquentModel['email']);
		$alumniObject->setGender($alumniEloquentModel['gender']);
		return $alumniObject;
	}
	public static function setProfession($alumniProfession)
	{
		$alumniObject=resolve('App\BusinessObjects\IAlumni');
		$alumniObject->setProfession($alumniProfession->profession);
		$alumniObject->setAppointmentDate($alumniProfession->appointmentDate);
		return $alumniObject;
	}
	public static function setImage($alumniImage)
	{
		$alumniObject=resolve('App\BusinessObjects\IAlumni');
		$alumniObject->setImage($alumniImage->image);
		return $alumniObject;
	}
}