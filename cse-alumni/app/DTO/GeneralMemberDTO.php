<?php
namespace App\DTO;
class GeneralMemberDTO
{
	public $alumniId;
	public $name;
	public function __construct($alumniId,$name)
	{
		$this->alumniId=$alumniId;
		$this->name=$name;
	}
}