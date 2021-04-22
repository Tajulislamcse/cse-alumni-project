<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<title>CSE Alumni Association</title>
		@stack('css')
		@include('generalMember.partials.css')
		@include('generalMember.partials.js')
	</head>
	<body id="page-top">
		@include('generalMember.partials.navbar')
		@if($flash=session('message'))
		<div class="alert alert-success text-center" role="alert">
			{{$flash}}
		</div>
		@endif 
		@yield('main-content') 
		@include('generalMember.partials.footer')
		@yield('scripts')
		@stack('scripts')
	</body>
</html>
