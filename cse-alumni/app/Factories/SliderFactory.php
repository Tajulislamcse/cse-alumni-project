<?php
namespace App\Factories;
class SliderFactory
{
	public static function setProperty($slider)
	{
      $sliderObject=resolve('App\BusinessObjects\ISlider');
      $sliderObject->setUrl($slider->url);
      return $sliderObject;
	}
	public static function convertIntoObject($sliders)
	{
		$sliderObjects=[];
		foreach ($sliders as $slider)
		 {
           $sliderObject=resolve('App\BusinessObjects\ISlider');
           $sliderObject->setId($slider['id']);
           $sliderObject->setUrl($slider['url']);
           $sliderObjects[]=$sliderObject;
         }
       return $sliderObjects;
	}
}