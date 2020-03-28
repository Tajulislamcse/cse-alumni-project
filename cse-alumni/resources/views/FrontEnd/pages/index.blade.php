@extends('FrontEnd.layouts.master')




<!-- Stored in resources/views/about.blade.php -->



@section('main-content')
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper" style="margin-top:50px">
    <!-- Content Header (Page header) -->
  
    <!-- /.content-header -->
<h3 class="text-center">you are viewing @php
    $i=1;
    foreach ($fetchAllalumnis as $batch)
            {
                echo $batch->getBatch();
              if($i==1)
              break;
            }
    @endphp batch alumni list</h3>
    <!-- Main content -->
    <section class="content">


        <div class="card">
            
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                           
                            <th>Roll</th>
                            <th>Name</th>
                           
                            <th>Image</th>
                            
                            <th>Action</th>
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
                            <img src="{{asset('/uploads/'.$Alumni->getImage()) }}" width="100px">
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="/admin/alumnis/{{$Alumni->getId()}}">
                                    <i class="fas fa-folder">
                                    </i>
                                    Details
                                </a>
                            </td>
                            </tr>
                            @endforeach        
                     </tbody>
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
            'columnDefs': [ {
        'targets': [2,3], // column index (start from 0)
        'orderable': false, // set orderable false for selected columns
     }]
            });
    });
</script>
@endsection
