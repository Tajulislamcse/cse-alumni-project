<?php
namespace App\BusinessObjects;
interface IAlumni
{
	public function setId($id);
	public function getId();
	public function setAlumniId($alumniId);
	public function getAlumniId();
	public function setBatch($batch);
	public function setDesignation($designation);
	public function getDesignation();
	public function getBatch();
	public function setSession($session);
	public function getSession();
	public function setEmail($email);
	public function getEmail();
	public function setPassword($password);
	public function getPassword();
}