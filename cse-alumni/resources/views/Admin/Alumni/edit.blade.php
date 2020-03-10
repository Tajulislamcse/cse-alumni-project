@extends('FrontEnd.layouts.master')
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title text-center"> Alumni Profile</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
        
                      <div class="card-body">

                     <div class="form-group">
                        <label for="roll">Roll</label>
                        <input type="text" class="form-control" id="roll" placeholder="alumni roll" name="roll" value="{{$fetchRecord->getRoll()}}">
                    </div>

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Alumni Name" name="name"
                            value="{{ $fetchRecord->getName() }}">
                    </div>


                     <div class="form-group">
                        <label for="batch">Batch</label>
                        <input type="text" class="form-control" id="batch" placeholder="batch" name="batch"
                            value="{{ $fetchRecord->getBatch() }}">
                    </div>

                    <div class="form-group">
                        <label for="session">Session</label>
                        <input type="text" class="form-control" id="session" placeholder="session" name="session"
                        value="{{$fetchRecord->getSession()}}">
                    </div>

                    <div class="form-group">
                        <label for="bloodgroup">bloodgroup</label>
                        <input type="text" class="form-control" id="bloodgroup" placeholder="bloodgroup" name="bloodgroup"
                        value="{{$fetchRecord->getBloodgroup()}}">
                    </div>

                     <div class="form-group">
                        <label for="image">image</label>
                        <input type="text" class="form-control" id="image" placeholder="image" name="image"
                         value="{{$fetchRecord->getImage()}}">
                    </div>

                      <div class="form-group">
                        <label for="profession">profession</label>
                        <input type="text" class="form-control" id="profession" placeholder="profession" name="profession"
                        value="{{$fetchRecord->getProfession()}}">
                    </div>
                     <div class="form-group">
                        <label for="phonenumber">phonenumber</label>
                        <input type="text" class="form-control" id="phonenumber" placeholder="phonenumber" name="phonenumber"
                        value="{{$fetchRecord->getPhonenumber()}}">
                    </div>
                     <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" class="form-control" id="email" placeholder="email" name="email"
                        value="{{$fetchRecord->getEmail()}}">
                    </div>

                   
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">update submit</button>
                </div>
            </form>
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->



</div>
<!-- /.content-wrapper -->
@endsection