<?php
namespace App\BusinessObjects;
interface IAlumni extends IPerson
{
	public function setId($id);
	public function getId();
	public function setRoll($roll);
	public function getRoll();
	public function setBatch($batch);
	public function getBatch();
	public function setSession($session);
	public function getSession();
	public function setProfession($profession);
	public function getProfession();
	public function setPassword($password);
	public function getPassword();
}