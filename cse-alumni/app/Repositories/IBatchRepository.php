<?php
namespace App\Repositories;
interface IBatchRepository
{
	public function store($name);
	public function getAll();
	public function update($name, $id);
	public function delete($id);
	public function countBatchWiseGeneralMember();
}