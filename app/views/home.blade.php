@extends('master', ['title' => 'Homepage', 'current' => 'home'])

@section('content')

<div class="row">

	<div class="col-centered col-lg-4 well panel-login">
		
		Hello, {{ $user->profile->nickname }}

	</div>

</div>

@stop
