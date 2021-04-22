<?php
namespace App\Services;
use App\BusinessObjects\ICategory;
interface ICategoryService
{
	public function store(ICategory $category);
	public function getAll();
}