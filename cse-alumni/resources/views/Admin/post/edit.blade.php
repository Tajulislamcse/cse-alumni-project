@extends('admin.layouts.master')
 @section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
            <div class="container-fluid">
                  <div class="row mb-2">
                        <div class="col-md-12">
                              <div class="card card-success">
                                    <div class="card-header">
                                          <h3 style="text-align: center; font-size: 1.4rem;">Post Edit Form</h3>
                                    </div>
                              </div>
                        </div>
                  </div>

                  <!-- /.col -->
            </div>
            <!-- /.row -->
      </div>
      <!-- /.container-fluid -->

      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
            <div class="container-fluid">
                  <!-- Small boxes (Stat box) -->
                  <form method="POST" action="/admin/post/{{$post->id}}" enctype="multipart/form-data">
                        @csrf @method('PUT')
                        <div class="row">
                              <div class="col-md-6">
                                    <div class="card">
                                          <!-- general form elements -->

                                          <!-- /.card-header -->
                                          <!-- form start -->

                                          <div class="card-body">
                                                <div class="form-group">
                                                      <label for="title">Post Title</label>
                                                      <input type="text" class="form-control" name="title" placeholder="Enter Post title" value="{{ $post->title }}" />
                                                </div>

                                                <div class="form-group">
                                                      <label for="image">image</label>
                                                      <div>
                                                            <input class="form-control" type="file" name="image" />
                                                      </div>
                                                </div>

                                                <!-- /.card-body -->
                                          </div>
                                          <!-- /.card -->
                                    </div>
                              </div>

                              <div class="col-md-6">
                                    <!-- general form elements -->
                                    <div class="card">
                                          <div class="card-body">
                                                <div class="form-group">
                                                      <label for="category">Category</label>
                                                      <select class="form-control select-dropdown" name="category" id="category">
                                                            <option disabled="disabled" selected="selected">select category</option>
                                                            <option {{ $post->category == 'news' ? 'selected':'' }}>news</option>
                                                            <option {{ $post->category == 'events' ? 'selected':'' }}>events</option>
                                                      </select>
                                                </div>

                                                <div class="form-check">
                                                      <input type="checkbox" class="form-check-input" name="status" value="1" {{ $post->status == true ? 'checked' : '' }} />
                                                      <label class="form-check-label" for="exampleCheck1">Publish</label>
                                                </div>

                                                <!-- /.card-body -->
                                          </div>
                                          <div class="card-footer">
                                                <button type="submit" class="btn btn-success">Submit</button>
                                          </div>
                                    </div>
                              </div>
                              <!-- /.card -->
                        </div>

                        <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                          <div class="card-header">
                                                <h3>
                                                      BODY
                                                </h3>
                                          </div>

                                          <textarea name="body">{{ $post->body }}</textarea>
                                    </div>
                              </div>
                        </div>
                  </form>

                  <!--/row-->
            </div>
            <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
</div>

@endsection
 @section('scripts')

<script type="text/javascript" src="{{asset('tinymce/js/tinymce/tinymce.min.js')}}"></script>
<script>
      tinymce.init({ selector: "textarea", height: "300" });
</script>
@endsection
