<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<title>CSE Alumni Association</title>
	@include('admin.partials.css')
</head>
<body class="hold-transition sidebar-mini">
	<div class="wrapper">
		@include('admin.partials.navBar')
		@if($flash=session('message'))
		<div class="alert alert-success text-center" role="alert">
			{{$flash}}
		</div>
		@endif 
		@include('admin.partials.sideBar')
		@yield('content') 
		@include('admin.partials.footer')
	</div>
	@include('admin.partials.js')
	@yield('scripts')
</body>
</html>
