@extends('generalMember.layouts.master')
@section('main-content')
<body>
	<div class="container">
		<div class="wrapper">
			<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
				<div class="wrapper wrapper--w790">
					<div class="card card-5">
						<div class="card-heading">
							<h2 class="title">Edit basic information</h2>
						</div>
						<div class="card-body">
							<form method="POST" action="/user/profile/{{$alumniObject->getId()}}">
								@csrf
								@method('PUT')
								<div class="form-row">
									<div class="name">ID</div>
									<div class="value">
										<div class="input-group">
											<input class="input--style-5" type="text" name="alumniId" value="{{old('alumniId',$alumniObject->getAlumniId())}}" placeholder="please enter your alumni Id" class="@error('alumniId') is-invalid @enderror">
											@error('alumniId')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="name">Name</div>
									<div class="value">
										<div class="input-group">
											<input class="input--style-5" type="text" name="name"value="{{old('name',$alumniObject->getName())}}" placeholder="please enter your name" class="@error('name') is-invalid @enderror">
											@error('name')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="name">Batch</div>
									<div class="value">
										<div class="input-group">
											<div class="input--style-5" style="width: 700px">
												<select name="batch" class="@error('batch') is-invalid @enderror">
													<option disabled="disabled" selected="selected">please select batch from the option</option>
													<option value="cse-1st" {{old('batch',$alumniObject->getBatch())=='cse-1st'?'selected':''}}>cse-1st</option>
													<option value="cse-2nd" {{old('batch',$alumniObject->getBatch())=='cse-2nd'?'selected':''}}>cse-2nd</option>
													<option value="cse-3rd" {{old('batch',$alumniObject->getBatch())=='cse-3rd'?'selected':''}}>cse-3rd</option>
													<option value="cse-4th"
													{{old('batch',$alumniObject->getBatch())=='cse-4th'?'selected':''}}>cse-4th</option>
													<option value="cse-5th" {{old('batch',$alumniObject->getBatch())=='cse-5th'?'selected':''}}>cse-5th</option>
													<option value="cse-6th" {{old('batch',$alumniObject->getBatch())=='cse-6th'?'selected':''}}>cse-6th</option>
													<option value="cse-7th" {{old('batch',$alumniObject->getBatch())=='cse-7th'?'selected':''}}>cse-7th</option>
												</select>
												<div class="select-dropdown"></div>
												@error('batch')
												<div class="alert alert-danger">{{ $message }}</div>
												@enderror
											</div>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="name">Session</div>
									<div class="value">
										<div class="input-group">
											<div class="input--style-5" style="width: 700px">
												<select name="session">
													<option disabled="disabled" selected="selected" class="@error('session') is-invalid @enderror">please select session from the option</option>
													<option value="2008-2009" {{old('session',$alumniObject->getSession())=='2008-2009'?'selected':''}}>2008-2009</option>
													<option value="2009-2010" {{old('session',$alumniObject->getSession())=='2009-2010'?'selected':''}}>2009-2010</option>
													<option value="2010-2011" {{old('session',$alumniObject->getSession())=='2010-2011'?'selected':''}}>2010-2011</option>
													<option value="2011-2012" {{old('session',$alumniObject->getSession())=='2011-2012'?'selected':''}}>2011-2012</option>
													<option value="2012-2013" {{old('session',$alumniObject->getSession())=='2012-2013'?'selected':''}}>2012-2013</option>
													<option value="2013-2014" {{old('session',$alumniObject->getSession())=='2013-2014'?'selected':''}}>2013-2014</option>
													<option value="2014-2015" {{old('session',$alumniObject->getSession())=='2014-2015'?'selected':''}}>2014-2015</option>
												</select>
												<div class="select-dropdown"></div>
												@error('session')
												<div class="alert alert-danger">{{ $message }}</div>
												@enderror
											</div>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="name">BloodGroup</div>
									<div class="value">
										<div class="input-group">
											<div class="input--style-5" style="width: 700px">
												<select name="bloodgroup">
													<option disabled="disabled" selected="selected" class="@error('bloodgroup') is-invalid @enderror">please select bloodgroup from the option</option>
													<option value="O+" {{old('bloodgroup',$alumniObject->getBloodgroup())=='O+'?'selected':''}}>O+</option>
													<option value="AB+" {{old('bloodgroup',$alumniObject->getBloodgroup())=='AB+'?'selected':''}}>AB+</option>
													<option value="B+" {{old('bloodgroup',$alumniObject->getBloodgroup())=='B+'?'selected':''}}>B+</option>
													<option value="A+" {{old('bloodgroup',$alumniObject->getBloodgroup())=='A+'?'selected':''}}>A+</option>
													<option value="O-" {{old('bloodgroup',$alumniObject->getBloodgroup())=='O-'?'selected':''}}>O-</option>
													<option value="AB-" {{old('bloodgroup',$alumniObject->getBloodgroup())=='AB-'?'selected':''}}>AB-</option>
													<option value="B-" {{old('bloodgroup',$alumniObject->getBloodgroup())=='B-'?'selected':''}}>B-</option>
													<option value="A-" {{old('bloodgroup',$alumniObject->getBloodgroup())=='A-'?'selected':''}}>A-</option>
												</select >
												<div class="select-dropdown"></div>
												@error('bloodgroup')
												<div class="alert alert-danger">{{ $message }}</div>
												@enderror
											</div>
										</div>
									</div>
								</div>
						
								<div class="form-row">
									<div class="name">PhoneNumber</div>
									<div class="value">
										<div class="input-group">
											<input class="input--style-5" type="text" name="phoneNo"value="{{old('phoneNo',$alumniObject->getPhoneNo())}}" class="@error('phoneNo') is-invalid @enderror">
											@error('phoneNo')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="name">Email</div>
									<div class="value">
										<div class="input-group">
											<input class="input--style-5" type="text" name="email" value="{{old('email',$alumniObject->getEmail())}}" class="@error('email') is-invalid @enderror">
											@error('email')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="name">Gender</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="gender" value="male" {{old('gender',$alumniObject->getGender())=='male'?'checked':''}} class="@error('gender') is-invalid @enderror">
										<label class="form-check-label" for="inlineRadio1">Male</label>
										<input class="form-check-input" type="radio" name="gender" value="female" {{old('gender',$alumniObject->getGender())=='female'?'checked':''}} class="@error('gender') is-invalid @enderror">
										<label class="form-check-label" for="inlineRadio2">Female</label>
									</div>
									@error('gender')
									<div class="alert alert-danger">{{ $message }}</div>
									@enderror
								</div>
								<div class="pull-right">
									<button style=" margin-left:115px;
									width: 510px;" class="btn btn--pill btn--green" type="submit">submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection
