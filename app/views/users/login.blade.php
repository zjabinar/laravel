@extends('layouts.users')
@section('main')
	
	{{ Form::open(array('url' => 'login')) }}
		<h1>Login</h1>

		<p>
			{{ Form::label('username', 'Username:') }}
			{{ Form::text('username', Input::old('username'), array('placeholder' => 'Username')) }}
		</p>

		<p>
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password') }}
		</p>

		<p>
			{{ Form::submit('Login', array('class' => 'btn btn-primary'))}}
			<a href="/laravel/public/" class="btn btn-warning" role="button">Cancel</a>
		</p>

	


	{{ Form::close() }}
	@if ($errors->any())
		<ul>
		{{ implode('', $errors->all('<li class="error">:message</
		li>')) }}
		</ul>
	@endif
@stop