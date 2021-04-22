<?php
namespace App\Repositories;
use App\Factories\CategoryFactory;
use App\Factories\PostFactory;
class CategoryRepository extends BaseRepository implements ICategoryRepository
{   
	public function __construct()
	{
		$model=resolve('App\Models\Category');
		parent::setModel($model);
	}
	public function store($categoryObject)
	{
		$categoryArray=CategoryFactory::convertIntoArray($categoryObject);
		parent::store($categoryArray);

	}
	public function getAll()
	{
		$categories=parent::getAll();
		$categoryObjects=CategoryFactory::convertIntoObjects($categories);
		return $categoryObjects;
	}
	public function update($categoryObject,$id)
	{
		$categoryArray=CategoryFactory::convertIntoArray($categoryObject);
		parent::update($categoryArray,$id);
	}
	public function delete($id)
	{
		parent::delete($id);
	}
	public function getCategoryWisePosts()
	{
		$posts=array();
		$postObjects=array();
		$categories=parent::getAll();
		foreach ($categories as $category)
		{
			$posts[$category->name]=$category->posts()
			->where('status',1)
			->latest()
			->take(5)
			->get();
			$postObjects[$category->name]=PostFactory::convertIntoObjects($posts[$category->name]);

		}
		return $postObjects;



	}
}