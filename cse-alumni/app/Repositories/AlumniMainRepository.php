<?php
namespace App\Repositories;
use App\Factories\AlumniFactory;
use App\Models\Role;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
class AlumniMainRepository extends BaseRepository implements IAlumniMainRepository
{  	//here alumni variable refers to generalMember's record
	public function __construct()
	{
		$userModel=resolve('App\Models\User');//Object of User model
		parent::setModel($userModel);
	}

	public function store($alumniObject)
	{
		$alumniArray=[
			'alumniId'=>$alumniObject->getAlumniId(),
			'name'=>$alumniObject->getName(),
			'batch_id'=>$alumniObject->getBatch(),
			'session'=>$alumniObject->getSession(),
			'image'=>$alumniObject->getImage(),
			'bloodgroup'=>$alumniObject->getBloodgroup(),
			'phoneNo'=>$alumniObject->getPhoneNo(),
			'email'=>$alumniObject->getEmail(),
			'password'=>$alumniObject->getPassword(),
			'gender'=>$alumniObject->getGender()
		];
		$alumni=$this->model->create($alumniArray);
		$alumni->roles()->attach(Role::where('name','GeneralMember')->first());
		return $alumni;
	}

	public function updateBasicInfo($alumniObject,$id)
	{
       $alumniArray=[//converting to array to map fillable property
       'alumniId'=>$alumniObject->getAlumniId(),
       'name'=>$alumniObject->getName(),
       'batch'=>$alumniObject->getBatch(),
       'session'=>$alumniObject->getSession(),
       'bloodgroup'=>$alumniObject->getBloodgroup(),
       'phoneNo'=>$alumniObject->getPhoneNo(),
       'email'=>$alumniObject->getEmail(),
       'gender'=>$alumniObject->getGender()
    ];
    parent::update($alumniArray,$id);
 }

 public function updateImage($alumniObject,$id)
 {
		//delete old image
 	$alumni=parent::get($id);
 	Storage::disk('public')->delete('images/Alumni/'.$alumni->image);
 	$imageArray=[
 		'image'=>$alumniObject->getImage()
 	];
 	parent::update($imageArray,$id);
 }

 public function getAllByBatch($batchId)
 {
 	$roleName='GeneralMember';
 	$specificBatchAlumnis=$this->model->whereHas('roles', function ($q) use ($roleName,$batchId) {
 		$q->where([
 			['name','=',$roleName],
 			['users.batch_id','=',$batchId]
 		]);
 	})->get();
 	$alumniObjects=AlumniFactory::convertIntoObjects($specificBatchAlumnis);
 	return $alumniObjects;
 }

 public function get($id)
 {
 	$alumni=parent::get($id);
 	$alumniObject=AlumniFactory::convertIntoObject($alumni);
 	return $alumniObject;
 }

	public function getAlumnis($professionModel)//Here profession model is used to identify the person who changed his job.Because we want to send a notification to all alumni(General Member not committee member) except he.
	{
		$roleName='GeneralMember';
		$id=$professionModel->user_id;
		$alumnis=$this->model->whereHas('roles', function ($q) use ($roleName,$id) {
			$q->where([
				['name','=',$roleName],
				['users.id','!=',$id],
				['users.status','=',1]
			]);
		})->get();
		return $alumnis;
	}

	public function getCount()
	{
		$roleName='GeneralMember';
		return $this->model->whereHas('roles', function ($q) use ($roleName) {
			$q->where([
				['name','=',$roleName],
				['users.status','=',1]
			]);
		})->count();
	}

	public function todaysRegisteredAlumnis()
   {
  	$roleName='GeneralMember';
		return $this->model->whereHas('roles', function ($q) use ($roleName) {
			$q->where([
				['name','=',$roleName],
				['users.status','=',1]
			]);
		})->whereDate('created_at',Carbon::today())->get();
	}
	public function getRegisteredGeneralMemberBatch()//for showing dynamic alumni batch list.
	{
		$roleName='GeneralMember';
		return $this->model->whereHas('roles', function ($q) use ($roleName) {
			$q->where([
				['name','=',$roleName],
				['users.status','=',1],
				['users.batch_id','!=',null]
			]);
		})->distinct()
		->get(['batch_id']);
	}


}
