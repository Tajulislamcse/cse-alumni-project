@extends('FrontEnd.layouts.master')
@section('main-content')



<div style="margin-top:40px"class="container">
<div class="content-wrapper">
 
  <h2 class="text-center">Job Edit form</h2>
     <form role="form" action="/job/{{$fetchrecordbyid->id}}" method="POST">
                @csrf
                @method('PUT')

      <div class="form-group">
        <label for="profession">profession</label>
        <input type="text" class="form-control" id="profession" placeholder="profession" name="profession"
        value="{{$fetchrecordbyid->profession}}">
     </div>
       <div class="card-footer">
          <button type="submit" class="btn btn-primary">submit</button>
        </div>
</form>
</div>
</div>

@endsection