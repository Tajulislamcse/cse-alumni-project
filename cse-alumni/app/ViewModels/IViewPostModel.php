<?php
namespace App\ViewModels;
interface IViewPostModel
{
	public function getAll();
	public function get($id);
	public function delete($id);
}