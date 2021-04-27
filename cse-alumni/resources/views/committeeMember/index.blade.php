@extends('generalMember.layouts.master')
@section('main-content')
<style>
	.card{padding: 10px 15px;
		border: 1px solid #CCCCCC;}
	</style>
	<div class="container-fluid" style="background-color:#F8F8F8;">
		<div class="row">
			<div class="col-md-12 mt-4">
				<h3 class="p-2" style="background-color: pink;color: inherit;">Alumni Association Committee Members</h3>
			</div>
		</div>
<!--president information starts-->
		<div class="row">
			<div class="col-md-12">
				<h3 class="p-2">President</h3>
			</div>
		</div>
	@if($president)
		<div class="row">
			<div class="col-md-4 padding_program ">
				<a class="faculty_Modals" data-toggle="modal" data-target="#myModal-{{$president->getId()}}">
					<div class="row card">
						<div class="col-md-4 faculty-pic">
							<img src="{{asset('storage/images/committee/'.$president->getImage())}}"alt="">  
						</div>
						<div class="col-md-8 padding_bottom_program">
							<div class="col-md-12">
								<span class="faculty-name-fonts">{{$president->getName()}}</span>
							</div>
							<div class="col-md-12" style="padding-top:10px;">
								<i class="fa fa-envelope"></i>&nbsp; <a href="mailto:{{$president->getEmail()}}">{{$president->getEmail()}}</a>
							</div>
						</div>
					</div>
				</a>
			</div>

			<!--modal-->
			<div class="modal fade" id="myModal-{{$president->getId()}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title model-own" id="myModalLabel">Profile of &nbsp;&nbsp; <span class="faculty_title">{{$president->getName()}}</span></h4>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-5 col-md-offset-4 margin-bottom-10">
									<img src="{{asset('storage/images/committee/'.$president->getImage())}}"alt=""> 
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									Designation :   
								</div>
								<div class="col-md-8">
									{{$president->getDesignation()}}
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									Profession :
								</div>
								<div class="col-md-8">
									{{$president->getProfession()}}
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									Batch :
								</div>
								<div class="col-md-8">
									{{$president->getBatch()}}
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									BloodGroup :
								</div>
								<div class="col-md-8">
									{{$president->getBloodgroup()}}
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			@else
	      <p>There is no information exist for president</p>
			@endif
			
		</div>

		
<!--president information ends-->
		<div class="row">
			<div class="col-md-12">
				<h3 class="p-2">Secretary</h3>
			</div>
		</div>
		@if(count($secretaries)==0) 
		<p>There is no record exist for secretary</p>
		@else       
		<div class="row">
			@foreach($secretaries as $secretary)
			<div class="col-md-4 padding_program ">
				<a class="faculty_Modals" data-toggle="modal" data-target="#myModal-{{$secretary->getId()}}">
					<div class="row card">
						<div class="col-md-4 faculty-pic">
							<img src="{{asset('storage/images/committee/'.$secretary->getImage())}}"alt="">  
						</div>
						<div class="col-md-8 padding_bottom_program">
							<div class="col-md-12">
								<span class="faculty-name-fonts">{{$secretary->getName()}}</span>
							</div>
							<div class="col-md-12" style="padding-top:10px;">
								<i class="fa fa-envelope"></i>&nbsp; <a href="mailto:{{$secretary->getEmail()}}">{{$secretary->getEmail()}}</a>
							</div>
						</div>
					</div>
				</a>
			</div>
			

			<!--modal-->
			<div class="modal fade" id="myModal-{{$secretary->getId()}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title model-own" id="myModalLabel">Profile of &nbsp;&nbsp; <span class="faculty_title">{{$secretary->getName()}}</span></h4>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-5 col-md-offset-4 margin-bottom-10">
									<img src="{{asset('storage/images/committee/'.$secretary->getImage())}}"alt=""> 
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									Designation :   
								</div>
								<div class="col-md-8">
									{{$secretary->getDesignation()}}
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									Profession :
								</div>
								<div class="col-md-8">
									{{$secretary->getProfession()}}
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									Batch :
								</div>
								<div class="col-md-8">
									{{$secretary->getBatch()}}
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									BloodGroup :
								</div>
								<div class="col-md-8">
									{{$secretary->getBloodgroup()}}
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		@endif
		<div class="row">
			<div class="col-md-12">
				<h3 class="p-2">Members</h3>
			</div>
		</div>
		@if(count($members)==0) 
		<p class="pb-3">There are no record exist for members</p>
		@else    
		<div class="row">
			@foreach($members as $member)
			<div class="col-md-4 padding_program ">
				<a class="faculty_Modals" data-toggle="modal" data-target="#myModal-{{$member->getId()}}">
					<div class="row card">
						<div class="col-md-4 faculty-pic">
							<img src="{{asset('storage/images/committee/'.$member->getImage())}}"alt="">  
						</div>
						<div class="col-md-8 padding_bottom_program">
							<div class="col-md-12">
								<span class="faculty-name-fonts">{{$member->getName()}}</span>
							</div>
							<div class="col-md-12" style="padding-top:10px;">
								<i class="fa fa-envelope"></i>&nbsp; <a href="mailto:{{$member->getEmail()}}">{{$member->getEmail()}}</a>
							</div>
						</div>
					</div>
				</a>
			</div>
			<!--modal-->
			<div class="modal fade" id="myModal-{{$member->getId()}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
							<h4 class="modal-title model-own" id="myModalLabel">Profile of &nbsp;&nbsp; <span class="faculty_title">{{$member->getName()}}</span></h4>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-5 col-md-offset-4 margin-bottom-10">
									<img src="{{asset('storage/images/committee/'.$member->getImage())}}"alt=""> 
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									Designation :   
								</div>
								<div class="col-md-8">
									{{$member->getDesignation()}}
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									Profession :
								</div>
								<div class="col-md-8">
									{{$member->getProfession()}}
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									Batch :
								</div>
								<div class="col-md-8">
									{{$member->getBatch()}}
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									BloodGroup :
								</div>
								<div class="col-md-8">
									{{$member->getBloodgroup()}}
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		@endif
	</div>
	<hr>
	@endsection