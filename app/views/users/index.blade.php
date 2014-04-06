@extends('layouts.users')
@section('main')
	

	<p>{{ link_to_route('users.create', 'Add new user', '','class="btn btn-warning"') }}
	<a href="/laravel/public" class="btn btn-info" role="button">Back to Main</a>
	</p>
	<h3>All Users</h3>
		@if ($users->count())
			<table class="table table-striped table-bordered">
			<thead>
			<tr>
			<th>Username</th>
			<th>Password</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Name</th>
			</tr>
			</thead>
			<tbody>
				@foreach ($users as $user)
					<tr>
					<td>{{ $user->username }}</td>
					<td>{{ $user->password }}</td>
					<td>{{ $user->email }}</td>
					<td>{{ $user->phone }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ link_to_route('users.edit', 'Edit', $user->id, 'class="btn btn-warning"') }}</td>
					<td>
					{{ Form::open(array('method'=> 'DELETE', 'route' => array('users.destroy', $user->id))) }}
					{{ Form::submit('Delete', array('class' =>'btn btn-danger')) }}
					{{ Form::close() }}
					</td>
					</tr>
				@endforeach
			</tbody>
			</table>
		@else
			There are no users
		@endif
@stop