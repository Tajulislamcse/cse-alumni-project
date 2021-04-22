<?php
namespace App\ViewModels;
use App\Repositories\ICategoryRepository;
use App\Repositories\ISliderRepository;
class HomePageModel implements IHomePageModel
{
	private $_categoryRepository;
	private $_sliderRepository;
	public function __construct(ICategoryRepository $categoryRepository,ISliderRepository $sliderRepository)

	{
		$this->_categoryRepository=$categoryRepository;
		$this->_sliderRepository=$sliderRepository;
	}

    public function getData()
    {
      $postObjects=$this->_categoryRepository->getCategoryWisePosts();
      $sliderObjects=$this->_sliderRepository->getAll();
      return array($postObjects,$sliderObjects);
    }
}