<?php
namespace App\Repositories;
interface IPostRepository
{
	public function store($postObject);
	public function getAll();
	public function get($id);
	public function update($postObject,$id);
	public function delete($id);
	public function countPublishedPost();
	public function countPendingPost();





}