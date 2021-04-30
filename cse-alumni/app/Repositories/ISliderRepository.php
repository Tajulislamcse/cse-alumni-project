<?php
namespace App\Repositories;
interface ISliderRepository
{
	public function store($sliderObject);
	public function getAll();
	public function update($sliderObject,$id);
	public function delete($id);

}