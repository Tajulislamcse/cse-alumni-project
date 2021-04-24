<?php
namespace App\ViewModels;
use App\Services\ICategoryService;
use App\Factories\CategoryFactory;
use Illuminate\Http\Request;
class StoreCategoryModel implements IStoreCategoryModel
{
	private $_categoryService;
	public $name;
	public function __construct(Request $request,ICategoryService $categoryService)
	{
      $this->_categoryService=$categoryService;
      $this->loadFields($request);
	}
	public function store()
	{
      $categoryObject=CategoryFactory::setProperty($this);
      $this->_categoryService->store($categoryObject);
	}
	public function loadFields(Request $request)
	{
		$validateData=$request->validate([
			'category'=>'required'
		]);
		$this->name=$request->category;
	}
	public function update($id)
	{
      $categoryObject=CategoryFactory::setProperty($this);
      $this->_categoryService->update($categoryObject,$id);
    }
}