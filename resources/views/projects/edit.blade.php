@extends('adminlte::page')

@section('title','Edit Project')

@section('content_header')
<h1>Edit Project</h1>
@stop

@section('content')

<form method="POST" action="{{ route('projects.update',$project->id) }}">

@csrf
@method('PUT')

<div class="form-group">
<label>Title</label>
<input type="text" name="title" value="{{ $project->title }}" class="form-control">
</div>

<div class="form-group">
<label>Description</label>
<textarea name="description" class="form-control">{{ $project->description }}</textarea>
</div>

<div class="form-group">
<label>Project manager</label>

<select name="id" class="form-control">

<option value="{{$project->user->id}}">
{{$project->user->name}}
</option>

<option value="completed" {{ $project->status == 'completed' ? 'selected' : '' }}>
Completed
</option>

</select>

</div>

<div class="form-group">
<label>Status</label>

<select name="status" class="form-control">

<option value="active" {{ $project->status == 'active' ? 'selected' : '' }}>
Active
</option>

</select>

</div>

<button class="btn btn-success">
Update Project
</button>

</form>

@stop