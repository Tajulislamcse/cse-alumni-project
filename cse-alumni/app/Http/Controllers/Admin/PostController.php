<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
class PostController extends Controller
{
	public function create()
	{
	  //create view category model's object
		$viewCategoryModel=resolve('App\ViewModels\IViewCategoryModel');
		$categoryObjects=$viewCategoryModel->getAll();
		return view('admin.post.create',compact('categoryObjects'));
	}
	public function index()
	{
		//create object of store post model
		$viewPostModel=resolve('App\ViewModels\IViewPostModel');
		$postObjects=$viewPostModel->getAll();
		return view('admin.post.index',compact('postObjects'));
	}
	public function store()
	{
		$storePostModel=resolve('App\ViewModels\IStorePostModel');
		$storePostModel->store();
		session()->flash('message','Post has been created successfully');
		return redirect('admin/post');
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
			  //create view category model's object
		$viewCategoryModel=resolve('App\ViewModels\IViewCategoryModel');
		$categoryObjects=$viewCategoryModel->getAll();
		//create object of store post model
		$viewPostModel=resolve('App\ViewModels\IViewPostModel');
		$postObject=$viewPostModel->get($id);
		return view('admin.post.edit',compact('postObject','categoryObjects'));
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
		$storePostModel=resolve('App\ViewModels\IStorePostModel');
		$storePostModel->update($id);
		session()->flash('message','Post has been updated successfully');
		return redirect('admin/post');
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$viewPostModel=resolve('App\ViewModels\IViewPostModel');
		$viewPostModel->delete($id);
		return redirect('/admin/post');
	}
}
