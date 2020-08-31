@extends('admin.layouts.master')
@section('content')

<!-- Content Header (Page header) -->

<!-- /.content-header -->
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
            <div class="container-fluid">
                  <div class="row mb-2">
                        <div class="col-sm-6">
                              <h1 class="m-0 text-dark">SliderImage list with dataTable</h1>
                        </div>
                        <!-- /.col -->
                        <!-- /.col -->
                  </div>
                  <!-- /.row -->

                  <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
      </div>

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
                                                     
                                                      <th>image</th>
                                                      <th>Action</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                @foreach ($getAll as $singleImg)
                                           

                                                <tr>
                                                      <td>

                                                          <img src="{{asset('storage/images/slider/'.$singleImg->name)}}" width="100px" />
                                                        
                                                      </td>

                                                    

                                                      <td class="project-actions text-right">

                                                          
                                                            
                                                         
                                                                  <button type="submit" class="btn btn-info btn-sm" href="#"  data-toggle="modal" data-target="#myModal-{{$singleImg->id}}">
                                                                        <i class="fas fa-pencil-alt"> </i>
                                                                        Edit
                                                                  </button>

        <!--Modal starts from here-->

                              <!-- Modal -->
     

      <div class="modal fade" id="myModal-{{$singleImg->id}}">
      <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                        <h4 class="modal-title">Slider Image Create Form</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                        </button>
                  </div>
                <form action="/admin/slider/{{$singleImg->id}}" method="post" enctype="multipart/form-data">
                                                      @csrf
                                                       @method('PUT') 
                                                      <div class="modal-body">
                                                <div class="form-group">
                                                      
                                                      <div>
                                                            <input class="form-control" type="file" name="name"/>
                                                      </div>
                                                </div>

                                        


                                              
                                                      </div>
                                                      <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                      </div>
                                                </form>

            </div>
            <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
</div>
<!-- /.modal -->                                              


                         

 <form id="delete-form-{{$singleImg->id}}" action="/admin/slider/{{$singleImg->id}}" style="display: none;" method="POST">
                                                                  @csrf
                                                                  @method('DELETE')
                                                            </form>
                                                            <button
                                                                  type="button"
                                                                  class="btn btn-danger btn-sm"
                                                                  onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{$singleImg->id}}').submit();
                                                }else {
                                                    event.preventDefault();
                                                        }"
                                                            >
                                                                  <i class="fas fa-trash"> </i> Delete
                                                            </button>
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
            $("#example1").DataTable({
                  columnDefs: [
                        {
                              // column index (start from 0)
                              orderable: false, // set orderable false for selected columns
                        },
                  ],
            });
      });
</script>

@endsection
