@extends('generalMember.layouts.master')
@section('main-content')
<body>
	<div class="container">
		<div class="wrapper">
			<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
				<div class="wrapper wrapper--w790">
					<div class="card card-5">
						<div class="card-heading">
							<h2 class="title">Alumni Registration Form</h2>
						</div>
						<div class="card-body">
							<form method="POST" action="/user/profile" enctype="multipart/form-data">
								@csrf
								<p>The<span style="color:red"> *</span> marked fields are <span style="color:red">mandatory</span>,must be completed.</p>
								<div class="form-row">
									<div class="name">ID <span style="color:red">*</span></div>
									<div class="value">
										<div class="input-group">
											<input class="input--style-5" type="text" name="alumniId" value="{{old('alumniId')}}" placeholder="please enter your alumni Id" class="@error('alumniId') is-invalid @enderror">
											@error('alumniId')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="name">Name <span style="color:red">*</span></div>
									<div class="value">
										<div class="input-group">
											<input class="input--style-5" type="text" name="name"value="{{old('name')}}" placeholder="please enter your name" class="@error('name') is-invalid @enderror">
											@error('name')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="name">Batch <span style="color:red">*</span></div>
									<div class="value">
										<div class="input-group">
											<div class="input--style-5" style="width: 700px">
												<select name="batch" class="@error('batch') is-invalid @enderror">
													<option disabled="disabled" selected="selected">please select batch from the option</option>
													@foreach($batches as $batch)
													<option value="{{$batch->id}}">{{$batch->name}}</option>
													@endforeach
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
									<div class="name">Session <span style="color:red">*</span></div>
									<div class="value">
										<div class="input-group">
											<div class="input--style-5" style="width: 700px">
												<select name="session">
													<option disabled="disabled" selected="selected" class="@error('session') is-invalid @enderror">please select session from the option</option>
													<option value="2008-2009" {{old('session')=='2008-2009'?'selected':''}}>2008-2009</option>
													<option value="2009-2010" {{old('session')=='2009-2010'?'selected':''}}>2009-2010</option>
													<option value="2010-2011" {{old('session')=='2010-2011'?'selected':''}}>2010-2011</option>
													<option value="2011-2012" {{old('session')=='2011-2012'?'selected':''}}>2011-2012</option>
													<option value="2012-2013" {{old('session')=='2012-2013'?'selected':''}}>2012-2013</option>
													<option value="2013-2014" {{old('session')=='2013-2014'?'selected':''}}>2013-2014</option>
													<option value="2014-2015" {{old('session')=='2014-2015'?'selected':''}}>2014-2015</option>
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
									<div class="name">BloodGroup <span style="color:red">*</span></div>
									<div class="value">
										<div class="input-group">
											<div class="input--style-5" style="width: 700px">
												<select name="bloodgroup">
													<option disabled="disabled" selected="selected" class="@error('bloodgroup') is-invalid @enderror">please select bloodgroup from the option</option>
													<option value="O+" {{old('bloodgroup')=='O+'?'selected':''}}>O+</option>
													<option value="AB+" {{old('bloodgroup')=='AB+'?'selected':''}}>AB+</option>
													<option value="B+" {{old('bloodgroup')=='B+'?'selected':''}}>B+</option>
													<option value="A+" {{old('bloodgroup')=='A+'?'selected':''}}>A+</option>
													<option value="O-" {{old('bloodgroup')=='O-'?'selected':''}}>O-</option>
													<option value="AB-" {{old('bloodgroup')=='AB-'?'selected':''}}>AB-</option>
													<option value="B-" {{old('bloodgroup')=='B-'?'selected':''}}>B-</option>
													<option value="A-" {{old('bloodgroup')=='A-'?'selected':''}}>A-</option>
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
									<div class="name">Image</div>
									<div class="value">
										<div class="input-group">
											<input class="input--style-5" type="file" name="image" class="@error('image') is-invalid @enderror">
											@error('image')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="name">Profession</div>
									<div class="value">
										<div class="input-group">
											<input class="input--style-5" type="text" name="profession" value="{{old('profession')}}" class="@error('profession') is-invalid @enderror">
											@error('profession')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="name">PhoneNumber</div>
									<div class="value">
										<div class="input-group">
											<input class="input--style-5" type="text" name="phoneNo"value="{{old('phoneNo')}}" class="@error('phoneNo') is-invalid @enderror">
											@error('phoneNo')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="name">Email <span style="color:red">*</span></div>
									<div class="value">
										<div class="input-group">
											<input class="input--style-5" type="text" name="email" value="{{old('email')}}" class="@error('email') is-invalid @enderror">
											@error('email')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="name">Password <span style="color:red">*</span></div>
									<div class="value">
										<div class="input-group">
											<input class="input--style-5" type="password" name="password" value="{{old('password')}}" class="@error('password') is-invalid @enderror">
											@error('password')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="name">Gender <span style="color:red">*</span></div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="gender" value="male" {{old('gender')=='male'?'checked':''}} class="@error('gender') is-invalid @enderror">
										<label class="form-check-label" for="inlineRadio1">Male</label>
										<input class="form-check-input" type="radio" name="gender" value="female" {{old('gender')=='female'?'checked':''}} class="@error('gender') is-invalid @enderror">
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
