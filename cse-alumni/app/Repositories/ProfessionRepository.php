<?php
namespace App\Repositories;
class ProfessionRepository extends BaseRepository implements IProfessionRepository
{
	public function __construct()
	{
		$professionModel=resolve('App\Models\Profession');
		parent::setModel($professionModel);
	}
	public function getProfession($alumniObject)
	{
		$this->model->name=$alumniObject->getProfession();
		return $this->model;
	}
	public function updateProfession($alumniObject,$id)
	{
		$professionArray=[
			'name'=>$alumniObject->getProfession(),
			'appointmentDate'=>$alumniObject->getAppointmentDate()
		];
		$requiredRecord=$this->model->findorFail($id);	    
		$requiredRecord->update($professionArray);
		return $requiredRecord;
	}
}