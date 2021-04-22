<?php
namespace App\Repositories;
interface IProfessionRepository
{
	public function getProfession($alumniObject);
	public function updateProfession($alumniObject,$id);
}