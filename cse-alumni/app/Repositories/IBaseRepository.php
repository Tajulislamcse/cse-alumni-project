<?php
namespace App\Repositories;
interface IBaseRepository
{
	public function store(array $data);
	public function get($id);
	public function getAll();
	public function update(array $data,$id);
	public function delete($id);
}