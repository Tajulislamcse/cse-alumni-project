<?php
namespace App\Repositories;
interface IRepository
{
	public function store($alumnisArray);
	public function getAll($batchNo);
	public function get($id);
	//public function update($alumniArr,$id);
	//public function delete($id);
}