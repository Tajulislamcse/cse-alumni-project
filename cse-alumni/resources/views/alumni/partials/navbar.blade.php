  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger">CSE AlUMNI</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/">HOME</a>
          </li>
            <li class="nav-item mx-0 mx-lg-1 dropdown">
            <a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-toggle="dropdown" href="#">MEMBERSHIP</a>
            <div class="dropdown-menu">
               <a href="/register" class="dropdown-item">REGISTRATION</a>
             </div>          
                      
          </li>
          <li class="nav-item mx-0 mx-lg-1 dropdown">
            <a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-toggle="dropdown"  href="#">ALUMNI LIST</a>
            <div class="dropdown-menu">

                <?php $batches=App\Models\User::orderBy('batch', 'ASC')->distinct()->get(['batch']);      ?>
                   @foreach($batches as $batch)

               <a href="{{url('/alumni',$batch->batch)}}" class="dropdown-item">{{$batch->batch}} batch</a>
                    @endforeach

               
             </div>         
                      
          </li>
          
             <li class="nav-item mx-0 mx-lg-1 dropdown">
                <a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-toggle="dropdown" href="#">ALUMNI COMMITTEE</a>
                <div class="dropdown-menu">
                   <a href="/alumni/test" class="dropdown-item">MEMBERS PROFILE</a>
                 
                   <a href="/alumni/committee/create" class="dropdown-item">ACCESSING INFORMATION</a>
                          
                                 
                          
              </li>
        
       

           <!-- Right Side Of Navbar -->
               
                        <!-- Authentication Links -->
                        @guest
                            
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/login">LOGIN</a>
          </li>
                            @if (Route::has('register'))
                              
                            @endif
                        @else
                        
                                  <li class="nav-item mx-0 mx-lg-1 dropdown">
                        <a class="nav-link dropdown-toggle py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-toggle="dropdown" href="#">  {{ Auth::user()->name }} <span class="caret"></span></a>
                                
                      
          




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

  