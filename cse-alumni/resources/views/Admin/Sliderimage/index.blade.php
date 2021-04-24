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
					<h1 class="m-0 text-dark">SliderImage list with dataTable</h1>
				</div>
				<!-- /.col -->
				<!-- /.col -->
			</div>
			<!-- /.row -->
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</div>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<!-- /.card-header -->
					<div class="card-body">
						<table id="sliderTable" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>SliderNo</th>
									<th>Slider</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($sliderObjects as $sliderObject)
								<tr>
									<td>
										{{$sliderObject->getId()}}
									</td>
									<td>
										<img src="{{asset('storage/images/slider/'.$sliderObject->getUrl())}}" width="100px" />
									</td>
									<td class="project-actions text-right">
										<button type="button" class="btn btn-info btn-sm editBtn" href="#">
											<i class="fas fa-pencil-alt"> </i>
											Edit
										</button>


										<button
										type="button"
										class="btn btn-danger btn-sm deleteBtn"
										>
										<i class="fas fa-trash"> </i> Delete
									</button>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- /.card -->
	<!-- Default box -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!--Edit Modal starts from here-->
<div class="modal fade" id="editModalId">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Edit Slider</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="editFormId" method="post" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				<input type="hidden" id="hiddenId"> 
				<div class="modal-body">
					<span class="form_result"></span>
					<div class="form-group">
						<div>
							<input class="form-control" type="file" name="slider"/>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!--Delete Modal-->
<div class="modal fade" id="deleteModalId">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Confirmation</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="deleteFormId" method="post">
				@csrf
				@method('DELETE')
				<input type="hidden" id="hiddenId"> 
				<div class="modal-body">
					<span class="form_result"></span>
					
					<h5 align="center">Are you sure you want to delete this data?</h5>

					
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-danger">Yes</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				</div>
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>

@endsection 
@section('scripts')
<script>
	$(document).ready(function () {
		$("#sliderTable").DataTable({
			columnDefs: [
			{
					// column index (start from 0)
					targets: [1,2],
					orderable: false, // set orderable false for selected columns
				},
				],
			});
		//edit modal starts
		$(".editBtn").on('click',function()
		{  
			$(".form_result").html('');
			$("#editFormId")[0].reset();

			$("#editModalId").modal("show");
			$tr=$(this).closest('tr');
			var data=$tr.children('td').map(function()
			{
				return $(this).text();
			}).get();
			$("#hiddenId").val(data[0]);

		});

		$("#editFormId").on('submit',function(event)
		{
			event.preventDefault();


			var id=$("#hiddenId").val();
			$.ajax({
				url:"/admin/slider/"+id,  
				method:"POST",
				data:new FormData(this),
				dataType:"json",
				cache: false,
				contentType: false,
				processData: false,
				success:function(data)
				{

					var html = '<div class="alert alert-success">' + data.success + '</div>';
					$(".form_result").html(html);

				},
				error:function(error)
				{
					var html = '<div class="alert alert-danger">' +error.responseJSON.errors.slider+ '</div>';
					$(".form_result").html(html);

				}

			});

		});
   //edit modal ends  
  //delete modal starts
  $(".deleteBtn").on('click',function()
  {  
  	$(".form_result").html('');


  	$("#deleteModalId").modal("show");
  	$tr=$(this).closest('tr');
  	var data=$tr.children('td').map(function()
  	{
  		return $(this).text();
  	}).get();
  	$("#hiddenId").val(data[0]);

  });

  $("#deleteFormId").on('submit',function(event)
  {
  	event.preventDefault();


  	var id=$("#hiddenId").val();
  	$.ajax({
  		url:"/admin/slider/"+id,  
  		type:"delete",
  		data:$(this).serialize(),
  		dataType:"json",

  		success:function(data)
  		{

  			var html = '<div class="alert alert-success">' +data.success+ '</div>';
  			$(".form_result").html(html);

  		}

  	});

  });
  //delete modal ends
});
</script>
@endsection
