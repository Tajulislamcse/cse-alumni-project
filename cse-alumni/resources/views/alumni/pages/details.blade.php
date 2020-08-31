@extends('alumni.layouts.master')
@section('main-content')

<div class="container mt-5">
      <div class="team-single">
            <div class="row card">
                  <div class="col-md-5 bg-light-gray text-center py-5">
                        <div>
                              <img src="{{asset('storage/images/Alumni/'. $fetchRecord->getImage())}}"/>
                        </div>
                        <div>
                              <h2 class="margin-10px-bottom p-2 font-size24 md-font-size22 sm-font-size20 font-weight-600 profile-username">{{$fetchRecord->getName()}}</h2>
                              <h4 class="sm-width-95 sm-margin-auto">
                                    <i class="fas fa-briefcase"></i><strong class="margin-10px-left p-1 text-orange">Profession:</strong>
                                    <p class="text-muted p-2">{{$fetchRecord->getProfession()}}</p>
                              </h4>
                              @if(Auth::id()==$fetchRecord->getId())

                              <!-- Modal Button-->

                              <button type="submit" class="btn btn-info btn-sm" data-myprofession=" {{$fetchRecord->getProfession()}}" href="#" data-toggle="modal" data-target="#edit">
                                    editJob
                              </button>
                              <!--/Modal Button-->

                              @endif

                              <!--Modal starts from here-->

                              <!-- Modal -->
                              <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                                <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                                                      <h4 class="modal-title model-own" id="myModalLabel">Job Edit Form</h4>
                                                </div>

                                                <form action="/alumni/job/{{$fetchRecord->getId()}}" method="post">
                                                      @csrf @method('patch')
                                                      <div class="modal-body">
                                                            <div class="form-group">
                                                                  <label for="profession">Profession</label>
                                                                  <input type="text" class="form-control" id="profession" name="profession" />
                                                            </div>
                                                      </div>
                                                      <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                      </div>
                                                </form>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <!--/col-md-5-->

                  <div class="col-md-7">
                        <div class="team-single-text padding-50px-left sm-no-padding-left">
                              <div class="contact-info-section margin-40px-tb">
                                    <ul class="list-style9 no-margin">
                                          <li>
                                                <div class="row mt-3">
                                                      <div class="col-md-5">
                                                            <p class="text-orange">Roll:</p>
                                                      </div>
                                                      <div class="col-md-7">
                                                            <p>{{$fetchRecord->getRoll()}}</p>
                                                      </div>
                                                </div>
                                          </li>
                                          <li>
                                                <div class="row">
                                                      <div class="col-md-5">
                                                            <p class="text-green">Batch:</p>
                                                      </div>
                                                      <div class="col-md-7">
                                                            <p>{{$fetchRecord->getBatch()}}</p>
                                                      </div>
                                                </div>
                                          </li>
                                          <li>
                                                <div class="row">
                                                      <div class="col-md-5">
                                                            <p class="text-lightred">Session:</p>
                                                      </div>
                                                      <div class="col-md-7">
                                                            <p>{{$fetchRecord->getSession()}}</p>
                                                      </div>
                                                </div>
                                          </li>
                                          <li>
                                                <div class="row">
                                                      <div class="col-md-5">
                                                            <p class="text-green">Bloodgroup:</p>
                                                      </div>
                                                      <div class="col-md-7">
                                                            <p>{{$fetchRecord->getBloodgroup()}}</p>
                                                      </div>
                                                </div>
                                          </li>
                                          <li>
                                                <div class="row">
                                                      <div class="col-md-5">
                                                            <p class="xs-margin-four-left text-purple">Phone:</p>
                                                      </div>
                                                      <div class="col-md-7">
                                                            <p>{{$fetchRecord->getPhonenumber()}}</p>
                                                      </div>
                                                </div>
                                          </li>
                                          <li>
                                                <div class="row">
                                                      <div class="col-md-5">
                                                            <p class="xs-margin-four-left text-pink"><i class="p-2 fas fa-envelope text-pink"></i>Email:</p>
                                                      </div>
                                                      <div class="col-md-7">
                                                            <p><a href="mailto:{{$fetchRecord->getEmail()}}">{{$fetchRecord->getEmail()}}</a></p>
                                                      </div>
                                                </div>
                                          </li>
                                    </ul>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>

@endsection @section('scripts')

<script>
      $("#edit").on("show.bs.modal", function (event) {
            var button = $(event.relatedTarget);
            var profession = button.data("myprofession");
            //var description = button.data('mydescription')
            //var cat_id = button.data('catid')
            var modal = $(this);
            modal.find(".modal-body #profession").val(profession);
            // modal.find('.modal-body #des').val(description);
            //modal.find('.modal-body #cat_id').val(cat_id);
      });
</script>
@endsection
