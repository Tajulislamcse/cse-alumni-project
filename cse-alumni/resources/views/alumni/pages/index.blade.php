                            @extends('alumni.layouts.master')
                            @section('main-content')


                            <!-- Content Header (Page header) -->

                            <!-- /.content-header -->
                            <div class="content-wrapper">
                            <p class="text-center py-4">you are viewing @php
                            $i=1;
                            foreach ($fetchAllalumnis as $batch)
                            {
                                echo $batch->getBatch();
                              if($i==1)
                              break;
                            }
                            @endphp batch alumni list</p>
                            <!-- Main content -->
                            <section class="content">
                            <div class="row">
                            <div class="col-12">    


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


                                                <a class="btn btn-primary" href="/alumni/alumnis/{{$Alumni->getId()}}">
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
