
@extends('alumni.layouts.master')
  <!-- Masthead -->
  @section('main-content')
   <div class="container">
    <div class="row">
   <!--Carousel Wrapper-->
      <div class="col-md-12 mt-5">
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  
  <div class="carousel-inner" role="listbox">
    <!--First slide-->
    <div class="carousel-item active">
      <img class="d-block w-100" src="/dist/img/slider1.jpg" style="height:350px" 
        alt="First slide">
    </div>
    <!--/First slide-->
    <!--Second slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="/dist/img/slider2.jpg"
        alt="Second slide" style="height:350px">
    </div>
    <!--/Second slide-->
    <!--Third slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="/dist/img/slider3.jpg"
        alt="Third slide" style="height:350px">
    </div>
    <!--/Third slide-->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
</div>
</div>
  
            <div class="row">
    <div class="col-md-12">
        <h2 style="text-align: center;margin-bottom: .5rem;margin-top: 2rem"><span style="color: #003300;"><strong>COUCSEALUMNI</strong></span></h2>
        <p style="text-align: center;"><code></code><strong><span style="color: #003366;">Department of Computer Science and Engineering</span></strong>
        </p>
        <p style="text-align: center;"><strong><span style="color: #003366;">Comilla University</span></strong>
        </p>
        <p style="text-align: center;"></p>
        <p style="text-align: justify;">Welcome to the <strong style="color: #000080;">Comilla University Computer
            Science and Engineering Alumni (COUCSEALUMNI)</strong> <em><strong>Community</strong></em> of the Department
            of Computer Science and Engineering,  Comilla University. Let our relationship with each other to
            continue after the graduation also. The Alumni Association is a best place for you to stay connected and
            engaged to your alma mater through events, programs and networking opportunities and campus updates.</p>
    </div>
</div>


<!--News and Events section start from here-->

<div class="news-section my-4">
        
            
        <div class="row">
            <div class="col-lg-6">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="notice-tab" data-toggle="tab" href="#notice" role="tab" aria-controls="notice" aria-selected="true" style="background: #418bca;
    color: #ffffff;"><i class="far fa-newspaper"></i> NEWS</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="notice" role="tabpanel" aria-labelledby="notice-tab">
                                                


@foreach($news as $n)

<ul class="list-unstyled item-lists">
            <li>

                                                      <small>{{$n->created_at->toFormattedDateString() }}</small>

            
            <p class="mb-1 text-left" >
                                    <i class="fa fa-newspaper"></i>
                                <a href="/postdetails/{{$n->id}}">{{$n->title}}</a>
            </h4>
        </li>
        
    </ul>
    
    @endforeach
    @if( $news->count()==5)
<div class="row text-center">
    <div class="col-md-12 text-right">
    

                    <a href="" class="" style="font-size: 23px">View All</a>
                  
            </div>
          
</div>
@endif



              </div>
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="news-tab" data-toggle="tab" href="#news" role="tab" aria-controls="news" aria-selected="true" style="background: #418bca;
    color: #ffffff;">
                            <i class="far fa-newspaper"></i>
                            EVENTS</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="news" role="tabpanel" aria-labelledby="news-tab">
                                                


@foreach($events as $e)

<ul class="list-unstyled item-lists">
            <li>

                            <small>{{$e->created_at->toFormattedDateString()}}</small>
            
            <p class="mb-1 text-left">
                                    <i class="fa fa-calendar"></i>
                                <a href="/postdetails/{{$e->id}}">{{$e->title }}</a>

            </p>
        </li>
         
    </ul>
    
@endforeach
@if($events->count()==5)
<div class="row text-center">
    <div class="col-md-12 text-right">
    

                    <a href="" class=""  style="font-size: 23px">View All</a>
                  
            </div>
          
</div>
@endif


                    </div>
                </div>
            </div>
            
        </div>
    </div>


<!--/News and Evnets-->
</div>



@endsection
