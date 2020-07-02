   @extends('alumni.layouts.master')
    @section('main-content')


         <!-- Page Content -->
  <div class="container-fluid">


    <div class="row mt-5">

      <!-- Post Content Column -->
      <div class="col-md-12">

        <!-- Title -->
        
     <div class="row">
      <div class="col-md-12">
        <!-- Author -->
        <p class="lead">
          <i class="fa fa-user"></i>&nbsp;By
          <a href="#">{{$post->user->name}}</a>&nbsp;

          {{$post->created_at->toFormattedDateString()}}
        </p>
      </div>
    </div>
       

        <!-- Date/Time -->
    

        
         <div class="text-center">
        <!-- Preview Image -->
        <img class="img-fluid rounded" style="width:900px;height:300px;" src="{{asset('/uploads/'.$post->image)}}" alt="">
      </div>

       
           <div class="row">
             <div class="col-md-12">

            <p class="font-weight-bold mt-5" style="font-size: 25px">{{$post->title}}</p>
            </h>
          </div>
        </div>
       

        <!-- Post Content -->
        
        <div class="row m-4">
          <div class="col-md-12">
         <p>{{$post->body}}</p>
          </div>
         
       </div>

      </div>

      
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

 


    @endsection
