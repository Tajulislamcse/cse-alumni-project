<?php
namespace App\Services;
use App\BusinessObjects\IPost;
interface IPostService
{
	public function store(IPost $post);
}