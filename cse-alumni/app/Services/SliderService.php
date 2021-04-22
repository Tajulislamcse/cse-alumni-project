<?php
namespace App\Services;
use App\BusinessObjects\ISlider;
use App\Repositories\ISliderRepository;
class SliderService implements ISliderService
{
	private $_sliderRepository;
	public function __construct(ISliderRepository $sliderRepository)
	{
       $this->_sliderRepository=$sliderRepository;
	}
	public function store(ISlider $slider)
	{
      $this->_sliderRepository->store($slider);
	}
	public function getAll()
	{
		return $this->_sliderRepository->getAll();
	}
	public function update(ISlider $slider,$id)
	{
      $this->_sliderRepository->update($slider,$id);
    }
	public function delete($id)
	{
		$this->_sliderRepository->delete($id);
	}
}