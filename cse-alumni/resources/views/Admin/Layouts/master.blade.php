        <!DOCTYPE html>
        <!--
        This is a starter template page. Use this page to start your new project from
        scratch. This page gets rid of all links and provides the needed markup only.
        -->
        <html lang="en">
        <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <meta http-equiv="x-ua-compatible" content="ie=edge">

          <title>AdminLTE 3 | Starter</title>
           @include('admin.partials.css')

        </head>

        <body class="hold-transition sidebar-mini">
           <div class="wrapper">
              @include('admin.partials.navBar')
              @include('admin.partials.sideBar')
              @yield('content')
              @include('admin.partials.footer')
              <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
              </aside>
            </div>
                 @include('admin.partials.js')
              @yield('scripts')
        </body>  