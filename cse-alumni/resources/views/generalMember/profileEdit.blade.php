@extends('generalMember.layouts.master')
@push('css')
<link rel="stylesheet" href="{{asset('/dist/css/jquery-ui.css')}}">
@endpush
@section('main-content')
<div class="container mt-5">
	<div class="team-single">
		<div class="bg-light-gray text-center py-5">
			<div>				<!-- Modal Button-->
				<button type="button" class="btn btn-info btn-sm mb-3" href="#" data-toggle="modal" data-target="#editImage">
					Edit Image
				</button>
			</div>
			<img src="{{asset('storage/images/Alumni/'. $alumniObject->getImage())}}"/>
			<div>
				<h2 class="margin-10px-bottom p-2 font-size24 md-font-size22 sm-font-size20 font-weight-600 profile-username">{{$alumniObject->getName()}}</h2>
				<h4 class="sm-width-95 sm-margin-auto">
					<i class="fas fa-briefcase"></i><strong class="margin-10px-left p-1 text-orange">Profession:</strong>
					<p class="text-muted p-2">{{$alumniObject->getProfession()}}</p>
				</h4>
				<button type="button" class="btn btn-info btn-sm mb-3" href="#"
				data-toggle="modal" data-target="#editProfession">
				Edit Profession
			</button>
		</div>
	</div>
	<!--/col-md-5-->
	<div class="my-3 text-center">
		<div class="team-single-text padding-50px-left sm-no-padding-left">
			<div class="contact-info-section margin-40px-tb">
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
								<p class="xs-margin-four-left text-pink"><i class="p-2 fas fa-envelope text-pink"></i>Email:</p>
							</div>
							<div class="col-md-7">
								<p><a href="mailto:{{$alumniObject->getEmail()}}">{{$alumniObject->getEmail()}}</a></p>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<form action="/user/{{$alumniObject->getId()}}/basic/info/edit" method="GET">
			<button type="submit" class="btn btn-info btn-sm" href="#">
				EditOthers
			</button>
		</form>
	</div>
</div>
</div>
<!--Modal starts from here-->
<div class="modal fade" id="editImage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title model-own" id="myModalLabel">Edit Profile Picture</h4>
			</div>
			<form method="post" id="image_form" enctype="multipart/form-data">
				@csrf
				<input type="hidden" id="img_hidden_id" value="{{$alumniObject->getId()}}">

				<div class="modal-body">
					<span id="form1_result"></span>

					<div class="form-group">
						<label for="image">image:</label>
						<input type="file" class="form-control" name="image"/>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary disableDoubleClick" onClick="disabled=true;">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!--/Modal -->
<!--Modal starts from here-->
<div class="modal fade" id="editProfession" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title model-own" id="myModalLabel">Edit Profession</h4>
			</div>
			<form method="post" id="profession_form">
				@csrf
				<input type="hidden" id="prof_hidden_id" value="{{$alumniObject->getEmployeeId()}}">
				<div class="modal-body">
					<span id="form2_result"></span>
					<div class="form-group">
						<label for="profession">Profession:</label>
						<input type="text" class="form-control" name="profession" value="{{old('profession',$alumniObject->getProfession())}}" />
					</div>
					<div class="form-group">
						<label for="date">Appointment Date:</label>
						<input type="text" class="form-control" name="appointmentDate" id="datepicker" />
					</div>
				</div>
				<div class="modal-footer">


					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary" onClick="disabled=true;">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
@push('scripts')
<script src="{{asset('dist/js/jquery-ui.js')}}"></script>
@endpush
@section('scripts')
<script>
	$(function()
	{   
		$("#datepicker").datepicker();
		$("#image_form").on('submit', function(event){
			event.preventDefault();
			var id=$("#img_hidden_id").val();

			$.ajax({

				url:"/user/image/update/"+id,  
				method:"POST",
				data:new FormData(this),
				dataType:"json",
				cache: false,
				contentType: false,
				processData: false,
				success:function(data)
				{

					var html = '<div class="alert alert-success">' + data.success + '</div>';
					$("#form1_result").html(html);

				},
				error:function(error)
				{
					var html='';

					html = '<div class="alert alert-danger">';
					$.each(error.responseJSON.errors, function (i, error) {
						html+='<div>'+error[0]+'</div>';
					});
					html += '</div>';
					$("#form1_result").html(html);

				}

			});

		});

		$("#profession_form").on('submit', function(event){
			event.preventDefault();
			id=$("#prof_hidden_id").val();

			$.ajax({

				url:"/user/profession/update/"+id,  
				method:"POST",
				data:$(this).serialize(),
				dataType:"json",
				success:function(data)
				{

					var html = '<div class="alert alert-success">' + data.success + '</div>';
					$("#form2_result").html(html);

				},
				error:function(error)
				{
					var html='';

					html = '<div class="alert alert-danger">';
					$.each(error.responseJSON.errors, function (i, error) {
						html+='<div>'+error[0]+'</div>';
					});
					html += '</div>';
					$("#form2_result").html(html);

				}

			});

		});
	});
</script>
@endsection