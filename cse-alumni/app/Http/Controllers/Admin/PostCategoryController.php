<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
class PostCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //create view category model's object
        $viewCategoryModel=resolve('App\ViewModels\IViewCategoryModel');
        $categoryObjects=$viewCategoryModel->getAll();
        return view('admin.category.index',compact('categoryObjects'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    { 
      //create store category model's object
      $storeCategoryModel=resolve('App\ViewModels\IStoreCategoryModel');
      $storeCategoryModel->store();
      session()->flash('message','Category has been created successfully');
      return redirect('admin/category');
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
     //create store category model's object
      $storeCategoryModel=resolve('App\ViewModels\IStoreCategoryModel'); 
      $storeCategoryModel->update($id);
      return redirect()->back(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //create store category model's object
      $viewCategoryModel=resolve('App\ViewModels\IViewCategoryModel');
      $viewCategoryModel->delete($id);
      return redirect('admin/category');
      
    }
}
