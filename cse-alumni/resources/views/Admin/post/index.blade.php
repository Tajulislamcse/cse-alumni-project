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
                              <h1 class="m-0 text-dark">Post list with dataTable</h1>
                        </div>
                        <!-- /.col -->
                        <!-- /.col -->
                  </div>
                  <!-- /.row -->

                  <div class="row mb-2">
                        <div class="col-sm-6">
                              <h4 class="m-0 text-dark">
                                    TOTAL POSTS
                                    <span class="badge bg-blue">{{ $getAll->count() }}</span>
                              </h4>
                        </div>
                        <!-- /.col -->
                        <!-- /.col -->
                  </div>
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
                                                      <th>Author</th>

                                                      <th>Title</th>

                                                      <th>Status</th>
                                                      <th>Category</th>
                                                      <th>Action</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                                @foreach ($getAll as $post)

                                                <tr>
                                                      <td>
                                                            {{ $post->user->name }}
                                                      </td>

                                                      <td>{{Str::limit($post->title,15)}}</td>

                                                      <td>
                                                            @if($post->status == true)
                                                            <span class="badge bg-blue">Published</span>
                                                            @else
                                                            <span class="badge bg-pink">Pending</span>
                                                            @endif
                                                      </td>
                                                      <td>{{$post->category}}</td>

                                                      <td class="project-actions text-right">
                                                            <form style="display: inline;" action="/admin/post/{{ $post->id}}/edit" method="GET">
                                                                  <button type="submit" class="btn btn-info btn-sm" href="#">
                                                                        <i class="fas fa-pencil-alt"> </i>
                                                                        Edit
                                                                  </button>
                                                            </form>

                                                            <form id="delete-form-{{ $post->id }}" action="/admin/post/{{ $post->id }}" style="display: none;" method="POST">
                                                                  @csrf @method('DELETE')
                                                            </form>
                                                            <button
                                                                  type="button"
                                                                  class="btn btn-danger btn-sm"
                                                                  onclick="if(confirm('Are you sure? You want to delete this?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $post->id }}').submit();
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
                              targets: [2, 3], // column index (start from 0)
                              orderable: false, // set orderable false for selected columns
                        },
                  ],
            });
      });
      
</script>

@endsection
