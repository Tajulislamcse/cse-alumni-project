<?php
namespace App\ViewModels;
interface IViewAlumniModel
{
	public function getAllByBatch($batch);
	//public function delete($id);
	public function get($id);
}
