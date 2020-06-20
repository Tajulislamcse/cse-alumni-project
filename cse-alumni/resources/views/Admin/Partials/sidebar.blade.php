               <!-- Main Sidebar Container -->
                <aside class="main-sidebar sidebar-dark-primary elevation-4">
                  <!-- Brand Logo -->
                  <a href="index3.html" class="brand-link">
                    <img src=" {{asset('dist/img/AdminLTELogo.png')}}"  alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                         style="opacity: .8">
                    <span class="brand-text font-weight-light">AdminLTE 3</span>
                  </a>

                  <!-- Sidebar -->
                  <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-5 mb-3 d-flex">
                      <div class="image">
                        <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
                      </div>
                            
                        <ul class="navbar-nav">
                            <li class="nav-item mx-0 mx-lg-1 dropdown">
                              <a class="nav-link dropdown-toggle py-2 px-0 px-lg-3 rounded js-scroll-trigger" data-toggle="dropdown" href="#">  {{ Auth::user()->name }} <span class="caret"></span></a>
                                      
                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();" style="color:#2c3E50">
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
                        
                          <li class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                              Dashboard
                            
                            </p>
                          </li>
                    
                      
                       <!--news-->
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon far fa-newspaper"></i>
                            <p>
                              News
                              <i class="fas fa-angle-left right"></i>
                             
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add News</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="pages/layout/boxed.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All News</p>
                              </a>
                            </li>

                          </ul>
                        </li>
                       <!--/news-->
                       <!--events-->
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                              Events
                              <i class="fas fa-angle-left right"></i>
                             
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Events</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="pages/layout/boxed.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Events</p>
                              </a>
                            </li>

                          </ul>
                        </li> 
                      <!--/events-->
                      <!--Notice-->
                       <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                              Notice
                              <i class="fas fa-angle-left right"></i>
                             
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Notice</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="pages/layout/boxed.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Notices</p>
                              </a>
                            </li>

                          </ul>
                        </li>
                       <!--/Notice--> 

                        <li class="nav-header">EXAMPLES</li>
                        <li class="nav-item">
                          <a href="pages/calendar.html" class="nav-link">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                              Calendar
                              <span class="badge badge-info right">2</span>
                            </p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="pages/gallery.html" class="nav-link">
                            <i class="nav-icon far fa-image"></i>
                            <p>
                              Gallery
                            </p>
                          </a>
                        </li>
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
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                              Pages
                              <i class="fas fa-angle-left right"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="pages/examples/invoice.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Invoice</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="pages/examples/profile.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profile</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="pages/examples/e_commerce.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>E-commerce</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="pages/examples/projects.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Projects</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="pages/examples/project_add.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Add</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="pages/examples/project_edit.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Edit</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="pages/examples/project_detail.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Detail</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="pages/examples/contacts.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contacts</p>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon far fa-plus-square"></i>
                            <p>
                              Extras
                              <i class="fas fa-angle-left right"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="pages/examples/login.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Login</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="pages/examples/register.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Register</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="pages/examples/forgot-password.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Forgot Password</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="pages/examples/recover-password.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Recover Password</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="pages/examples/lockscreen.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lockscreen</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Legacy User Menu</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="pages/examples/language-menu.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Language Menu</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="pages/examples/404.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Error 404</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="pages/examples/500.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Error 500</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="pages/examples/pace.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pace</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="pages/examples/blank.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Blank Page</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="starter.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Starter Page</p>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="nav-header">MISCELLANEOUS</li>
                        <li class="nav-item">
                          <a href="https://adminlte.io/docs/3.0" class="nav-link">
                            <i class="nav-icon fas fa-file"></i>
                            <p>Documentation</p>
                          </a>
                        </li>
                        <li class="nav-header">MULTI LEVEL EXAMPLE</li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <i class="fas fa-circle nav-icon"></i>
                            <p>Level 1</p>
                          </a>
                        </li>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-circle"></i>
                            <p>
                              Level 1
                              <i class="right fas fa-angle-left"></i>
                            </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Level 2</p>
                              </a>
                            </li>
                            <li class="nav-item has-treeview">
                              <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                  Level 2
                                  <i class="right fas fa-angle-left"></i>
                                </p>
                              </a>
                              <ul class="nav nav-treeview">
                                <li class="nav-item">
                                  <a href="#" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Level 3</p>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a href="#" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Level 3</p>
                                  </a>
                                </li>
                                <li class="nav-item">
                                  <a href="#" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Level 3</p>
                                  </a>
                                </li>
                              </ul>
                            </li>
                            <li class="nav-item">
                              <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Level 2</p>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <i class="fas fa-circle nav-icon"></i>
                            <p>Level 1</p>
                          </a>
                        </li>
                        <li class="nav-header">LABELS</li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <i class="nav-icon far fa-circle text-danger"></i>
                            <p class="text">Important</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <i class="nav-icon far fa-circle text-warning"></i>
                            <p>Warning</p>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <i class="nav-icon far fa-circle text-info"></i>
                            <p>Informational</p>
                          </a>
                        </li>
                      </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                  </div>
                  <!-- /.sidebar -->
                </aside>
