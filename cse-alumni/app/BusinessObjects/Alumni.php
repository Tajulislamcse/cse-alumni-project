<?php
namespace App\BusinessObjects;
class Alumni extends Person implements IAlumni
{
	private $id;
	private $roll;
	private $batch;
	private $session;
	private $profession;
	private $password;

	public function setId($id)
	{
	 $this->id=$id;
	}
	public function getId()
	{
		return $this->id;
	}
	public function setRoll($roll)
	{
		$this->roll=$roll;
	}
	public function getRoll()
	{
		return $this->roll;
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
	public function setProfession($profession)
	{
		$this->profession=$profession;
	}
	public function getProfession()
	{
		return $this->profession;
	}
	public function setPassword($password)
	{
		$this->password=$password;
	}
	public function getPassword()
	{
		return $this->password;
	}

}