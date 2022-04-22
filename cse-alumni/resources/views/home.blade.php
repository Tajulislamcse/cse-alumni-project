@extends('generalMember.layouts.master')
<!-- Masthead -->
@section('main-content')
<div class="container">
	<div class="row mt-5">
		<div class="col-md-12">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				</ol>
				<div class="carousel-inner">
					@foreach($sliderObjects as $key => $sliderObject)
					<div class="carousel-item {{$key == 0 ? 'active' : '' }}">
						<img src="{{asset('storage/images/slider/'. $sliderObject->getUrl())}}"  alt="sliders"> 
					</div>
					@endforeach
				</div>
				<a class="carousel-control-prev" href="#myCarousel" role="button"  data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true">     </span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h2 style="text-align: center;margin-bottom: .5rem;margin-top: 2rem"><span style="color: #003300;"><strong>COUCSEALUMNI</strong></span></h2>
			<p class="text-center mb-2 mt-0"><code></code><strong><span style="color: #003366;">Department of Computer Science and Engineering</span></strong>
			</p>
			<p class="text-center mb-3 mt-0"><strong><span style="color: #003366;">Comilla University</span></strong>
			</p>
			<p class="text-justify mb-3 mt-0">Welcome to the <strong style="color: #000080;">Comilla University Computer
			Science and Engineering Alumni (COUCSEALUMNI)</strong> <em><strong>Community</strong></em> of the Department
			of Computer Science and Engineering,  Comilla University. There were demands for a common platform for relationships with each other to continue after graduation also. The Alumni Association is the best place for you to get alumni member's updates and also our department's updates.</p>
	</div>
</div>
<!--News and Events section start from here-->
<div class="news-section my-4">
	<div class="row">
		<!--news section starts-->
		<div class="col-lg-6">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="notice-tab" data-toggle="tab" href="#notice" role="tab" aria-controls="notice" aria-selected="true" style="background: #418bca;
					color: #ffffff;"><i class="far fa-newspaper"></i> NEWS</a>
				</li>
			</ul>
			
		    <div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="notice" role="tabpanel" aria-labelledby="notice-tab">
					{{--
					@foreach($postObjects['news'] as $news)
					<ul class="list-unstyled item-lists">
						<li>
							<small>{{$news->getPublishedAt()}}</small>
							<p style="font-weight:400" class="mb-1 text-left" >
								<i class="fa fa-newspaper"></i>
								<a href="/postdetails/{{$news->getId()}}">{{$news->getTitle()}}</a>
							</p>
						</li>
					</ul>
					@endforeach
					--}}
				</div>
			</div>
			
		
		</div>
		<!--news section ends-->
		<!--events section starts-->
		<div class="col-lg-6">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" id="notice-tab" data-toggle="tab" href="#notice" role="tab" aria-controls="notice" aria-selected="true" style="background: #418bca;
					color: #ffffff;"><i class="far fa-newspaper"></i>Events</a>
				</li>
			</ul>
			
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="notice" role="tabpanel" aria-labelledby="notice-tab">
					{{--
					@foreach($postObjects['events'] as $events)
					<ul class="list-unstyled item-lists">
						<li>
							<small>{{$events->getPublishedAt()}}</small>
							<p style="font-weight:400"class="mb-1 text-left" >
								<i class="fa fa-newspaper"></i>
								<a href="/postdetails/{{$events->getId()}}">{{$events->getTitle()}}</a>
							</p>
						</li>
					</ul>
					@endforeach
					--}}
				</div>
			</div>
		
		</div>
		<!--/events-->
	</div>
</div>
<!--/News and Evnets-->
</div>
@endsection
