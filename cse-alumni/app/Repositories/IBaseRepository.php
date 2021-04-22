<?php
namespace App\Repositories;
interface IBaseRepository
{
	public function store(array $data);
	public function get($id);
	//public function update($alumniArr,$id);
	//public function delete($id);
}