<?php
namespace App\Repositories;
use App\Factories\AlumniFactory;
class AlumniRepository extends Repository implements IAlumniRepository
{
	public function __construct()
	{
		$objOfModel=resolve('App\models\Alumni');
		parent::setModel($objOfModel);
	}
	public function store($alumni)
	{
		 $alumniArray=[
          'roll'=>$alumni->getRoll(),
          'name'=>$alumni->getName(),
          'batch'=>$alumni->getBatch(),
          'session'=>$alumni->getSession(),
          'bloodgroup'=>$alumni->getBloodgroup(),
          'image'=>$alumni->getImage(),
          'profession'=>$alumni->getProfession(),
          'phonenumber'=>$alumni->getPhonenumber(),
          'email'=>$alumni->getEmail(),
          'password'=>$alumni->getPassword(),
		 ];
		 parent::store($alumniArray);
	}
	public function getAll($batchNo)
	{
		$fetchAlldataFromDatabase=parent::getAll($batchNo);
		return AlumniFactory::setValueToBoFromDatabase($fetchAlldataFromDatabase);
	}
	public function get($id)
	{
		$fetchRecord=parent::get($id);
		return AlumniFactory::convertIntoBoFromDatabaseData($fetchRecord);
	}
/*
	public function update($senFactory,$id)
	{
		$alumniArr=[
          'roll'=>$senFactory->getRoll(),
          'name'=>$senFactory->getName(),
          'batch'=>$senFactory->getBatch(),
          'session'=>$senFactory->getSession(),
          'bloodgroup'=>$senFactory->getBloodgroup(),
          'image'=>$senFactory->getImage(),
          'profession'=>$senFactory->getProfession(),
          'phonenumber'=>$senFactory->getPhonenumber(),
          'email'=>$senFactory->getEmail(),
          'password'=>$senFactory->getPassword()
		];
		parent::update($alumniArr,$id);
	}
	public function delete($id)
	{
		parent::delete($id);
	}
*/
	 




   

}