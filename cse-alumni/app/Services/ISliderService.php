<?php
namespace App\Services;
use App\BusinessObjects\ISlider;
interface ISliderService
{
	public function store(ISlider $slider);
}