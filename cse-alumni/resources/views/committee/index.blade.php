@extends('alumni.layouts.master')

@section('main-content')
<style>
p{background-color:#2C3E50;text-align: center; color:white;padding:10px;margin-top: 25px;font-size: 19px;}
img{width:100px;height: 100px}
h2{text-align: center;}
.card {
    background: none repeat scroll 0 0 #FFFFFF;
    border: 1px solid #CCCCCC;
    box-shadow: 2px 2px 7px #CCCCCC;
    font-size: 13px;
    padding: 10px 15px;
}
.padding_program {
    margin-right: -7px;
    padding-bottom: 10px;
    padding-right: 30px;
    padding-left: 30px;
}
.padding_bottom_program {
    padding-top: 10px;
    margin-left: 0px;
    padding-left: 0px;
    padding-right: 0px;
}
.faculty-name-fonts {
    color: #0077B5;
    font-size: 14px;
    font-weight: bold;
    line-height: 24px;
    text-decoration: none;
    font-family: Arial, Helvetica, sans-serif;
}
.faculty-pic {
    margin-left: -15px;
}
.faculty_Modals {
    cursor: pointer;
}
.faculty_title {
    font-size: 22px;
    font-weight: bold;
    color: #333333;
    font-family: Arial, Helvetica, sans-serif;
}
.modal-header {
    padding: 15px;
    border-bottom: 1px solid #e5e5e5;
    min-height: 16.42857px;
}
a:hover {
  color: #4782b2;
}
a {
    transition: all 0.1s ease-in-out 0s;
}
.model-own {
    font-size: 15px;
    text-align: center;
    font-weight: bold;
    font-family: Arial, Helvetica, sans-serif;
}
.modal-header .close {
margin-top: -9px;
margin-left: auto;
order: 2;
}
.close {
    
    font-size: 21px;
    font-weight: bold;
    line-height: 1;
    color: black;
    text-shadow: 0 1px 0 white;
    opacity: 0.2;
}
.modal-footer {
    margin-top: 20px;
    padding: 19px 20px 20px;
    text-align: right;
    border-top: 1px solid #e5e5e5;
}
.modal-body {
    position: relative;
    padding: 20px;
}
.margin-bottom-10 {
    margin-bottom: 10px;
}
.btn-default {
    color:white;
    background-color: #3276B1;
    border-color: #cccccc;
}
</style>
<div class="container-fluid" style="background-color:#F8F8F8;margin-top:25px">
    <div class="row">
         <div class="col-md-12">
            <h3 style="background-color:pink;text-align: center; color:black;padding:5px">Alumni Association Committee Members</h3>
         </div>
    </div>

               <div class="row">
                 <div class="col-md-12">
                    <p>President</p>
                 </div>
               </div>
           
            @if(count($getPresident)==null)  <h2>There is no record exist for president</h2>
            
            @else

             <div class="row">
                @foreach($getPresident as $p)

                   


                <div class="col-md-4 padding_program ">

                    <a class="faculty_Modals" data-toggle="modal" data-target="#myModal1">

                        <div class="row card">

                            <div class="col-md-4 faculty-pic">

                                <img src="{{asset('/uploads/'.$p->image)}}"alt="">  

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

                                        <img src="{{asset('/uploads/'.$p->image)}}"alt=""> 

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
                    <p>Secretary</p>
                 </div>
             </div>
           
             @if(count($getSecretary)==null) <h2>There is no record exist for Secretary</h2>
             

             @else       

        <div class="row">
                @foreach($getSecretary as $s)

                   


                <div class="col-md-4 padding_program ">

                    <a class="faculty_Modals" data-toggle="modal" data-target="#myModal2">

                        <div class="row card">

                            <div class="col-md-4 faculty-pic">

                                <img src="{{asset('/uploads/'.$s->image)}}"alt="">  

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

                                        <img src="{{asset('/uploads/'.$s->image)}}"alt=""> 

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
                        <p>Members</p>
                      </div>
                    </div>
                  @if(count($getMember)==null)  <h2>There is no record exist for members</h2>
                  @else    
                 <div class="row">
                     @foreach($getMember as $m)

  
                
                <div class="col-md-4 padding_program ">

                    <a class="faculty_Modals" data-toggle="modal" data-target="#myModal-{{$m->id}}">

                        <div class="row card">

                            <div class="col-md-4 faculty-pic">

                                <img src="{{asset('/uploads/'.$m->image)}}"alt="">  

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

                                        <img src="{{asset('/uploads/'.$m->image)}}"alt=""> 

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


  
    



@endsection