<?php
namespace App\Repositories;
use App\Models\Role;
use App\Factories\AlumniCommitteeFactory;
class AlumniCommitteeRepository extends BaseRepository implements IAlumniCommitteeRepository
{
	public function __construct()
	{
		$userModel=resolve('App\Models\User');
		parent::setModel($userModel);
	}
	public function store($alumniObject)
	{
		$committeeArray=[
			'name'=>$alumniObject->getName(),
			'batch_id'=>$alumniObject->getBatch(),
			'image'=>$alumniObject->getImage(),
			'bloodgroup'=>$alumniObject->getBloodgroup(),
			'designation'=>$alumniObject->getDesignation(),
			'email'=>$alumniObject->getEmail(),
			'password'=>$alumniObject->getPassword(),
			'gender'=>$alumniObject->getGender()
		];
		//dd($committeeArray);
		$committee=$this->model->create($committeeArray);
		$committee->roles()->attach(Role::where('name','CommitteeMember')->first());
		return $committee;
	}
	public function getAll()
	{
		$roleName='CommitteeMember';
		$committeeMembers=$this->model->whereHas('roles', function ($q) use ($roleName) {
			$q->where([
				['name','=',$roleName],
				['users.status','=',1]
			]);
		})->get();

		$alumniObjects=AlumniCommitteeFactory::convertIntoObject($committeeMembers);
		return $alumniObjects;
	}
	
}