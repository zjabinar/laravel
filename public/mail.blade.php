@extends('layouts.users')
@section('main')
	<h1>Create User</h1>
	{{ Form::open('users.mail_send') }}
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
	{{ link_to_route('users.index', 'Cancel','', array('class' => 'btn btn-warning')) }}


	</li>
	</ul>
	{{ Form::close() }}
@stop
