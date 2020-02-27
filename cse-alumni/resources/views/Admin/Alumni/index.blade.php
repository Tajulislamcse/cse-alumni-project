@extends('Admin.Layouts.master')




<!-- Stored in resources/views/about.blade.php -->



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
                        <li class="breadcrumb-item active">Alumni</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

        
        <!-- /.card -->

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Alumnis List:</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 5%">
                                Roll
                            </th>
                            <th style="width: 10%">
                                Name
                            </th>
                            <th style="width: 5%">
                                Batch
                            </th>
                            <th style="width: 5%">
                                Session
                            </th>
                            <th style="width: 5%">
                                BloodGroup
                            </th>
                            
                            <th style="width: 10%">
                                Image
                            </th>
                            <th style="width: 10%">
                                Profession
                            </th>
                            <th style="width: 5%">
                                PhoneNumber
                            </th>
                             <th style="width: 5%">
                                EmailAddress
                            </th>
                            <th style="width: 40%" class="text-center">
                                Actions
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fetchAllalumnis as $Alumni)

                        <tr>
                            <td>
                                {{ $Alumni->getRoll() }}
                            </td>
                            <td>
                                {{ $Alumni->getName() }}
                            </td>

                             <td>
                                {{ $Alumni->getBatch() }}
                            </td>
                            <td>
                                {{ $Alumni->getSession() }}
                            </td>
                            <td>
                                {{ $Alumni->getBloodgroup() }}
                            </td>
                            <td>
                                {{ $Alumni->getImage() }}
                            </td>
                            <td>
                                {{ $Alumni->getProfession() }}
                            </td>
                            
                            <td>
                                {{ $Alumni->getPhonenumber() }}
                            </td>
                            <td>
                                {{ $Alumni->getEmail()  }}
                             </td>   
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <form style="display:inline" action="/admin/alumni/{{ $Alumni->getId() }}/edit"
                                    method="GET">
                                    <button type="submit" class="btn btn-info btn-sm" href="#">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </button>
                                </form>

                                <form style="display:inline" action="/admin/alumni/{{ $Alumni->getId() }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" href="#">
                                        <i class="fas fa-trash">
                                        </i>
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
    </section>
    <!-- /.content -->



</div>
<!-- /.content-wrapper -->
@endsection


