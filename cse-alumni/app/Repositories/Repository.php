<?php
namespace App\Repositories;
class Repository implements IRepository
{
	protected $model;
	public function setModel($model)
	{
		$this->model=$model;
	}
	public function getModel()
	{
		return $this->model;
	}
	public function store($alumnisArray)
	{
		$this->model->create($alumnisArray);
	}
	public function getAll($batchNo)
	{
     $roleName='alumni';

   return $this->model->whereHas('roles', function ($q) use ($roleName,$batchNo) {
    $q->where([
    	'name'=>$roleName,
    	'batch'=>$batchNo
    ]);
})->get();
	
   }
	public function get($id)
	{
		return $this->model->findOrFail($id);
	}
	/*
	public function update($alumniArr,$id)
	{
		$record=$this->model->findOrFail($id);
		$record->update($alumniArr);
	}
     */
	
    /*
	public function delete($id)
	{
		$this->model->destroy($id);
	}
    */

	
}