@extends('alumni.layouts.master')

@section('main-content')
<style>
 
  .card{padding: 10px 15px;
  border: 1px solid #CCCCCC;}
</style>

<div class="container-fluid" style="background-color:#F8F8F8;">
    <div class="row">
         <div class="col-md-12 mt-4">
            <h3 class="p-2" style="background-color: pink;color: inherit;">Alumni Association Committee Members</h3>
         </div>
    </div>

               <div class="row">
                 <div class="col-md-12">
                    <h3 class="p-2">President</h3>
                 </div>
               </div>
           
            @if(count($getPresident)==null)  <p>There is no record exist for president</p>
            
            @else

             <div class="row">
                @foreach($getPresident as $p)

                   


                <div class="col-md-4 padding_program ">

                    <a class="faculty_Modals" data-toggle="modal" data-target="#myModal1">

                        <div class="row card">

                            <div class="col-md-4 faculty-pic">

                                <img src="{{asset('storage/images/committee/'.$p->image)}}"alt="">  

                            </div>

                            <div class="col-md-8 padding_bottom_program">



                                <div class="col-md-12">

                                    <span class="faculty-name-fonts">{{$p->name}}</span>

                                </div>

                                <div class="col-md-12" style="padding-top:10px;">

                                   <i class="fa fa-envelope"></i>&nbsp; <a href="mailto:{{$p->email}}">{{$p->email}}</a>

                                </div>







                            </div>

                        </div>

                    </a>

                </div>


                @endforeach
            </div>    

                <!--modal-->


                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                    <div class="modal-dialog">

                        <div class="modal-content">

                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                                <h4 class="modal-title model-own" id="myModalLabel">Profile of &nbsp;&nbsp; <span class="faculty_title">{{$p->name}}</span></h4>

                            </div>

                            <div class="modal-body">

                                <div class="row">

                                    <div class="col-md-5 col-md-offset-4 margin-bottom-10">

                                        <img src="{{asset('storage/images/committee/'.$p->image)}}"alt=""> 

                                    </div>

                                </div>

                                
                                <div class="row">

                                    <div class="col-md-4">

                                        Designation :   

                                    </div>

                                    <div class="col-md-8">

                                       {{$p->designation}}
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-4">

                                        Profession :

                                    </div>

                                    <div class="col-md-8">
                                        
                                         {{$p->profession}}
                                    </div>

                                </div>

                                
                            

                                <div class="row">

                                    <div class="col-md-4">

                                        Batch :

                                    </div>

                                    <div class="col-md-8">
                                        
                                         {{$p->batch}}
                                    </div>

                                </div>


                            
                                <div class="row">

                                    <div class="col-md-4">

                                        BloodGroup :

                                    </div>

                                    <div class="col-md-8">
                                        
                                         {{$p->bloodgroup}}
                                    </div>

                                </div>










                            </div>



                            <div class="modal-footer">

                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                            

                            </div>

                        </div>

                    </div>

                </div>
@endif


               <div class="row">
                 <div class="col-md-12">
                    <h3 class="p-2">Secretary</h3>
                 </div>
             </div>
           
             @if(count($getSecretary)==null) <p>There is no record exist for secretary</p>
             

             @else       

        <div class="row">
                @foreach($getSecretary as $s)

                   


                <div class="col-md-4 padding_program ">

                    <a class="faculty_Modals" data-toggle="modal" data-target="#myModal2">

                        <div class="row card">

                            <div class="col-md-4 faculty-pic">

                                <img src="{{asset('storage/images/committee/'.$s->image)}}"alt="">  

                            </div>

                            <div class="col-md-8 padding_bottom_program">



                                <div class="col-md-12">

                                    <span class="faculty-name-fonts">{{$s->name}}</span>

                                </div>

                                <div class="col-md-12" style="padding-top:10px;">

                                   <i class="fa fa-envelope"></i>&nbsp; <a href="mailto:{{$s->email}}">{{$s->email}}</a>

                                </div>







                            </div>

                        </div>

                    </a>

                </div>


                @endforeach

            </div>





             <!--modal-->


                <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                    <div class="modal-dialog">

                        <div class="modal-content">

                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                                <h4 class="modal-title model-own" id="myModalLabel">Profile of &nbsp;&nbsp; <span class="faculty_title">{{$s->name}}</span></h4>

                            </div>

                            <div class="modal-body">

                                <div class="row">

                                    <div class="col-md-5 col-md-offset-4 margin-bottom-10">

                                        <img src="{{asset('storage/images/committee/'.$s->image)}}"alt=""> 

                                    </div>

                                </div>

                                
                                <div class="row">

                                    <div class="col-md-4">

                                        Designation :   

                                    </div>

                                    <div class="col-md-8">

                                       {{$s->designation}}
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-4">

                                        Profession :

                                    </div>

                                    <div class="col-md-8">
                                        
                                         {{$s->profession}}
                                    </div>

                                </div>

                                
                            

                                <div class="row">

                                    <div class="col-md-4">

                                        Batch :

                                    </div>

                                    <div class="col-md-8">
                                        
                                         {{$s->batch}}
                                    </div>

                                </div>


                            
                                <div class="row">

                                    <div class="col-md-4">

                                        BloodGroup :

                                    </div>

                                    <div class="col-md-8">
                                        
                                         {{$s->bloodgroup}}
                                    </div>

                                </div>










                            </div>



                            <div class="modal-footer">

                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                            

                            </div>

                        </div>

                    </div>

                </div>
    




@endif


                            

                <div class="row">
                     <div class="col-md-12">
                        <h3 class="p-2">Members</h3>
                      </div>
                    </div>
                  @if(count($getMember)==null)  <p class="pb-3">There are no record exist for members</p>
                  @else    
                 <div class="row">
                     @foreach($getMember as $m)

  
                
                <div class="col-md-4 padding_program ">

                    <a class="faculty_Modals" data-toggle="modal" data-target="#myModal-{{$m->id}}">

                        <div class="row card">

                            <div class="col-md-4 faculty-pic">

                                <img src="{{asset('storage/images/committee/'.$m->image)}}"alt="">  

                            </div>

                            <div class="col-md-8 padding_bottom_program">



                                <div class="col-md-12">

                                    <span class="faculty-name-fonts">{{$m->name}}</span>

                                </div>

                                <div class="col-md-12" style="padding-top:10px;">

                                   <i class="fa fa-envelope"></i>&nbsp; <a href="mailto:{{$m->email}}">{{$m->email}}</a>

                                </div>







                            </div>

                        </div>

                    </a>

                </div>
           




                <!--modal-->


                <div class="modal fade" id="myModal-{{$m->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                    <div class="modal-dialog">

                        <div class="modal-content">

                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                                <h4 class="modal-title model-own" id="myModalLabel">Profile of &nbsp;&nbsp; <span class="faculty_title">{{$m->name}}</span></h4>

                            </div>

                            <div class="modal-body">

                                <div class="row">

                                    <div class="col-md-5 col-md-offset-4 margin-bottom-10">

                                        <img src="{{asset('storage/images/committee/'.$m->image)}}"alt=""> 

                                    </div>

                                </div>

                                
                                <div class="row">

                                    <div class="col-md-4">

                                        Designation :   

                                    </div>

                                    <div class="col-md-8">

                                       {{$m->designation}}
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-4">

                                        Profession :

                                    </div>

                                    <div class="col-md-8">
                                        
                                         {{$m->profession}}
                                    </div>

                                </div>

                                
                            

                                <div class="row">

                                    <div class="col-md-4">

                                        Batch :

                                    </div>

                                    <div class="col-md-8">
                                        
                                         {{$m->batch}}
                                    </div>

                                </div>


                            
                                <div class="row">

                                    <div class="col-md-4">

                                        BloodGroup :

                                    </div>

                                    <div class="col-md-8">
                                        
                                         {{$m->bloodgroup}}
                                    </div>

                                </div>










                            </div>



                            <div class="modal-footer">

                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                            

                            </div>

                        </div>

                    </div>

                </div>

          @endforeach
            </div>


@endif


  
  
   
        
     
</div>


  <hr>
    



@endsection