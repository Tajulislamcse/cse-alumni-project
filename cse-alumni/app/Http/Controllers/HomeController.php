<?php
namespace App\Http\Controllers;
class HomeController extends Controller
{
	public function index()
	{
     $homePageModel=resolve('App\ViewModels\IHomePageModel');
     list($postObjects,$sliderObjects)=$homePageModel->getData();
     return view('home',compact('postObjects','sliderObjects'));

	}
 }
