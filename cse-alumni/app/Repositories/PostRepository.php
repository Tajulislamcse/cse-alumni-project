<?php
namespace App\Repositories;
use App\Models\Category;
use App\Factories\PostFactory;
use Illuminate\Support\Facades\Storage;
class PostRepository extends BaseRepository implements IPostRepository
{
	public function __construct()
	{
		$postModel=resolve('App\Models\Post');
		parent::setModel($postModel);
	}
	public function store($postObject)
	{   
		$category = Category::where('id',$postObject->getCategory())->first();
		$post=$this->model;//this is eloquent model
		$post->title=$postObject->getTitle();
		$post->description=$postObject->getDescription();
		$post->image=$postObject->getImage();
		$post->status=$postObject->getStatus();
		$post->publishedAt=$postObject->getPublishedAt();
        $post->user_id=$postObject->getAuthor();
		$post->category()->associate($category);
		$post->save();
	}
	public function getAll()
	{
		$posts=parent::getAll();
		$postObjects=PostFactory::convertIntoObjects($posts);
		return $postObjects;
	}
	public function get($id)
	{
		$post=parent::get($id);
		$postObject=PostFactory::convertIntoObject($post);
		return $postObject;
	}
	public function update($postObject,$id)
	{   
		$category = Category::where('id',$postObject->getCategory())->first();
		$post=parent::get($id);
		$post->title=$postObject->getTitle();
		$post->description=$postObject->getDescription();
		if($postObject->getImage())
		{   
					//delete old image
			if (Storage::disk('public')->exists('images/post/'.$post->image))
			{
				Storage::disk('public')->delete('images/post/'.$post->image);
			}
			$post->image=$postObject->getImage();
		}
		$post->status=$postObject->getStatus();
		$post->user_id=$postObject->getAuthor();
		$post->publishedAt=$postObject->getPublishedAt();
		$post->category()->associate($category);
		$post->save();
	}
	public function delete($id)
	{
		$post=parent::get($id);
		//            delete old image
		if (Storage::disk('public')->exists('images/post/'.$post->image))
		{
			Storage::disk('public')->delete('images/post/'.$post->image);
		}
		parent::delete($id);
	}
	public function countPublishedPost()
	{
		return $this->model->where('status',1)->count();
	}
    public function countPendingPost()
	{
		return $this->model->where('status',0)->count();
	}

}