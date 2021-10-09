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
					<h1 class="m-0 text-dark">Batch list</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<!-- /.card-header -->
					<div class="card-body">
						<table id="batchTable" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>id</th>
									<th>name</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($batches as $batch)
								<tr>
									<td>
										{{$batch->id}}
									</td>
									<td>
										{{$batch->name}}
									</td>
									<td class="project-actions">
										<button type="button" class="btn btn-info btn-sm editBtn" href="#">
											<i class="fas fa-pencil-alt"> </i>
											Edit
										</button>
										<form id="delete-form-{{$batch->id}}" action="/admin/batch/{{$batch->id}}" style="display: none;" method="POST">
											@csrf
											@method('DELETE')
										</form>
										<button
										type="button"
										class="btn btn-danger btn-sm"
										onclick="if(confirm('Are you sure? You want to delete this?')){
											event.preventDefault();
											document.getElementById('delete-form-{{$batch->id}}').submit();
										}else {
											event.preventDefault();
										}"
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
<!--Modal starts from here-->
<!-- Modal -->
<div class="modal fade" id="modalId">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Edit Batch</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="formId" method="post">
				@csrf
				@method('PUT') 
				<input type="hidden" id="hiddenId"> 
				<div class="modal-body">
					<span id="form_result"></span>
					<div class="form-group">
						<label for="batch">batch-name</label>
						<div>
							<input class="form-control" type="text" name="name"/>
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
@endsection 
@section('scripts')
<script>
	$(document).ready(function () {
		$("#batchTable").DataTable({
			columnDefs: [
			{
					// column index (start from 0)
					targets: [2],
					orderable: false, // set orderable false for selected columns
				},
				],
			});
		$(".editBtn").on('click',function()
		{  
			$("#form_result").html('');
			$("#formId")[0].reset();

			$("#modalId").modal("show");
			$tr=$(this).closest('tr');
			var data=$tr.children('td').map(function()
			{
				return $(this).text();
			}).get();
			$("#hiddenId").val(data[0]);

		});
		
		$("#formId").on('submit',function(event)
		{
			event.preventDefault();
			

			var id=$("#hiddenId").val();
			$.ajax({
				url:"/admin/batch/"+id,  
				method:"POST",
				data:$(this).serialize(),
				dataType:"json",
				success:function(data)
				{

					var html = '<div class="alert alert-success">' + data.success + '</div>';
					$("#form_result").html(html);

				},
				error:function(error)
				{
					var html = '<div class="alert alert-danger">' +error.responseJSON.errors.name+ '</div>';
					$("#form_result").html(html);

				}

			});

		});

	});
</script>
@endsection
