<?php
namespace App\ViewModels;
use App\Services\ISliderService;
class ViewSliderModel implements IViewSliderModel
{
	private $_sliderService;
	public function __construct(ISliderService $sliderService)
	{
		$this->_sliderService=$sliderService;
	}
	public function getAll()
	{
		return $this->_sliderService->getAll();
	}
	public function delete($id)
	{
		$this->_sliderService->delete($id);
	}
}