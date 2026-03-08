@extends('adminlte::page')

@section('title','Create User')

@section('content_header')
<h1>Create User</h1>
@stop

@section('content')

<form method="POST" action="{{ route('users.store') }}">

@csrf

<div class="form-group">
<label>Name</label>
<input type="text" name="name" class="form-control">
</div>

<div class="form-group">
<label>Email</label>
<input type="email" name="email" class="form-control">
</div>

<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control">
</div>

<button class="btn btn-success">
Create User
</button>

</form>

@stop