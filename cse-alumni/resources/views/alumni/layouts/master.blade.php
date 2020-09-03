<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />

            <title>CSE Alumni</title>
            @stack('css')

            @include('alumni.partials.css')
            @include('alumni.partials.js')
      </head>
      <body id="page-top">
            @include('alumni.partials.navbar') 
            @yield('main-content') 
            @include('alumni.partials.footer')
            @yield('scripts')
            @stack('scripts')
      </body>
</html>
