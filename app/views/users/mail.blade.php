@extends('layouts.users')
@section('main')
	<h1>Mail Test Using Laravel</h1>
	{{ Form::open(array('url' => 'email_send')) }}
	<ul>
	<li>
	{{ Form::label('email', 'Email:') }}
	{{ Form::text('email') }}
	</li>
	<li>
	{{ Form::label('msg', 'Msg:') }}
	{{ Form::textarea('msg') }}
	</li>
	<li>
	{{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
	<a href="/laravel/public/" class="btn btn-warning" role="button">Cancel</a>


	</li>
	</ul>
	{{ Form::close() }}
@stop
