@extends('adminlte::page')

@section('title','Create Project')

@section('content_header')
<h1>Create Project</h1>
@stop

@section('content')

<form method="POST" action="{{ route('projects.store') }}">

@csrf

<div class="form-group">
<label>Title</label>
<input type="text" name="title" class="form-control">
</div>

<div class="form-group">
<label>Description</label>
<textarea name="description" class="form-control"></textarea>
</div>

<div class="form-group">
<label>Project Manager</label>

<select name="id" class="form-control">
@foreach($users as $user)
<option value="{{$user->id}}">{{$user->name}}</option>
@endforeach
</select>

</div>

<div class="form-group">
<label>Status</label>

<select name="status" class="form-control">
<option value="active">Active</option>
<option value="completed">Completed</option>
</select>

</div>

<button class="btn btn-success">
Save Project
</button>

</form>

@stop