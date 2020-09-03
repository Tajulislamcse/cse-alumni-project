@extends('alumni.layouts.master')
 @section('main-content')

<div class="container">
      <div class="wrapper">
            <div class="page-wrapper">
                  <div class="wrapper wrapper--w790">
                        <div class="card card-5">
                              <div class="card-heading">
                                    <h2 class="title">Job Edit Form</h2>
                              </div>
                              <div class="card-body">
                                    <form role="form" action="/alumni/job/{{$fetchrecordbyid->id}}" method="POST">
                                          @csrf @method('PUT')

                                          <div class="form-row">
                                                <div class="name">Profession</div>
                                                <div class="value">
                                                      <div class="input-group">
                                                            <input type="text" class="form-control" id="profession" name="profession" value="{{$fetchrecordbyid->profession}}" />
                                                      </div>
                                                </div>
                                          </div>

                                          <button type="submit">submit</button>
                                    </form>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</div>

@endsection
