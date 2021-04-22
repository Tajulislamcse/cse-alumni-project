<?php
namespace App\Factories;
class CategoryFactory
{   
	public static function setProperty($category)
	{
	  $categoryObject=resolve('App\BusinessObjects\ICategory');
	  $categoryObject->setName($category->name);
	  return $categoryObject;
    }
    public static function convertIntoArray($categoryObject)
    {
    	$categoryArray=[
    		'name'=>$categoryObject->getName()
    	];
    	return $categoryArray;
    }
    public static function convertIntoObjects($categories)
    {
       $categoryObjects=[];
       foreach($categories as $category)
       { 
         $categoryObject=resolve('App\BusinessObjects\ICategory');
         $categoryObject->setId($category['id']);
         $categoryObject->setName($category['name']);
         $categoryObjects[]=$categoryObject;
       }
       return $categoryObjects;
       
    }
}