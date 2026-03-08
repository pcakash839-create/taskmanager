@extends('adminlte::page')

@section('title','Users')

@section('content_header')
<h1>Users</h1>
<a href="{{ route('users.create') }}" class="btn btn-primary">Add User</a>
@stop

@section('content')

<table class="table table-bordered mt-3">

<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th width="200">Action</th>
</tr>
</thead>

<tbody>

@foreach($users as $user)

<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->name }}</td>
<td>{{ $user->email }}</td>

<td>

<a href="{{ route('users.edit',$user->id) }}" class="btn btn-info btn-sm">
Edit
</a>

<form action="{{ route('users.destroy',$user->id) }}" method="POST" style="display:inline;">
@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm">
Delete
</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

@stop