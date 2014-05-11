<DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>Laravel :: {{ $title }}</title>

  	{{ HTML::style('assets/bootstrap/dist/css/bootstrap.min.css') }}
  	{{ HTML::style('assets/fontawesome/css/font-awesome.min.css') }}
  	{{ HTML::style('styles/general.css') }}

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
					<li @if($current='home')class="active"@endif><a href="{{ URL::to('/') }}"><i class="fa fa-home"></i> Home</a></li>
				@else
					<li @if($current=='login')class="active"@endif><a href="{{ URL::to('login') }}"><i class="fa fa-lock"></i> Login</a></li>
					<li @if($current=='register')class="active"@endif><a href="{{ URL::to('register') }}"><i class="fa fa-plus"></i> Register</a></li>
				@endif
			</ul>

			@if( Auth::check() )

			<ul class="nav navbar-nav navbar-right">
				<span class="navbar-text">Hello, {{ $user->profile->nickname }}</span>
				<li><a href="{{ URL::to('logout') }}"><i class="fa fa-logout"></i> Logout</a></li>
			</ul>
			@endif

		</div>
		
	</div>

</nav>

{{-- ./Navigation --}}

@yield('content')

{{ HTML::script('assets/jquery/dist/jquery.min.js') }}
{{ HTML::script('assets/bootstrap/dist/js/bootstrap.min.js') }}

</body>
</html>