<?php
namespace App\ViewModels;
use App\BusinessObjects\ICategory;
interface IStoreAlumniCommitteeModel
{
	public function store(ICategory $category);
}