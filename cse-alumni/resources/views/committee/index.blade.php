@extends('alumni.layouts.master')

@section('main-content')
<style>
h4{background-color:#2C3E50;text-align: center; color:white;padding:10px;margin-top: 25px}
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
@foreach($getAll as $committee)
     @if($committee->designation=="president")
    <div class="row">
         <div class="col-md-12">
            <img style="width: 200px"class="img-fluid rounded mb-4 mb-lg-0"  src="{{asset('/uploads/'.$committee->image)}}" alt="">
             <p>{{$committee->name}}</p>
         </div>
        
    </div>
    

        
    
  @elseif($committee->designation=="secretary")
            <div class="row">
         <div class="col-md-12">
            <h4>Secretary</h4>
             </div>
         </div>

    <div class="row">
         <div class="col-md-12">
            <img style="width: 200px" src="{{asset('/uploads/'.$committee->image)}}" alt="">
             <p>{{$committee->name}}</p>
         </div>
     </div>
     
      

        @else


             @php $i=1;@endphp
            
            <div class="row">
         <div class="col-md-12">
            <h4>Members</h4>
             </div>
           </div>

           
     <div class="row">

        @foreach($getAll as $committee)
        @if($committee->designation=="member")
         <div class="col-md-3">
            <img style="width: 200px" src="{{asset('/uploads/'.$committee->image)}}" alt="">
             <p>{{$committee->name}}</p>
         </div>
         @endif
          @endforeach
            @php if($i==1) break;
            @endphp

        </div>
      @endif
      @endforeach  
    


    
</div>


  
    



@endsection



