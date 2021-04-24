<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
class SliderImageController extends Controller
{
	public function index()
	{
	 //create store category model's object
		$viewSliderModel=resolve('App\ViewModels\IViewSliderModel');
		$sliderObjects=$viewSliderModel->getAll();
		return view('admin.SliderImage.index',compact('sliderObjects'));
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store()
	{
	  //create store slider model's object
		$storeSliderModel=resolve('App\ViewModels\IStoreSliderModel');
		$storeSliderModel->store();
		return response()->json(['success'=>'slider added successfully']);
		
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update($id)
	{
	 //create store slider model's object
		$storeSliderModel=resolve('App\ViewModels\IStoreSliderModel');
		$storeSliderModel->update($id);
		return response()->json(['success'=>'slider updated successfully']);
		
	}
	public function destroy($id)
	{
		$viewSliderModel=resolve('App\ViewModels\IViewSliderModel');
		$viewSliderModel->delete($id);
        return response() ->json(['code'=>200,'success' => 'Successfully Deleted']);

	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
   */
}
