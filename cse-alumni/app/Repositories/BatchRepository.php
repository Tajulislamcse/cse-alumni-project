<?php
namespace App\Repositories;
class BatchRepository extends BaseRepository implements IBatchRepository
{
	public function __construct()
	{
		$batchModel=resolve('App\Models\Batch');
		parent::setModel($batchModel);
	}
	public function store($name)
	{
		$this->model->name = $name;
		$this->model->save();
	}
	public function getAll()
	{
		return $this->model->all();
	}
	public function update($name, $id)
	{
		$batch = $this->model->findOrFail($id);
		$batch->name = $name;
		$batch->save();
	}
	public function delete($id)
	{
		parent::delete($id);
	}
	public function countBatchWiseGeneralMember()
	{
		$batches = $this->getAll();
		$batchArray = [];
		foreach( $batches as $batch)
		{
			$batchArray[$batch->name] = $batch->generalMembers->count();
		}
		return $batchArray;
	}

}