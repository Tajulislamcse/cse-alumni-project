<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DTO\GeneralMemberDTO;
use App\Models\User;

class ProfileController extends Controller
{
    private $successCode=200;
    public function index()
    {
        $batch='cse-7th';
        $viewAlumniModel=resolve('App\ViewModels\IViewAlumniModel');
        $alumniObjects=$viewAlumniModel->getAllByBatch($batch);
        $alumniArray=[];
        for($i=0;$i<count($alumniObjects);$i++)
        {
          $obj=new GeneralMemberDTO($alumniObjects[$i]->getAlumniId(),$alumniObjects[$i]->getName());
          $alumniArray[]=$obj;
        }
        return response()->json(compact('alumniArray'),$this->successCode);

    }

}
