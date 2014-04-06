@extends('layouts.users')
@section('main')
<div class="container">
	<h1>Edit User</h1>
	{{ Form::model($user, array('method' => 'PATCH', 'route' =>
	array('users.update', $user->id))) }}
	<ul>
	<li>
	{{ Form::label('username', 'Username:') }}
	{{ Form::text('username') }}
	</li>
	<li>
	{{ Form::label('password', 'Password:') }}
	{{ Form::text('password','') }}
	</li>
	<li>
	{{ Form::label('email', 'Email:') }}
	{{ Form::text('email') }}
	</li>
	<li>
	{{ Form::label('phone', 'Phone:') }}
	{{ Form::text('phone') }}
	</li>
	<li>
	{{ Form::label('name', 'Name:') }}
	{{ Form::text('name') }}
	</li>
	<li>
	{{ Form::submit('Update', array('class' => 'btn btn-primary'))}}

	{{ link_to_route('users.index', 'Cancel', '',array('class' => 'btn btn-info'))  }}


	</li>
	</ul>
	{{ Form::close() }}
	@if ($errors->any())
		<ul>
		{{ implode('', $errors->all('<li class="error">:message</
		li>')) }}
		</ul>
	@endif
</div>
@stop