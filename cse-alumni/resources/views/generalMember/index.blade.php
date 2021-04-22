@extends('generalMember.layouts.master') 
@section('main-content')
<div class="content-wrapper">
	<p class="text-center py-4">{{$batch}} batch alumni list</p>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<!-- /.card-header -->
					<div class="card-body">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Name</th>

									<th>Image</th>

									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($alumniObjects as $alumniObject)

								<tr>
									<td>
										{{ $alumniObject->getAlumniId() }}
									</td>
									<td>
										{{ $alumniObject->getName() }}
									</td>

									<td>
										<img src="{{asset('/storage/images/Alumni/'.$alumniObject->getImage()) }}"/ style="width: 100px">
									</td>
									<td class="project-actions text-right">
										<a class="btn btn-info btn-sm" href="/user/profile/{{$alumniObject->getId()}}">
											<i class="fas fa-folder"> </i>
											DETAILS
										</a>
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

@endsection @section('scripts')

<script>
	$(function () {
		$("#example1").DataTable({
			columnDefs: [
				{
					targets: [2, 3], // column index (start from 0)
					orderable: false, // set orderable false for selected columns
				},
			],
		});
	});
</script>
@endsection
