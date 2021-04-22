<?php
namespace App\Repositories;
use App\Factories\SliderFactory;
use Illuminate\Support\Facades\Storage;
class SliderRepository extends BaseRepository implements ISliderRepository
{
	public function __construct()
	{
		$sliderModel=resolve('App\Models\Slider');
		parent::setModel($sliderModel);
	}
	public function store($sliderObject)
	{
		$sliderArray=[
			'url'=>$sliderObject->getUrl()
		];
		parent::store($sliderArray);             
	}
	public function getAll()
	{
		$sliders=parent::getAll();
		$sliderObjects=SliderFactory::convertIntoObject($sliders);
		return $sliderObjects;
	}
	public function update($sliderObject,$id)
	{
		$slider=parent::get($id);
		//delete old image
		if (Storage::disk('public')->exists('images/slider/'.$slider->url))
		{
			Storage::disk('public')->delete('images/slider/'.$slider->url);
		}
		$sliderArray=[
			'url'=>$sliderObject->getUrl()
		];
		parent::update($sliderArray,$id);
	}

	public function delete($id)
	{
		$slider=parent::get($id);
		//delete old image
		if (Storage::disk('public')->exists('images/slider/'.$slider->url))
		{
			Storage::disk('public')->delete('images/slider/'.$slider->url);
		}
		parent::delete($id);
	}
}	