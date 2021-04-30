<?php
namespace App\ViewModels;
interface IStoreCategoryModel
{
	public function store();
	public function update($id);
}