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
   @include('Admin.partials.cssLink')
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
      @include('Admin.partials.navbar')
      @include('Admin.partials.sidebar')
      @yield('content')
      @include('Admin.partials.footer')
  </div>
      @include('Admin.partials.jsLink')
      @yield('scripts')
</body>  