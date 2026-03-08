@extends('adminlte::page')

@section('title','Edit User')

@section('content_header')
<h1>Edit User</h1>
@stop

@section('content')

<form method="POST" action="{{ route('users.update',$user->id) }}">

@csrf
@method('PUT')

<div class="form-group">
<label>Name</label>
<input type="text" name="name" class="form-control" value="{{ $user->name }}">
</div>

<div class="form-group">
<label>Email</label>
<input type="email" name="email" class="form-control" value="{{ $user->email }}">
</div>

<button class="btn btn-primary">
Update User
</button>

</form>

@stop