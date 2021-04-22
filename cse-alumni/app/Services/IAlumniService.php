<?php
namespace App\Services;
use App\BusinessObjects\IAlumni;
interface IAlumniService
{
	public function store(IAlumni $alumni);
	public function getAllByBatch($batch);
	public function get($id);
	public function updateBasicInfo(IAlumni $alumni,$id);
	public function updateProfession(IAlumni $alumni,$id);
	public function updateImage(IAlumni $alumni,$id);
}