<nav class="navbar navbar-expand-lg bg-secondary" id="mainNav">
      <div class="container">
            <a class="navbar-brand js-scroll-trigger">CSE ALUMNI</a>
            <button
                  class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white"
                  type="button"
                  data-toggle="collapse"
                  data-target="#navbarResponsive"
                  aria-controls="navbarResponsive"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
            >
                  Menu
                  <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1">
                              <a class="nav-link py-3 px-0 px-lg-3 js-scroll-trigger" href="/">HOME</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1 dropdown">
                              <a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 js-scroll-trigger" data-toggle="dropdown" href="#">MEMBERSHIP</a>
                              <ul class="dropdown-menu">
                                    <li><a href="/register" class="dropdown-item">REGISTRATION</a></li>
                              </ul>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1 dropdown">
                              <a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 js-scroll-trigger" data-toggle="dropdown" href="#">ALUMNI LIST</a>
                              <ul class="dropdown-menu">
                                    <?php $batches=App\Models\User::orderBy('batch', 'ASC')->distinct()->get(['batch']); ?> @foreach($batches as $batch)

                                    <li><a href="{{url('/alumni',$batch->batch)}}" class="dropdown-item">{{$batch->batch}} batch</a></li>
                                    @endforeach
                              </ul>
                        </li>

                        <li class="nav-item mx-0 mx-lg-1 dropdown">
                              <a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 js-scroll-trigger" data-toggle="dropdown" href="#">ALUMNI COMMITTEE</a>
                              <ul class="dropdown-menu">
                                    <a href="/alumni/test" class="dropdown-item">Members Profile</a>

                                    <li><a href="/alumni/committee/create" class="dropdown-item">Access Information</a></li>
                              </ul>
                        </li>

                        <!-- Right Side Of Navbar -->

                        <!-- Authentication Links -->
                        @guest

                        <li class="nav-item mx-0 mx-lg-1">
                              <a class="nav-link py-3 px-0 px-lg-3 js-scroll-trigger" href="/login">LOGIN</a>
                        </li>
                        @if (Route::has('register')) 
                        @endif 
                        @else
                      <li class="nav-item mx-0 mx-lg-1 dropdown">
                              <a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 js-scroll-trigger" data-toggle="dropdown" href="#">Notifications
                                @if(auth()->user()->unreadNotifications->count())
                                    <span class="badge badge-danger count">
                                    {{auth()->user()->unreadNotifications->count()}}</span>
                                   @endif
                                 </a>
                                @if(auth()->user()->notifications->count())
                             <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @foreach(auth()->user()->unreadNotifications as $notification)
                                 <li id="changeBgColor" class="dropdown-item p-3" style="background-color:lightgray">
                                  <a  href="#" style="text-decoration:none" data-toggle="modal" data-target="#myModal">
                                    <b style="color:green">{{ucwords($notification->data['name'])}} &#40;{{$notification->data['batch']}} batch&#41;</b>
                                          <span style="color:#000">changed his job</span>
                                          <br/>
                                          <small style="color:#90949C">
                                             {{date('F j, Y', strtotime($notification->created_at))}}
                                          at {{date('H: i', strtotime($notification->created_at))}}</small>
                                       </a>
                                      </li>
                                          
                                       <div class="dropdown-divider"></div>
                                 @endforeach

                                  @foreach(auth()->user()->readNotifications as $notification)
                                 <li class="dropdown-item p-3">
                                    <b style="color:green">{{ucwords($notification->data['name'])}} &#40;{{$notification->data['batch']}} batch&#41;</b>
                                          <span style="color:#000">changed his job</span>
                                          <br/>
                                          <small style="color:#90949C">
                                             {{date('F j, Y', strtotime($notification->created_at))}}
                                          at {{date('H: i', strtotime($notification->created_at))}}</small>
                                      </li>
                                          
                                       <div class="dropdown-divider"></div>
                                 @endforeach
                                 
                              </ul>
                              @endif
                        </li>
                        
                        <li class="nav-item mx-0 mx-lg-1 dropdown">
                              <a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 js-scroll-trigger" data-toggle="dropdown" href="#"> {{ Auth::user()->name }} <span class="caret"></span></a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                        </li>
                        @endguest
                  </ul>
            </div>
      </div>
</nav>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script>
$(document).ready(function(){
$("#changeBgColor").click(function(){
        
        $(this).css("background-color", "#FFFFFF");
  
  

});
  $(document).on('click', '.dropdown-toggle', function(){
    $('.count').html('');
        $.ajax({
        type: "GET",
        url: './alumni/markAllAsRead',
        data: "",
        success: function() {
            console.log("Ajax request sent");
        }
    })
});
});  
</script>

