<?php
namespace App\Repositories;
interface IAlumniCommitteeRepository
{
	public function store($alumniObject);
	public function getAll();
}