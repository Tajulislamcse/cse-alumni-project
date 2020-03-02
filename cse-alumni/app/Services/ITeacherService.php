<?php
namespace App\Services;
use App\BusinessObjects\ITeacher;
interface ITeacherService
{
	public function store(ITeacher $teacher);
	public function getAll();
}