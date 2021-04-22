@extends('generalMember.layouts.master')
@section('main-content')
<div class="container mt-5">
	<div class="team-single">
		<div class="row card">
			<div class="col-md-5 bg-light-gray text-center py-5">
				<div>
					<img src="{{asset('storage/images/Alumni/'. $alumniObject->getImage())}}"/>
				</div>
				<div>
					<h2 class="p-2 profile-username">{{$alumniObject->getName()}}</h2>
					<h4 class="sm-width-95 sm-margin-auto">
						<i class="fas fa-briefcase"></i><strong class="p-1 text-orange">Profession:</strong>
						<p class="text-muted p-2">{{$alumniObject->getProfession()}}</p>
					</h4>
					@if(Auth::id()==$alumniObject->getId())
					
					<form style="display: inline;" action="/user/profile/{{ $alumniObject->getId()}}/edit" method="GET">
						<button type="submit" class="btn btn-info btn-sm" href="#">
							<i class="fas fa-pencil-alt"> </i>
							Edit Profile
						</button>
					</form>
					@endif
				</div>
			</div>
			<!--/col-md-5-->
			<div class="col-md-7">
				<div class="team-single-text">
					<div class="contact-info-section">
						<ul class="list-style9 no-margin">
							<li>
								<div class="row mt-3">
									<div class="col-md-5">
										<p class="text-orange">ID:</p>
									</div>
									<div class="col-md-7">
										<p>{{$alumniObject->getAlumniId()}}</p>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-md-5">
										<p class="text-green">Batch:</p>
									</div>
									<div class="col-md-7">
										<p>{{$alumniObject->getBatch()}}</p>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-md-5">
										<p class="text-lightred">Session:</p>
									</div>
									<div class="col-md-7">
										<p>{{$alumniObject->getSession()}}</p>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-md-5">
										<p class="text-green">Bloodgroup:</p>
									</div>
									<div class="col-md-7">
										<p>{{$alumniObject->getBloodgroup()}}</p>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-md-5">
										<p class="xs-margin-four-left text-purple">Phone:</p>
									</div>
									<div class="col-md-7">
										<p>{{$alumniObject->getPhoneNo()}}</p>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-md-5">
										<p class="text-pink"><i class="p-2 fas fa-envelope text-pink"></i>Email:</p>
									</div>
									<div class="col-md-7">
										<p><a href="mailto:{{$alumniObject->getEmail()}}">{{$alumniObject->getEmail()}}</a></p>
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
