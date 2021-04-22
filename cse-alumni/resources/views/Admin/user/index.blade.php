@extends('admin.layouts.master')
@section('content')
<!-- Content Header (Page header) -->
<!-- /.content-header -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark"> New registered user information</h1>
				</div>
				<!-- /.col -->
				<!-- /.col -->
			</div>
			<!-- /.row -->
			<div class="row mb-2">
				<div class="col-sm-6">
					<h4 class="m-0 text-dark">
						<form style="display: inline;" action="/admin/registeruser/{{$userinfo->id}}" method="POST">
							<button type="submit" class="btn btn-info btn-sm" href="#">
								Approve
							</button>
						</form>
						<form id="delete-form-{{ $userinfo->id }}" action="/admin/registeruser/{{ $userinfo->id }}" style="display: none;" method="POST">
							@csrf @method('DELETE')
						</form>
						<button
						type="button"
						class="btn btn-danger btn-sm"
						onclick="if(confirm('Are you sure? You want to delete this?')){
							event.preventDefault();
							document.getElementById('delete-form-{{ $userinfo->id }}').submit();
						}else {
							event.preventDefault();
						}"
						>
						Discard
					</button>
				</h4>
			</div>
			<!-- /.col -->
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>
<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-4">
			Roll :   
		</div>
		<div class="col-md-8">
			{{$userinfo->roll}}
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			Name :
		</div>
		<div class="col-md-8">
			{{$userinfo->name}}
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			Contact :
		</div>
		<div class="col-md-8">
			{{$userinfo->phonenumber}}
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			email :
		</div>
		<div class="col-md-8">
			{{$userinfo->email}}
		</div>
	</div>
	<!-- Default box -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection 
