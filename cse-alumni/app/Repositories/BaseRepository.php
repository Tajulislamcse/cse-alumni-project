<?php
namespace App\Repositories;
class BaseRepository implements IBaseRepository
{
	protected $model;
	public function setModel($model)
	{
		$this->model=$model;
	}
	public function store(array $data)
	{
        $this->model->create($data);//create is in built method in laravel
    }
	public function getAll()
	{
      return $this->model->all();
    }
	public function get($id)
	{
		return $this->model->findOrFail($id);
	}
    public function update(array $data,$id)
	{
		$requiredRecord=$this->model->findOrFail($id);
		$requiredRecord->update($data);
	}
	public function delete($id)
	{
		$this->model->destroy($id);
	}
    

	
}