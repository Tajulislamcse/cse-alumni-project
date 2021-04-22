<?php
namespace App\BusinessObjects;
interface ICategory
{
	public function setId($id);
	public function getId();
	public function setName($name);
	public function getName();
}