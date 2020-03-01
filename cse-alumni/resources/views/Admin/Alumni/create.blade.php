@extends('Admin.Layouts.master')


@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Alumni Management</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">ALumni</li>
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
                <h3 class="card-title">Create Alumni</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="/admin/alumnis" method="POST">
                @csrf
                <div class="card-body">
                     <div class="form-group">
                        <label for="roll">roll</label>
                        <input type="text" class="form-control" id="roll" placeholder="alumni roll" name="roll">
                    </div>

                    <div class="form-group">
                        <label for="name">name</label>
                        <input type="text" class="form-control" id="name" placeholder="alumni name" name="name">
                    </div>

                    

                    <div class="form-group">
                        <label for="batch">batch</label>
                        <input type="text" class="form-control" id="batch" placeholder="batch" name="batch">
                    </div>

                   
                     <div class="form-group">
                        <label for="session">session</label>
                        <input type="text" class="form-control" id="session" placeholder="session" name="session">
                    </div>
                     <div class="form-group">
                        <label for="bloodgroup">bloodgroup</label>
                        <input type="text" class="form-control" id="bloodgroup" placeholder="bloodgroup" name="bloodgroup">
                    </div>
                     <div class="form-group">
                        <label for="image">image</label>
                        <input type="text" class="form-control" id="image" placeholder="image" name="image">
                    </div>
                     <div class="form-group">
                        <label for="profession">profession</label>
                        <input type="text" class="form-control" id="profession" placeholder="profession" name="profession">
                    </div>
                     <div class="form-group">
                        <label for="phonenumber">phonenumber</label>
                        <input type="text" class="form-control" id="phonenumber" placeholder="phonenumber" name="phonenumber">
                    </div>
                     <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" class="form-control" id="email" placeholder="email" name="email">
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