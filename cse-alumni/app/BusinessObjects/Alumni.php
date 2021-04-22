<?php
namespace App\BusinessObjects;
class Alumni extends Person implements IAlumni
{
	use Employee;

	private $id;
	private $alumniId;
	private $batch;
	private $session;
	private $email;
	private $password;

    public function setId($id)
	{
	 $this->id=$id;
	}
	public function getId()
	{
		return $this->id;
	}
	public function setAlumniId($alumniId)
	{
		$this->alumniId=$alumniId;
	}
	public function getAlumniId()
	{
		return $this->alumniId;
	}
	public function setBatch($batch)
	{
		$this->batch=$batch;
	}
	public function getBatch()
	{
		return $this->batch;
	}
	public function setSession($session)
	{
		$this->session=$session;
	}
	public function getSession()
	{
		return $this->session;
	}
	public function setDesignation($designation)
	{
		$this->designation=$designation;
	}
	public function getDesignation()
	{
		return $this->designation;
	}
    public function setEmail($email)
	{
		$this->email=$email;
	}
	public function getEmail()
	{
		return $this->email;
	}
	public function setPassword($password)
	{
		$this->password=$password;
	}
	public function getPassword()
	{
		return $this->password;
	}
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
	public function setImage($image)
	{
		$this->image=$image;
	}
	public function getImage()
	{
		return $this->image;
	}
	public function setPhoneNo($phoneNo)
	{
		$this->phoneNo=$phoneNo;
	}
	public function getPhoneNo()
	{
		return $this->phoneNo;
	}
	public function setGender($gender)
	{
		$this->gender=$gender;
	}
	public function getGender()
	{
		return $this->gender;
	}
}