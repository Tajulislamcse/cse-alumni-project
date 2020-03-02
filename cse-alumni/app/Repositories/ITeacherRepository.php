<?php 
namespace App\Repositories;
interface ITeacherRepository extends IRepository
{
	public function store($teacher);
	public function getAll();

}