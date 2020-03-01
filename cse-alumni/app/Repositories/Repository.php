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
	public function store($Array)
	{
		$this->model->create($Array);
	}
	public function getAll()
	{
		return $this->model->all();
	}
	public function get($id)
	{
		return $this->model->findOrFail($id);
	}
	public function update($Array,$id)
	{
		$record=$this->model->findOrFail($id);
		$record->update($Array);
	}

	public function getWithFilter($field, $fieldValue, $orderColumn, $orderDirection, 
        $itemCount)
    {
        return $this->model->where($field, $fieldValue)
            ->orderBy($orderColumn, $orderDirection)
            ->take($itemCount)
            ->get();
    }
	public function delete($id)
	{
		$this->model->destroy($id);
	}


	
}