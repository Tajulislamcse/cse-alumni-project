@extends('FrontEnd.layouts.master')




<!-- Stored in resources/views/about.blade.php -->



@section('main-content')
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper" style="margin-top:50px">
    <!-- Content Header (Page header) -->
  
    <!-- /.content-header -->
<h3 class="text-center">First batch alumni list</h3>
    <!-- Main content -->
    <section class="content">


        <div class="card">
            
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th><input type="checkbox" /></th>
                            <th>Roll</th>
                            <th>Name</th>
                           
                            <th>Image</th>
                            
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

        <!-- /.card -->

        <!-- Default box -->
       
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
                        "targets": 3,
                        "render": function (data, type, row) {
                            return `<img style="width:100px" src='${data}'/>`;
                        }
                    },
                   {
                        "orderable": false,
                        "targets": 4,
                        "render": function (data, type, row) {
                            return `<button type="submit" class="btn btn-info btn-sm" onclick="window.location.href='/admin/alumnis/${data}/edit'" value='${data}'>
                               
                                Details
                            </button>
                        `;
                        }
                    }
                ]
            });
    });
</script>
@endsection
