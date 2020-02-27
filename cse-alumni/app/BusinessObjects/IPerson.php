<?php
namespace App\BusinessObjects;
interface IPerson
{
	public function setName($name);
	public function getName();
	public function setBloodgroup($bloodgroup);
	public function getBloodgroup();
	public function setPhonenumber($phonenumber);
	public function getPhonenumber();
	public function setEmail($email);
	public function getEmail();
	public function setImage($Image);
	public function getImage();
}