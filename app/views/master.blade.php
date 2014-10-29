<!DOCTYPE html>
<html lang="en" data-ng-app="easyWineApp">
<head>
	<meta charset="utf-8">
	<meta name="description" content="Easy Wine Office Website">
	<meta name="csrf-token" data-ng-init="csrf_token = '<?php echo csrf_token(); ?>'">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	{{HTML::style('packages/twitterbootstrap/css/bootstrap.css')}}
	{{HTML::style('packages/twitterbootstrap/css/bootstrap-theme.css')}}
	{{HTML::style('assets/css/style.css')}}
	{{HTML::style('assets/css/yamm.css')}}
	@yield('style')
	<title>Easy Wine</title>
</head>
<body>
	<div class="mast-head">
    	@include('home.nav_bar')
    </div>

	<div class="container">
		@yield('container-content')
	</div>
</div>
	@include('home.footer')
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    {{HTML::script('assets/js/main.js')}}
	{{HTML::script('packages/twitterbootstrap/js/bootstrap.js')}}
	@yield('script')
</body>
</html>