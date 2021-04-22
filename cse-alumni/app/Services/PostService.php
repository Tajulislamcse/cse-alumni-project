<?php
namespace App\Services;
use App\Repositories\IPostRepository;
use App\BusinessObjects\IPost;
class PostService implements IPostService
{
	private $_postRepository;
	public function __construct(IPostRepository $postRepository)
	{
      $this->_postRepository=$postRepository;
	}
	public function store(IPost $post)
	{
	  $this->_postRepository->store($post);
	}
	public function getAll()
	{
		return $this->_postRepository->getAll();
	}
	public function get($id)
	{
		return $this->_postRepository->get($id);
	}
	public function update(IPost $post,$id)
	{
	  $this->_postRepository->update($post,$id);

	}
	public function delete($id)
	{
		$this->_postRepository->delete($id);
	}
}