@extends('alumni.layouts.master')

@section('main-content')
<style>
h4{background-color:#2C3E50;text-align: center; color:white;padding:10px;margin-top: 25px}
img{margin-top: 25px;width:150px}
h2{text-align: center;}
</style>
<div class="container-fluid" style="margin-top:25px">
    <div class="row">
         <div class="col-md-12">
            <h3 style="background-color:pink;text-align: center; color:black;padding:5px">Alumni Association Committee Members</h3>
             
         </div>
        
    </div>

               <div class="row">
                 <div class="col-md-12">
                    <h4>President</h4>
                 </div>
             </div>
           
            @php if(count($getPresident)==null) echo" <h2>There is no record exist for president</h2>"@endphp
         
             <div class="row">
                @foreach($getPresident as $p)

                 <div class="col-md-3">
                    <img class="img-fluid rounded mb-4 mb-lg-0"  src="{{asset('/uploads/'.$p->image)}}" alt="">
                     <p>{{$p->name}}</p>
                 </div>
                 @endforeach
            </div>
    


               <div class="row">
               <div class="col-md-12">
                  <h4>Secretary</h4>
                </div>
            </div>
            
             @php if(count($getSecretary)==null) echo" <h2>There is no record exist for secretary</h2>"@endphp
           
           <div class="row">
            @foreach($getSecretary as $s)
             <div class="col-md-3">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="{{asset('/uploads/'.$s->image)}}" alt="">
                 <p>{{$s->name}}</p>
             </div>
             @endforeach
         </div>
    
                  <div class="row">
                     <div class="col-md-12">
                        <h4>Members</h4>
                      </div>
                    </div>
               @php if(count($getMember)==null) echo" <h2>There is no record exist for member</h2>"@endphp    
           <div class="row">
                     @foreach($getMember as $committees)
                       
                          <div class="col-md-3">
                            <img class="img-fluid rounded mb-4 mb-lg-0" src="{{asset('/uploads/'.$committees->image)}}" alt="">
                             <p>{{$committees->name}}</p>
                           </div>
                        
                    @endforeach
            </div>
   
        
     
</div>


  
    



@endsection



