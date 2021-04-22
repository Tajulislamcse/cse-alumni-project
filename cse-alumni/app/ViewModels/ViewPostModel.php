<?php
namespace App\ViewModels;
use App\Services\IPostService;
class ViewPostModel implements IViewPostModel
{
	private $_postService;
	public function __construct(IPostService $postService)
	{
		$this->_postService=$postService;
	}
	public function getAll()
	{
		return $this->_postService->getAll();
	}
	public function get($id)
	{
		return $this->_postService->get($id);
	}
	public function delete($id)
	{
       $this->_postService->delete($id);
	}
}