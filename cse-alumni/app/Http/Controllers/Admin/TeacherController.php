<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ViewModels\DataTablesModel;
class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objOfviewTeacherModel=resolve('App\ViewModels\IViewTeacherModel');
        $fetchAllTeachers=$objOfviewTeacherModel->getAll();
        return view('Admin.Teacher.index',compact('fetchAllTeachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
        $objOfThisModel=resolve('App\ViewModels\ICreateTeacherModel');
        $objOfThisModel->store();
        return redirect('admin/teachers');
        //
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
         $objOfviewTeacherModel=resolve('App\ViewModels\IViewTeacherModel');
         $fetchRecord=$objOfviewTeacherModel->get($id);
         return view('Admin.Teacher.edit',compact('fetchRecord'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $objOfCreateTeacherModel=resolve('App\ViewModels\ICreateTeacherModel');
        $objOfCreateTeacherModel->update($id);
        return redirect('admin/teachers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $objOfviewTeacherModel=resolve('App\ViewModels\IViewTeacherModel');
        $objOfviewTeacherModel->delete($id);
        return redirect('/admin/teachers');
    }


    public function getTeachersJson(Request $request)
    {
        $dataTablesModel = new DataTablesModel($request);
        $model = resolve('App\ViewModels\IViewTeacherModel');
        return $model->getTeachersJsonData($dataTablesModel);
    }
}
