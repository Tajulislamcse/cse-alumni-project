<?php
namespace App\BusinessObjects;
interface ISlider
{
	public function setId($id);
	public function getId();
	public function setUrl($url);
	public function getUrl();
}