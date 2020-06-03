
@extends('alumni.layouts.master')
@section('main-content')



<div class="container">
    <div class="team-single">
        <div class="row card">
            <div class="col-lg-4 col-md-5 xs-margin-30px-bottom">
                <div class="team-single-img">
                     <img src="{{asset('/uploads/'. $fetchRecord->getImage())}}" style="width:339px;border: 80px solid #f1f1f1;">
                </div>
                <div class="bg-light-gray padding-30px-all md-padding-25px-all sm-padding-20px-all text-center">
                    <h1 class="margin-10px-bottom font-size24 md-font-size22 sm-font-size20 font-weight-600" style="padding: 10px">{{$fetchRecord->getName()}}</h1>
                    <h4 class="sm-width-95 sm-margin-auto">  <i class="fas fa-briefcase"></i>
                                        <strong class="margin-10px-left text-orange">Profession:</strong><h3>{{$fetchRecord->getProfession()}}</h3></h4>

                </div>
            </div>

            <div class="col-lg-8 col-md-7" style="margin-top: 78px">
                <div class="team-single-text padding-50px-left sm-no-padding-left">

                    <div class="contact-info-section margin-40px-tb">
                        <ul class="list-style9 no-margin">
                            <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        

                                        <strong class="margin-10px-left text-orange">Roll:</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{$fetchRecord->getRoll()}}</p>
                                    </div>
                                </div>

                            </li>
                            <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        
                                        <strong class="margin-10px-left text-green">Batch:</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{$fetchRecord->getBatch()}}</p>
                                    </div>
                                </div>

                            </li>
                            <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        
                                        <strong class="margin-10px-left text-lightred">Session:</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{$fetchRecord->getSession()}}</p>
                                    </div>
                                </div>

                            </li>
                            <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <img src="{{asset('/dist/img/bloodicon.jpg')}}" style="width:23px ">
                                        <strong class="margin-10px-left text-green">bloodgroup:</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{$fetchRecord->getBloodgroup()}}</p>
                                    </div>
                                </div>

                            </li>
                            <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-mobile-alt text-purple"></i>
                                        <strong class="margin-10px-left xs-margin-four-left text-purple">Phone:</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{$fetchRecord->getPhonenumber()}}</p>
                                    </div>
                                </div>

                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-envelope text-pink"></i>
                                        <strong class="margin-10px-left xs-margin-four-left text-pink">Email:</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p><a href="mailto:{{$fetchRecord->getEmail()}}">{{$fetchRecord->getEmail()}}</a></p>
</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                   


                </div>
            </div>

            <div class="col-md-12">

            </div>
        </div>
    </div>
</div>


@endsection