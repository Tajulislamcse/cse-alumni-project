<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
            <img src=" {{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8;" />
            <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-5 mb-3 d-flex">
                  <div class="image">
                        <img src="{{asset('dist/img/tajul.png')}}" class="img-circle elevation-2" alt="User Image" />
                  </div>

                  <ul class="navbar-nav">
                        <li class="nav-item mx-0 mx-lg-1 dropdown">
                              <a class="nav-link dropdown-toggle py-2 px-0 px-lg-3 rounded js-scroll-trigger" data-toggle="dropdown" href="#"> {{ Auth::user()->name }} <span class="caret"></span></a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a
                                          class="dropdown-item"
                                          href="{{ route('logout') }}"
                                          onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();"
                                          style="color: #2c3e50;"
                                    >
                                          {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          @csrf
                                    </form>
                              </div>
                        </li>
                  </ul>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        <li>
                              <a href="/admin/dashboard" class="nav-link active">
                                    <p>
                                          Dashboard
                                    </p>
                              </a>
                        </li>

                        <!--posts-->
                        <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                    <i class="nav-icon far fa-newspaper"></i>
                                    <p>
                                          Posts
                                          <i class="fas fa-angle-left right"></i>
                                    </p>
                              </a>
                              <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                          <a href="/admin/post/create" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Add New Post</p>
                                          </a>
                                    </li>
                                    <li class="nav-item">
                                          <a href="/admin/post" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>All Posts</p>
                                          </a>
                                    </li>
                              </ul>
                        </li>
                        <!--/posts-->

                               <!--slider-->
                        <li class="nav-item has-treeview">
                              <a href="#" class="nav-link" >
                                    <i class="nav-icon far fa-image"></i>
                                    <p>
                                          SliderImages
                                          <i class="fas fa-angle-left right"></i>
                                    </p>
                              </a>
                              <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                          <a href="#" data-toggle="modal" data-target="#sliderImg"class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Add New Slider Image</p>
                                          </a>
                                    </li>
                                    <li class="nav-item">
                                          <a href="/admin/slider" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Slider Images</p>
                                          </a>
                                    </li>
                              </ul>
                        </li>
     

                        <li class="nav-header">EXAMPLES</li>

                        <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                    <i class="nav-icon far fa-envelope"></i>
                                    <p>
                                          Mailbox
                                          <i class="fas fa-angle-left right"></i>
                                    </p>
                              </a>
                              <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                          <a href="pages/mailbox/mailbox.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Inbox</p>
                                          </a>
                                    </li>
                                    <li class="nav-item">
                                          <a href="pages/mailbox/compose.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Compose</p>
                                          </a>
                                    </li>
                                    <li class="nav-item">
                                          <a href="pages/mailbox/read-mail.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Read</p>
                                          </a>
                                    </li>
                              </ul>
                        </li>
                  </ul>
            </nav>
            <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
</aside>

                   <!--/posts-->
      <!--modal-->

      <div class="modal fade" id="sliderImg">
      <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                        <h4 class="modal-title">Slider Image Create Form</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                        </button>
                  </div>
                 <form action="/admin/slider" method="post" enctype="multipart/form-data">
                                                      @csrf 
                                                      <div class="modal-body">
                                                <div class="form-group">
                                                      <label for="image">image</label>
                                                      <div>
                                                            <input class="form-control" type="file" name="name"/>
                                                      </div>
                                                </div>

                                        


                                              
                                                      </div>
                                                      <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                      </div>
                                                </form>

            </div>
            <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
