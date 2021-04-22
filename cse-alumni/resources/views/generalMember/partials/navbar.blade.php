<nav class="navbar navbar-expand-lg bg-secondary" id="mainNav">
	<div class="container">
		<a class="navbar-brand js-scroll-trigger">CSE ALUMNI</a>
		<button
		class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white"
		type="button"
		data-toggle="collapse"
		data-target="#navbarResponsive"
		aria-controls="navbarResponsive"
		aria-expanded="false"
		aria-label="Toggle navigation"
		>
		Menu
		<i class="fas fa-bars"></i>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item mx-0 mx-lg-1">
				<a class="nav-link py-3 px-0 px-lg-3 js-scroll-trigger" href="/">Home</a>
			</li>
			<li class="nav-item mx-0 mx-lg-1 dropdown">
				<a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 js-scroll-trigger" data-toggle="dropdown" href="#">Membership</a>
				<ul class="dropdown-menu">
					<li><a href="/user/profile/create" class="dropdown-item">Registration</a></li>
				</ul>
			</li>
			<li class="nav-item mx-0 mx-lg-1 dropdown">
				<a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 js-scroll-trigger" data-toggle="dropdown" href="#">Alumni List</a>

			@if($batches->count())
			<ul class="dropdown-menu">
				@foreach($batches as $batch)
				<li class="dropdown-item">
					<form action="/user/profiles/{{$batch->batch}}" method="GET">
						<button type="submit">{{$batch->batch}} batch</button>
					</form>
				</li>
				@endforeach
			</ul>
			@endif
		</li>
		<li class="nav-item mx-0 mx-lg-1 dropdown">
			<a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 js-scroll-trigger" data-toggle="dropdown" href="#">Alumni Committee</a>
			<ul class="dropdown-menu">
				<a href="/committee/member" class="dropdown-item">Members Profile</a>
				<li><a href="/committee/member/create" class="dropdown-item">Registration</a></li>
			</ul>
		</li>
		<!-- Right Side Of Navbar -->
		<!-- Authentication Links -->
		@guest
		<li class="nav-item mx-0 mx-lg-1">
			<a class="nav-link py-3 px-0 px-lg-3 js-scroll-trigger" href="/login">LogIn</a>
		</li>
		@if (Route::has('register')) 
		@endif 
		@else
		<li class="nav-item mx-0 mx-lg-1 dropdown">
			<a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 js-scroll-trigger notificationToggle" data-toggle="dropdown" href="#">Notifications
				@if(auth()->user()->unreadNotifications->count())
				<span class="badge badge-danger count">
					{{auth()->user()->unreadNotifications->count()}}</span>
					@endif
				</a>
				@if(auth()->user()->notifications->count())
				<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="overflow-x:hidden;overflow-y:scroll;max-height:400px;-webkit-overflow-scrolling: touch;">
					@foreach(auth()->user()->unreadNotifications as $notification)
					<li class="dropdown-item p-3 changeBgColorUnRead" style="background-color:lightgray;cursor: pointer"data-toggle="modal" data-target="#myModal" data-target-profession="{{$notification->data['profession']}}"
						data-target-date="{{$notification->data['appointmentDate']}}" >
						<b style="color:green">{{ucwords($notification->data['name'])}} &#40;{{$notification->data['batch']}} batch&#41;</b>
						<span style="color:#000">changed his job</span>
						<br/>
						<small style="color:#90949C">
							{{date('F j, Y', strtotime($notification->created_at))}}
							at {{date('H: i', strtotime($notification->created_at))}}</small>
						</li>
						<div class="dropdown-divider"></div>
						@endforeach
						@foreach(auth()->user()->readNotifications as $notification)
						<li class="dropdown-item p-3" data-toggle="modal" data-target="#myModal" data-target-profession="{{$notification->data['profession']}}
							" data-target-date="{{$notification->data['appointmentDate']}}" style="cursor: pointer;">
							<b style="color:green">
								{{ucwords($notification->data['name'])}} &#40;{{$notification->data['batch']}} batch&#41;</b>
								<span style="color:#000">changed his job</span>
								<br/>
								<small style="color:#90949C">
									{{date('F j, Y', strtotime($notification->created_at))}}
									at {{date('H: i', strtotime($notification->created_at))}}</small>
								</li>
								<div class="dropdown-divider"></div>
								@endforeach
							</ul>
							@endif
						</li>
						<li class="nav-item mx-0 mx-lg-1 dropdown">
							<a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 js-scroll-trigger" data-toggle="dropdown" href="#"> {{ Auth::user()->name }} <span class="caret"></span></a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="{{ route('logout') }}"
								onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
								{{ __('Logout') }}
							</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						</div>
					</li>
					@endguest
				</ul>
			</div>
		</div>
	</nav>
	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12 text-center">
							<img src="{{asset('storage/images/JobChangeLogo/circle-cropped1.png')}}" class="img-fluid"/>
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-md-12 text-center">
							Started New Job at
						</div>
					</div>
					<div class="row mt-1">
						<div class="col-md-12 text-center">
							<p id="fetchJob" style="font-weight: 500"></p>
							<div class="col-md-12 text-center" style="color:gray" id="fetchDate">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$(".changeBgColorUnRead").click(function(){
				$(this).css("background-color", "#FFFFFF");
			});
			$(document).on('click', '.notificationToggle', function(){
				$('.count').html('');
				$.ajax({
					type: "GET",
					url:'/user/markAllAsRead',
					data: "",
					success: function() {
						console.log("Ajax request sent");
					}
				})
			});
			$("#myModal").on("show.bs.modal", function(e) {
				var profession= $(e.relatedTarget).data('target-profession');
				var date= $(e.relatedTarget).data('target-date');
				$(".modal-body #fetchJob").text(profession);
				$(".modal-body #fetchDate").text(date);
			});
		});  
	</script>
