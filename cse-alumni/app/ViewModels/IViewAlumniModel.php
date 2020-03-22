<?php
namespace App\ViewModels;
interface IViewAlumniModel
{
	public function getAll($batchNo);
	//public function delete($id);
	public function get($id);
}