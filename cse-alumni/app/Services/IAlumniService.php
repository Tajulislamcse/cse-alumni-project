<?php
namespace App\Services;
use App\BusinessObjects\IAlumni;
interface IAlumniService
{
	public function store(IAlumni $alumni);
	public function getAll();
	public function get($id);
	//public function update($sendFactory,$id);
	//public function delete($id);


}