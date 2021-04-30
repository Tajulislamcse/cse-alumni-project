<?php
namespace App\Services;
use App\BusinessObjects\ISlider;
interface ISliderService
{
	public function store(ISlider $slider);
	public function getAll();
	public function update(ISlider $slider,$id);
	public function delete($id);



}