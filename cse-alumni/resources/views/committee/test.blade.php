
@extends('alumni.layouts.master')
@section('main-content')

<body>
  <div class="container">
    <div class="wrapper">
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Commitee members information form</h2>
                </div>
                <div class="card-body">
                   <form method="post" action="/alumni/committee" enctype="multipart/form-data">
                        @csrf



                           <div class="form-row">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="name" placeholder="please enter your name" required>
                                </div>
                            </div>
                           </div>



                             <div class="form-row">
                            <div class="name">Designation</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="input--style-5" style="width: 700px">
                                        <select name="designation" required>
                                            <option disabled="disabled" selected="selected">please select post from the option</option>
                                            <option value="president">president</option>
                                            <option value="secretary">secretary</option>
                                            <option value="member">member</option>
                                           
                                       
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                         <div class="form-row">
                            <div class="name">image</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="file" name="image">
                                </div>
                            </div>
                        </div>

                         <div class="form-row">
                            <div class="name">Batch</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="input--style-5" style="width: 700px">
                                        <select name="batch" required>
                                            <option disabled="disabled" selected="selected">please select batch from the option</option>
                                            <option value="cse-1st">cse-1st</option>
                                            <option value="cse-2nd">cse-2nd</option>
                                            <option value="cse-3rd">cse-3rd</option>
                                            <option value="cse-4th">cse-4th</option>
                                            <option value="cse-5th">cse-5th</option>
                                            <option value="cse-6th">cse-6th</option>
                                            <option value="cse-7th">cse-7th</option>
                                             
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--

                            <div class="form-row">
                            <div class="name">Session</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="input--style-5" style="width: 700px">
                                        <select name="session" required>
                                            <option disabled="disabled" selected="selected">please select session from the option</option>
                                            <option value="2008-2009">2008-2009</option>
                                            <option value="2009-2010">2009-2010</option>
                                            <option value="2010-2011">2010-2011</option>
                                            <option value="2011-2012">2011-2012</option>
                                            <option value="2012-2013">2012-2013</option>
                                            <option value="2013-2014">2013-2014</option>
                                            <option value="2014-2015">2014-2015</option>
                                       
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         -->

                            <div class="form-row">
                            <div class="name">BloodGroup</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="input--style-5" style="width: 700px">
                                        <select name="bloodgroup" required>
                                            <option disabled="disabled" selected="selected">please select bloodgroup from the option</option>
                                            <option value="O+">O+</option>
                                            <option value="AB+">AB+</option>
                                            <option value="B+">B+</option>
                                            <option value="A+">A+</option>
                                            <option value="O-">O-</option>
                                            <option value="AB-">AB-</option>
                                            <option value="B-">B-</option>
                                            <option value="A-">A-</option>
                                       
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">Profession</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="profession">
                                </div>
                            </div>
                        </div>
                        <!--
                       <div class="form-row">
                            <div class="name">PhoneNumber</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="phonenumber">
                                </div>
                            </div>
                        </div>
                    -->
                         
                            <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="email">
                                </div>
                            </div>
                        </div>
                         <!--
                            <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="password">
                                </div>
                            </div>
                        </div>
                      -->
                       
                        <div class="pull-right">
                            <button style=" margin-left:115px;
                             width: 510px;" class="btn btn--pill btn--green" type="submit">submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
  </div>

@endsection
