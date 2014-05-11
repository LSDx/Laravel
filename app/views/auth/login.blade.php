@extends('master', ['title' => 'Login page', 'current' => 'login'])

@section('content')

<div class="row">

	<div class="col-centered col-lg-4 well panel-login">
		
			{{ Form::open() }}

				
				@if(Session::has('error'))
					<div class="alert alert-danger">{{ Session::get('error') }}</div>
				@endif


				<div class="input-group">
				  <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
				  {{ Form::text('email', false, ['class' => 'form-control', 'placeholder' => 'E-Mail']) }}
				</div>

				<div class="input-group">
				  <span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span>
				  {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
				</div>



				<button class="btn btn-success btn-block">Login</button> or

				<a href="{{ URL::to('register') }}">Register</a>

			</form>

	</div>

</div>

@stop
