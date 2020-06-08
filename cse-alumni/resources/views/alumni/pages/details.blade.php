
@extends('alumni.layouts.master')
@section('main-content')



<div class="container mt-5">
    <div class="team-single">
        <div class="row card">
            <div class="col-md-5 bg-light-gray text-center py-5">
                <div>
                     <img src="{{asset('/uploads/'. $fetchRecord->getImage())}}" style="width:200px;">
                </div>
                <div>
                    <h1 class="margin-10px-bottom p-2 font-size24 md-font-size22 sm-font-size20 font-weight-600">{{$fetchRecord->getName()}}</h1>
                    <h4 class="sm-width-95 sm-margin-auto">  <i class="fas fa-briefcase"></i>
                                        <strong class="margin-10px-left text-orange">Profession:</strong><p class="p-2">{{$fetchRecord->getProfession()}}</p></h4>

                </div>
            </div>

            <div class="col-md-7">
                <div class="team-single-text padding-50px-left sm-no-padding-left">

                    <div class="contact-info-section margin-40px-tb">
                        <ul class="list-style9 no-margin">
                            <li>

                                <div class="row mt-3">
                                    <div class="col-md-5">
                                        

                                        <p class="text-orange">Roll:</p>
                                    </div>
                                    <div class="col-md-7">
                                        <p>{{$fetchRecord->getRoll()}}</p>
                                    </div>
                                </div>

                            </li>
                            <li>

                                <div class="row">
                                    <div class="col-md-5 ">
                                        
                                        <p class=" text-green">Batch:</p>
                                    </div>
                                    <div class="col-md-7">
                                        <p>{{$fetchRecord->getBatch()}}</p>
                                    </div>
                                </div>

                            </li>
                            <li>

                                <div class="row">
                                    <div class="col-md-5">
                                        
                                        <p class="text-lightred">Session:</p>
                                    </div>
                                    <div class="col-md-7">
                                        <p>{{$fetchRecord->getSession()}}</p>
                                    </div>
                                </div>

                            </li>
                            <li>

                                <div class="row">
                                    <div class="col-md-5">
                                        
                                        <p class="text-green">Bloodgroup:</p>
                                    </div>
                                    <div class="col-md-7">
                                        <p>{{$fetchRecord->getBloodgroup()}}</p>
                                    </div>
                                </div>

                            </li>
                            <li>

                                <div class="row">
                                    <div class="col-md-5">
                                     
                                        <p class="xs-margin-four-left text-purple">Phone:</p>
                                    </div>
                                    <div class="col-md-7">
                                        <p>{{$fetchRecord->getPhonenumber()}}</p>
                                    </div>
                                </div>

                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-5">
                                       
                                        <p class=" xs-margin-four-left text-pink"> <i class="p-2 fas fa-envelope text-pink"></i>Email:</p>
                                    </div>
                                    <div class="col-md-7">
                                        <p><a href="mailto:{{$fetchRecord->getEmail()}}">{{$fetchRecord->getEmail()}}</a></p>
</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                   


                </div>
            </div>

        
        </div>
    </div>
</div>


@endsection