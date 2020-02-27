<?php
namespace App\BusinessObjects;

class Person implements IPerson
{
	private $name;
	private $bloodgroup;
	private $phonenumber;
	private $email;
	private $image;

	public function setName($name)
	{
      $this->name=$name;
	}
	public function getName()
	{
		return $this->name;
	}
   
	public function setBloodgroup($bloodgroup)
	{
		$this->bloodgroup=$bloodgroup;
	}
	public function getBloodgroup()
	{
		return $this->bloodgroup;
	}
	public function setPhonenumber($phonenumber)
	{
		$this->phonenumber=$phonenumber;
	}
	public function getPhonenumber()
	{
		return $this->phonenumber;
	}
	public function setEmail($email)
	{
		$this->email=$email;
	}
	public function getEmail()
	{
		return $this->email;
	}
	public function setImage($image)
	{
      $this->image=$image;
	}
	public function getImage()
	{
		return $this->image;
	}
}




