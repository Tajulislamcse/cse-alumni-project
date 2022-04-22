<?php
namespace App\Factories;
class AlumniCommitteeFactory
{
	public static function setProperty($alumniCommittee)
	//convert it into Business Object
	{
		$alumniObject=resolve('App\BusinessObjects\IAlumni');
		$alumniObject->setDesignation($alumniCommittee->designation);
		$alumniObject->setName($alumniCommittee->name);
		$alumniObject->setImage($alumniCommittee->image);
		$alumniObject->setBatch($alumniCommittee->batch);
		$alumniObject->setBloodgroup($alumniCommittee->bloodgroup);
		$alumniObject->setProfession($alumniCommittee->profession);
		$alumniObject->setEmail($alumniCommittee->email);
		$alumniObject->setPassword($alumniCommittee->password);
		$alumniObject->setGender($alumniCommittee->gender);

		return $alumniObject;
	}
	public static function convertIntoObject($comitteeModels)
	{
	 $alumniObjects=[];
	 foreach ($comitteeModels as $comitteeModel)
	 {
		$alumniObject=resolve('App\BusinessObjects\IAlumni');
		$alumniObject->setId($comitteeModel['id']);
		$alumniObject->setName($comitteeModel['name']);
		$alumniObject->setDesignation($comitteeModel['designation']);
		$alumniObject->setImage($comitteeModel['image']);
		$alumniObject->setBatch($comitteeModel->batch->name);
		$alumniObject->setBloodgroup($comitteeModel['bloodgroup']);
		$alumniObject->setProfession($comitteeModel->profession['name']);
		$alumniObject->setEmail($comitteeModel['email']);
		$alumniObjects[]=$alumniObject;
	}
	return $alumniObjects;
}
}