<?php
namespace App\BusinessObjects;
class Slider implements ISlider
{ 
	private $id;
	private $url;
	public function setId($id)
	{
      $this->id=$id;
	}
	public function getId()
	{
		return $this->id;
	}
	public function setUrl($url)
	{
		$this->url=$url;
	}
	public function getUrl()
	{
		return $this->url;
	}
}