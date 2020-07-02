        @extends('admin.layouts.master')
        @section('content')

        <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">Post</li>
                    </ol>
                  </div><!-- /.col -->
                </div><!-- /.row -->
              </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->




            <!-- Main content -->
            <section class="content">
              <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                  <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                      <div class="inner">
                        <h3>{{$getAllalumni}}</h3>

                        <p>Total registered Alumni</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-bag"></i>
                      </div>
                      <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modal-default">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                      <div class="inner">
                        <h3>{{$newAlumniToday->count()}}<sup style="font-size: 20px"></sup></h3>

                        <p>Today's Registered Alumni</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                      </div>
                      <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modal-default2">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                      <div class="inner">
                        <h3>{{$alumniCommittee->count()}}</h3>

                        <p>Registered Committee Member</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-person-add"></i>
                      </div>
                       <a href="#" class="small-box-footer" data-toggle="modal" data-target="#modal-default3">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                      <div class="inner">
                        <h3>{{$totalPost}}</h3>

                        <p>Total Published Post</p>
                      </div>

                        <div class="icon">
                        <i class="ion ion-person-add"></i>
                      </div>
                       <a href="/admin/post" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                    <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                      <div class="inner">
                        <h3>{{$pendingPost}}</h3>

                        <p>Total Pending Post</p>
                      </div>
                     
                    </div>
                  </div>

                  <!-- ./col -->
                </div>
                <!-- /.row -->
                
              </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
          </div>


          <!--Modal section starts from here-->
        <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Batchwise registered alumni's number</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
                                  <div class="row">

                                    <div class="col-md-4">

                                        cse-7th :

                                    </div>

                                    <div class="col-md-8">
                                        
                                         {{$alumni7th}}
                                    </div>

                                </div>

                                 <div class="row">

                                    <div class="col-md-4">

                                        cse-6th :

                                    </div>

                                    <div class="col-md-8">
                                        
                                         {{$alumni6th}}
                                    </div>

                                </div>

                                 <div class="row">

                                    <div class="col-md-4">

                                        cse-5th :

                                    </div>

                                    <div class="col-md-8">
                                        
                                         {{$alumni5th}}
                                    </div>

                                </div>
                                 <div class="row">

                                    <div class="col-md-4">

                                        cse-4th :

                                    </div>

                                    <div class="col-md-8">
                                        
                                         {{$alumni4th}}
                                    </div>

                                </div>

                                 <div class="row">

                                    <div class="col-md-4">

                                        cse-3rd :

                                    </div>

                                    <div class="col-md-8">
                                        
                                         {{$alumni3rd}}
                                    </div>

                                </div>
                                 <div class="row">

                                    <div class="col-md-4">

                                        cse-2nd :

                                    </div>

                                    <div class="col-md-8">
                                        
                                         {{$alumni2nd}}
                                    </div>

                                </div>
                                 <div class="row">

                                    <div class="col-md-4">

                                        cse-1st :

                                    </div>

                                    <div class="col-md-8">
                                        
                                         {{$alumni1st}}
                                    </div>

                                </div>
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
              
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


      <div class="modal fade" id="modal-default2">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Today's Registered Alumni</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              @foreach($alumniCommittee as $n)
                                  <div class="row">

                                    <div class="col-md-4">

                                        {{$n->batch}} : 
                                    </div>

                                    <div class="col-md-8">
                                        
                                         {{$n->name}}
                                    </div>

                                </div>
           
              @endforeach
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
              
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->




      <div class="modal fade" id="modal-default3">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Total Registered Alumni</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              @foreach($alumniCommittee as $c)
                                  <div class="row p-3">


                                    <div class="col-md-12">
                                        
                                         {{$c->name}}({{$c->designation}})
                                    </div>

                                   

                                  
                                </div>

                                 
           
           
              @endforeach
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
              
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

        @endsection
