<?php
namespace App\BusinessObjects;
abstract class Person
{
	private $name;
	private $bloodgroup;
	private $image;
	private $phoneNo;
	private $gender;
    abstract protected function setName($name);
    abstract protected function getName();
    abstract protected function setBloodgroup($bloodgroup);
    abstract protected function getBloodgroup();
    abstract protected function setImage($image);
    abstract protected function getImage();
    abstract protected function setPhoneNo($phoneNo);
    abstract protected function getPhoneNo();
    abstract protected function setGender($gender);
    abstract protected function getGender();
	
}




