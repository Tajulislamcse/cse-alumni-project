<?php
namespace App\Repositories;
interface IAlumniRepository
{
	public function store($alumni);
	public function getAll();
	public function get($id);
	public function update($senFactory,$id);
	public function delete($id);
}