<?php
namespace App\Repositories;
interface ISliderRepository
{
	public function store($sliderObject);
	public function getAll();
}