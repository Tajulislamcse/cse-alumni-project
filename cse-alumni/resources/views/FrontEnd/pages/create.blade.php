
@extends('FrontEnd.layouts.master')
@section('main-content')

 <div style="margin-top:40px"class="container">
<div class="content-wrapper">
 
  <h2 class="text-center">Alumni registration form</h2>
   <form role="form" action="/admin/alumnis" method="POST" enctype="multipart/form-data">
                @csrf
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
    </div>
    <div class="form-group">
      <label for="roll">Roll:</label>
      <input type="text" class="form-control" id="roll" placeholder="Enter roll" name="roll" required>
    </div>
    <div class="form-group">
      <label for="batch">Batch:</label>
      <input type="text" class="form-control" id="batch" placeholder="Enter batch" name="batch" required>
    </div>
    <div class="form-group">
      <label for="session">Session:</label>
      <input type="text" class="form-control" id="session" placeholder="Enter session" name="session" required>
      <div class="form-group">
      <label for="bloodgroup">BloodGroup:</label>
      <input type="text" class="form-control" id="bloodgroup" placeholder="Enter bloodgroup" name="bloodgroup" required>
    </div>
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image" placeholder="Enter image" name="image" required>
    </div>
    <div class="form-group">
      <label for="profession">Profession:</label>
      <input type="text" class="form-control" id="profession" placeholder="Enter profession" name="profession" required>
    </div>
    <div class="form-group">
      <label for="phonenumber">Phonenumber:</label>
      <input type="text" class="form-control" id="phonenumber" placeholder="Enter phonenumber" name="phonenumber" required>
    </div>
    </div>            
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
    </div>
    
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>
@endsection
