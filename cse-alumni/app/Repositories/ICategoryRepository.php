<?php
namespace App\Repositories;
interface ICategoryRepository
{
	public function store($categoryObject);
	public function getAll();
	public function update($categoryObject,$id);
	public function delete($id);
	public function getCategoryWisePosts();
}