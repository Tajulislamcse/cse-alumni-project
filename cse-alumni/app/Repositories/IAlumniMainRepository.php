<?php
namespace App\Repositories;
interface IAlumniMainRepository
{
	public function store($alumniObject);
	public function updateBasicInfo($alumniObject,$id);
	public function updateImage($alumniObject,$id);
	public function getAlumnis($professionModel);
	public function getCount();
	public function getRegisteredAlumniBatch();
	public function todaysRegisteredAlumnis();
	public function getAllByBatch($batch);
	public function get($id);
}