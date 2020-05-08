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
           
            @php if(count($getPresident)==null) echo" <h2>There is no record exist for president</h2>"@endphp
         
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






                    

        






                            






             
             
    


               <div class="row">
               <div class="col-md-12">
                  <p>Secretary</p>
                </div>
            </div>
            
             @php if(count($getSecretary)==null) echo" <h2>There is no record exist for secretary</h2>"@endphp
           
           <div class="row">
            @foreach($getSecretary as $s)
              

               
         </div>
     
                  <div class="row">
                     <div class="col-md-12">
                        <p>Members</p>
                      </div>
                    </div>
               @php if(count($getMember)==null) echo" <h2>There is no record exist for member</h2>"@endphp    
           <div class="row">
                     @foreach($getMember as $committees)

  
                        
                <div class="col-md-3 padding_program ">

                    <a class="faculty_Modals" data-toggle="modal" data-target="#myModal17">

                        </a><div class="row card"><a class="faculty_Modals" data-toggle="modal" data-target="#myModal17">

                            <div class="col-md-4 faculty-pic">

                                <img src="{{asset('/uploads/'.$committees->image)}}" alt="presidents image">  

                            </div>

                            </a><div class="col-md-8 padding_bottom_program"><a class="faculty_Modals" data-toggle="modal" data-target="#myModal17">



                                <div class="col-md-12">

                                    <span class="faculty-name-fonts">{{$committees->name}}</span>

                                </div>

                                </a><div class="col-md-12" style="padding-top:10px;"><a class="faculty_Modals" data-toggle="modal" data-target="#myModal17">

                                   <i class="fa fa-envelope"></i>&nbsp; </a><a href="mailto:tajulislam8028@gmail.com">{{$committees->email}}</a>

                                </div>







                            </div>

                        </div>

                    

                </div>



                    @endforeach
            </div>






                <!-- Modal -->

                <div class="modal fade" id="myModal17" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

                    <div class="modal-dialog">

                        <div class="modal-content">

                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                                <h4 class="modal-title model-own" id="myModalLabel">Profile of &nbsp;&nbsp; <span class="faculty_title">Md.Kamal Hossain Chowdhury</span></h4>

                            </div>

                            <div class="modal-body">

                                <div class="row">

                                    <div class="col-md-5 col-md-offset-4 margin-bottom-10">

                                        <img src="https://www.cou.ac.bd/content/image/Kamal0000.jpg" alt="" width="100" height="100">  

                                    </div>

                                </div>

                                
                                <div class="row">

                                    <div class="col-md-4">

                                        Designation :   

                                    </div>

                                    <div class="col-md-8">

                                        Chairman of the Department, Computer Science and Engineering
                                    </div>

                                </div>



                                






                                <div class="row">

                                    <div class="col-md-4">

                                        E-mail :

                                    </div>

                                    <div class="col-md-8">

                                        <a href="mailto:kamal.cou@gmail.com">kamal.cou@gmail.com</a>

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-4">

                                        Cell phone :

                                    </div>

                                    <div class="col-md-8">

                                        
                                    </div>

                                </div>



                            </div>



                            <div class="modal-footer">

                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                <a href="https://www.cou.ac.bd/cse/Md_Kamal_Hossain_Chowdhury" class="btn btn-primary" type="button">Details</a>

                            </div>

                        </div>

                    </div>

                </div>






  
  
   
        
     
</div>


  
    



@endsection



