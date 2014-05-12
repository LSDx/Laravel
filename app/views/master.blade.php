<DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>Laravel :: {{ $title }}</title>

  	<link rel="stylesheet" href="{{ URL::asset('bower_assets/bootstrap/dist/css/bootstrap.min.css') }}">
  	<link rel="stylesheet" href="{{ URL::asset('bower_assets/fontawesome/css/font-awesome.min.css') }}">
  	<link rel="stylesheet" href="{{ URL::asset('assets/css/general.css') }}">

</head>
<body>

{{-- Navigation --}}

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
				<span class="sr-only">Collapse navbar</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="main-nav">
			<ul class="nav navbar-nav">

				@if( Auth::check() )
					<li @if($current='home')class="active"@endif><a href="{{ URL::route('index') }}"><i class="fa fa-home"></i> Home</a></li>
				@else
					<li @if($current=='login')class="active"@endif><a href="{{ URL::route('login.index') }}"><i class="fa fa-lock"></i> Login</a></li>
					<li @if($current=='register')class="active"@endif><a href="{{ URL::route('register.index') }}"><i class="fa fa-plus"></i> Register</a></li>
				@endif
			</ul>

			@if( Auth::check() )

			<ul class="nav navbar-nav navbar-right">

				<span class="navbar-text">Hello, {{ $authUser->profile->nickname }}</span>

				<li><a href="{{ URL::route('logout') }}"><i class="fa fa-logout"></i> Logout</a></li>

			</ul>

			@endif

		</div>
		
	</div>

</nav>

{{-- ./Navigation --}}

@yield('content')

<script src="{{ URL::asset('assets/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ URL::asset('bower_assets/bootstrap/dist/js/bootstrap.min.js') }}"></script>

</body>
</html>