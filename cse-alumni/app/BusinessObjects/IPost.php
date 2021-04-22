<?php
namespace App\BusinessObjects;
interface IPost
{
	public function setId($id);
	public function getId();
	public function setTitle($title);
	public function getTitle();
	public function setImage($image);
	public function getImage();
	public function setDescription($description);
	public function getDescription();
	public function setStatus($status);
	public function getStatus();
	public function setCategory($category);
	public function getCategory();
	public function setAuthor($author);
	public function getAuthor();
	public function setPublishedAt($date);
	public function getPublishedAt();
}