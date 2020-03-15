<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CSE Alumni</title>
   @include('FrontEnd.partials.css')
   @include('FrontEnd.partials.js')
 </head> 
  <body id="page-top">
   
   @include('FrontEnd.partials.navbar')	
   
       @yield('main-content')
       @yield('scripts')
  </body>
 </html> 