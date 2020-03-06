@extends('Admin.Layouts.master')


@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Teacher Management</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Teacher</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create Teacher</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="/admin/teachers" method="POST">
                @csrf
                <div class="card-body">
                     <div class="form-group">
                        <label for="employeeId">employeeId</label>
                        <input type="text" class="form-control" id="employeeId" placeholder="employeeId" name="employeeId">
                    </div>

                    <div class="form-group">
                        <label for="name">name</label>
                        <input type="text" class="form-control" id="name" placeholder="teacher's name" name="name">
                    </div>

                     <div class="form-group">
                        <label for="image">image</label>
                        <input type="text" class="form-control" id="image" placeholder="image" name="image">
                    </div>

                      <div class="form-group">
                        <label for="bloodGroup">bloodGroup</label>
                        <input type="text" class="form-control" id="bloodGroup" placeholder="bloodGroup" name="bloodGroup">
                    </div>
                    
                      <div class="form-group">
                        <label for="phoneNumber">phoneNumber</label>
                        <input type="text" class="form-control" id="phoneNumber" placeholder="phoneNumber" name="phoneNumber">
                    </div>


                     <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" class="form-control" id="email" placeholder="email" name="email">
                    </div>


                    <div class="form-group">
                        <label for="description">description</label>
                        <input type="text" class="form-control" id="description" placeholder="description" name="description">
                    </div>

                   
                     <div class="form-group">
                        <label for="researchInterest">researchInterest</label>
                        <input type="text" class="form-control" id="researchInterest" placeholder="researchInterest" name="researchInterest">
                    </div>
                   
                     <div class="form-group">
                        <label for="conferenceArticles">conferenceArticles</label>
                        <input type="text" class="form-control" id="conferenceArticles" placeholder="conferenceArticles" name="conferenceArticles">
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->



</div>
<!-- /.content-wrapper -->
@endsection