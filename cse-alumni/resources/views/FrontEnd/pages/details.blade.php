
@extends('FrontEnd.layouts.master')
@section('main-content')
<div class="container">

    <!-- Heading Row -->
    <div class="row align-items-center my-5">
      <div class="col-lg-7">
        <img class="img-fluid rounded mb-4 mb-lg-0"  src="{{asset('/uploads/'.$fetchRecord->getImage()) }}" alt="">
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <h1 class="font-weight-light">Profession</h1>
        <p>{{$fetchRecord->getProfession()}}</p>
    

    <form style="display:inline" action="/job/edit/{{ $fetchRecord->getId() }}"
                                    method="GET">
                                    
   

  
                  
                   



          <button type="submit" class="btn btn-info btn-sm" href="#">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </button>
                                </form>





        
      </div>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <!-- Call to Action Well -->
    <div class="card text-white bg-secondary my-5 py-4 text-center">
      <div class="card-body">
        <h2 class="text-white m-0">{{$fetchRecord->getName()}}'s Profile</h2>
      </div>
    </div>

    <!-- Content Row -->
    <div class="row">
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
           
            <p class="card-text"><b>Roll:</b>{{$fetchRecord->getRoll()}}</p>
             <p class="card-text"><b>Batch:</b>{{$fetchRecord->getBatch()}}</p>
            
          </div>
          <div class="card-footer">
            
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
           
            <p class="card-text"><b>Bloodgroup:</b>{{$fetchRecord->getBloodgroup()}}</p>
              <p class="card-text"><b>Session:</b>{{$fetchRecord->getSession()}}</p>
              
          </div>
          <div class="card-footer">
        
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            
            <p class="card-text"><b>PhoneNumber:</b>{{$fetchRecord->getPhonenumber()}}</p>
              <p class="card-text"><b>Email:</b>{{$fetchRecord->getEmail()}}</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">update</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->

    </div>
    <!-- /.row -->

  </div>
  @endsection