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
                    <h1 class="m-0 text-dark">Teacher Management</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Teachers</li>
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
                            <th>EmId</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>BldGrp</th>
                            <th>PhNo</th>
                            <th>Email</th>
                            <th>Description</th>
                            <th>Rsrch.</th>
                            <th>ConfrnceAr.</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <!-- /.card -->

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Teachers List:</h3>

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
                        <tr><th>EmployeeId</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>BldGrp</th>
                            <th>PhNo</th>
                            <th>Email</th>
                            <th>Description</th>
                            <th>ResearchInterest</th>
                            <th>ConferenceArticles</th>
                         
                            <th  class="text-center">
                                Actions
                            </th>

                        </tr>
                    </thead>
                      <tbody>
                        @foreach ($fetchAllTeachers as $Teacher)

                        <tr>
                            <td>
                                {{ $Teacher->getEmployeeid() }}
                            </td>
                            <td>
                                {{ $Teacher->getName() }}
                            </td>

                             <td>
                                {{ $Teacher->getImage() }}
                            </td>
                            <td>
                                {{ $Teacher->getBloodgroup() }}
                            </td>
                            <td>
                                {{ $Teacher->getPhonenumber() }}
                            </td>
                            <td>
                                {{ $Teacher->getEmail() }}
                            </td>
                            <td>
                                {{ $Teacher->getDescription() }}
                            </td>
                            
                            <td>
                                {{ $Teacher->getResearchinterest() }}
                            </td>
                            <td>
                                {{ $Teacher->getConferenceArticles()  }}
                             </td>   
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <form style="display:inline" action="/admin/teachers/{{ $Teacher->getId() }}/edit"
                                    method="GET">
                                    <button type="submit" class="btn btn-info btn-sm" href="#">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </button>
                                </form>

                                <form style="display:inline" action="/admin/teachers/{{ $Teacher->getId() }}"
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
               // "ajax": "/admin/products/getProductsJson",
                 "ajax": "/admin/teachers/getTeachersJson",
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
                        "targets": 10,
                        "render": function (data, type, row) {
                            return `<button type="submit" class="btn btn-info btn-sm" onclick="window.location.href='/admin/teachers/${data}/edit'" value='${data}'>
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


