<?php
namespace App\Services;
use App\BusinessObjects\IAlumni;
interface IAlumniCommitteeService
{
	public function store(IAlumni $alumni);
	public function getAll();
}