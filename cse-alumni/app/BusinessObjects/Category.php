<?php
namespace App\BusinessObjects;
class Category implements ICategory
{
	private $id;
	private $name;
	public function setId($id)
	{
		$this->id=$id;
	}
	public function getId()
	{
		return $this->id;
	}
	public function setName($name)
	{
		$this->name=$name;
	}
	public function getName()
	{
		return $this->name;
	}
}