
@extends('alumni.layouts.master')
@push('css')
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('/dist/css/adminlte.min.css')}}">

@endpush
@section('main-content')


<body>
  <div class="container">
    @php
   if (!$errors->any())
   {
    $count=1;
   }

   @endphp
    <div class="wrapper">
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Alumni Registration Form</h2>
                </div>
                <div class="card-body">
                   <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf



                            <div class="form-row">
                            <div class="name">Roll</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="roll" placeholder="please enter your roll" class="@error('roll') is-invalid @enderror">
                                    @error('roll')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                           <div class="form-row">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="name" placeholder="please enter your name" class="@error('name') is-invalid @enderror">

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
                                        <select name="batch" required class="@error('batch') is-invalid @enderror">
                                            <option disabled="disabled" selected="selected">please select batch from the option</option>
                                            <option value="cse-1st">cse-1st</option>
                                            <option value="cse-2nd">cse-2nd</option>
                                            <option value="cse-3rd">cse-3rd</option>
                                            <option value="cse-4th">cse-4th</option>
                                            <option value="cse-5th">cse-5th</option>
                                            <option value="cse-6th">cse-6th</option>
                                            <option value="cse-7th">cse-7th</option>
                                             
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
                                        <select name="session" required>
                                            <option disabled="disabled" selected="selected" class="@error('session') is-invalid @enderror">please select session from the option</option>
                                            <option value="2008-2009">2008-2009</option>
                                            <option value="2009-2010">2009-2010</option>
                                            <option value="2010-2011">2010-2011</option>
                                            <option value="2011-2012">2011-2012</option>
                                            <option value="2012-2013">2012-2013</option>
                                            <option value="2013-2014">2013-2014</option>
                                            <option value="2014-2015">2014-2015</option>
                                       
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
                                        <select name="bloodgroup" required>
                                            <option disabled="disabled" selected="selected" class="@error('bloodgroup') is-invalid @enderror">please select bloodgroup from the option</option>
                                            <option value="O+">O+</option>
                                            <option value="AB+">AB+</option>
                                            <option value="B+">B+</option>
                                            <option value="A+">A+</option>
                                            <option value="O-">O-</option>
                                            <option value="AB-">AB-</option>
                                            <option value="B-">B-</option>
                                            <option value="A-">A-</option>
                                       
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
                            <div class="name">image</div>
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
                                    <input class="input--style-5" type="text" name="profession" class="@error('profession') is-invalid @enderror">
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
                                    <input class="input--style-5" type="text" name="phonenumber"class="@error('phonenumber') is-invalid @enderror">

                                    @error('phonenumber')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                 @enderror
                                </div>
                            </div>
                        </div>
                         
                            <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="email" class="@error('email') is-invalid @enderror">
                                      @error('email')
                                         <div class="alert alert-danger">{{ $message }}</div>
                                      @enderror
                                </div>
                            </div>
                        </div>
                         
                            <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="password" class="@error('password') is-invalid @enderror">
                                    @error('password')
                                      <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                      
                       
                        <div class="pull-right">
                            <button style=" margin-left:115px;
                             width: 510px;" class="btn btn--pill btn--green toastsDefaultInfo" type="submit">submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
  </div>
  

@endsection

@push('scripts')
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>




  
<script type="text/javascript">
   @php
   if($count!=1)
   {
  $(function() {
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

   
    $('.toastsDefaultInfo').click(function() {
      $(document).Toasts('create', {
        class: 'bg-success', 
        title: 'Important!',
        body: 'We are going to verify your account. If your account is approved,you will be notified via email. You will not be able to login untill your account is approved.'
      })
    });
   
  });
}
  @endphp
</script>
@endpush