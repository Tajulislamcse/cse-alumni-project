<?php
namespace App\Factories;
use App\BusinessObjects\Post;
class PostFactory
{
	public static function setProperty($post)
	{
		$postObject=resolve('App\BusinessObjects\IPost');
		$postObject->setTitle($post->title);
		if(isset($post->image))
		{
			$postObject->setImage($post->image);
		}
		$postObject->setDescription($post->description);
		$postObject->setStatus($post->status);
		$postObject->setPublishedAt($post->publishedAt);

		$postObject->setCategory($post->category);
		$postObject->setAuthor($post->user_id);
		return $postObject;
	}
	public static function convertIntoObjects($posts)
	{
		$postObjects=[];
		foreach ($posts as $post)
		{   
			$postObject=resolve('App\BusinessObjects\IPost');
			$postObject->setId($post['id']);
			$postObject->setTitle($post['title']);
			$postObject->setImage($post['image']);
			$postObject->setDescription($post['description']);
			$postObject->setStatus($post['status']);
			$postObject->setCategory($post->category['name']);
			$postObject->setAuthor($post->user['name']);
		    $postObject->setPublishedAt($post['publishedAt']);

			$postObjects[]=$postObject;
		}
		return $postObjects;
	}
	public static function convertIntoObject($post)
	{
		$postObject=resolve('App\BusinessObjects\IPost');
		$postObject->setId($post['id']);
		$postObject->setTitle($post['title']);
		$postObject->setDescription($post['description']);
		$postObject->setStatus($post['status']);
		$postObject->setCategory($post->category['id']);
		return $postObject;
	}
}