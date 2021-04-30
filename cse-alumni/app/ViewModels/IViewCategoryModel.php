<?php
namespace App\ViewModels;
interface IViewCategoryModel
{
	public function getAll();
	public function delete($id);
}