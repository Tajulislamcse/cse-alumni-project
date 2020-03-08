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


        <div class="card">
            <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th><input type="checkbox" /></th>
                            <th>Roll</th>
                            <th>Name</th>
                            <th>Batch</th>
                            <th>Session</th>
                            <th>BldGrp</th>
                            <th>Image</th>
                            <th>Profession</th>
                            <th>Ph_No</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

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
                            <th >
                                Roll
                            </th>

                            <th >
                                Name
                            </th>
                            <th >
                                Batch
                            </th>
                            <th >
                                Session
                            </th>
                            <th >
                                BldGrp

                          
                            </th>
                            
                            <th >
                                Image
                            </th>
                            <th >
                                Profession
                            </th>
                            <th >
                                ph_no
                            </th>

                            <th >
                                Email
                             </th>   
                           
                            <th>

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
                            <img src="{{asset('/uploads/'.$Alumni->getImage()) }}" width="100px">
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
                                <form style="display:inline" action="/admin/alumnis/{{ $Alumni->getId() }}/edit"
                                    method="GET">
                                    <button type="submit" class="btn btn-info btn-sm" href="#">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </button>
                                </form>

                                <form style="display:inline" action="/admin/alumnis/{{ $Alumni->getId() }}"
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



@section('scripts')

<script>
    $(function () {
        $('#example1').DataTable({
                "processing": true,
                "serverSide": true,
    
                 "ajax": "/admin/alumnis/getAlumnisJson",
                "columnDefs": [
                    {
                        "orderable": false,
                        "targets": 0,
                        "render": function (data, type, row) {
                            return `<input type='checkbox' value='${data}'/>`;
                        }
                    },

                    {
                        "orderable": false,
                        "targets": 6,
                        "render": function (data, type, row) {
                            return `<img style="width:100px" src='${data}'/>`;
                        }
                    },
                   {
                        "orderable": false,
                        "targets": 10,
                        "render": function (data, type, row) {
                            return `<button type="submit" class="btn btn-info btn-sm" onclick="window.location.href='/admin/alumnis/${data}/edit'" value='${data}'>
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </button>
                           <button type="submit" class="btn btn-danger btn-sm show-bs-modal" href="#" data-id='${data}' value='${data}'>
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </button>`;
                        }
                    }
                ]
            });
    });
</script>
@endsection
