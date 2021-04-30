<?php
namespace App\Services;
use App\BusinessObjects\IPost;
interface IPostService
{
	public function store(IPost $post);
	public function getAll();
	public function get($id);
	public function update(IPost $post,$id);
	public function delete($id);




}