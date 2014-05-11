@extends('master', ['title' => 'Register page', 'current' => 'register'])

@section('content')

<div class="row">

	<div class="col-centered col-lg-4 well panel-login">
		
			{{ Form::open() }}

				
				@if(Session::has('errors'))

					<div class="alert alert-danger">
						@foreach ($errors->all('<li>:message</li>') as $error)
							{{ $error }}
						@endforeach
					</div>

				@endif

				<div class="input-group">
				  <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
				  {{ Form::text('nickname', false, ['class' => 'form-control', 'placeholder' => 'Nickname']) }}
				</div>

				<div class="input-group">
				  <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
				  {{ Form::email('email', false, ['class' => 'form-control', 'placeholder' => 'E-Mail']) }}
				</div>

				<div class="input-group">
				  <span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>
				  {{ Form::text('first_name', false, ['class' => 'form-control', 'placeholder' => 'First name']) }}
				</div>

				<div class="input-group">
				  <span class="input-group-addon"><i class="fa fa-asterisk fa-fw"></i></span>
				  {{ Form::text('last_name', false, ['class' => 'form-control', 'placeholder' => 'Last name']) }}
				</div>

				<div class="input-group">
				  <span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span>
				  {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
				</div>

				<div class="input-group">
				  <span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span>
				  {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Password twice']) }}
				</div>

				<button class="btn btn-success btn-block">Register</button> or

				<a href="{{ URL::to('login') }}">Login</a>

			</form>

	</div>

</div>

@stop
