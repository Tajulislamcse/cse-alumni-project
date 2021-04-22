<?php
namespace App\BusinessObjects;
class Post implements IPost
{
	private $id;
	private $title;
	private $image;
	private $description;
	private $status;
	private $category;
	private $author;
	private $publishedAt;
    
    public function setId($id)
    {
    	$this->id=$id;
    }
    public function getId()
    {
    	return $this->id;
    }
	public function setTitle($title)
	{
		$this->title=$title;
	}
	public function getTitle()
	{
		return $this->title;
	}
	public function setImage($image)
	{
		$this->image=$image;
	}
	public function getImage()
	{
		return $this->image;
	}
	public function setDescription($description)
	{
		$this->description=$description;
	}
	public function getDescription()
	{
		return $this->description;
	}
	public function setStatus($status)
	{
		$this->status=$status;
	}
	public function getStatus()
	{
		return $this->status;
	}
    public function setCategory($category)
	{
		$this->category=$category;
	}
	public function getCategory()
	{
		return $this->category;
	}
	public function setAuthor($author)
	{
		$this->author=$author;
	}
	public function getAuthor()
	{
		return $this->author;
	}
	public function setPublishedAt($date)
	{
		$this->publishedAt=$date;
	}
	public function getPublishedAt()
	{
		return $this->publishedAt;
	}

}