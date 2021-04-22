<?php
namespace App\ViewModels;
use App\Services\ICategoryService;
class ViewCategoryModel implements IViewCategoryModel
{
	private $_categoryService;
	public function __construct(ICategoryService $categoryService)
	{
		$this->_categoryService=$categoryService;
	}
	public function getAll()
	{
		return $this->_categoryService->getAll();
	}
	public function delete($id)
	{
		$this->_categoryService->delete($id);
	}
}