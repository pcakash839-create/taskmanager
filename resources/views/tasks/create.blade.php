@extends('adminlte::page')

@section('title','Create Task')

@section('content_header')
<h1>Create Task</h1>
@stop

@section('content')

<form method="POST" action="{{ route('tasks.store') }}">
@csrf

<div class="form-group">
<label>Project</label>
<select name="project_id" class="form-control">
@foreach($projects as $project)
<option value="{{ $project->id }}">
{{ $project->title }}
</option>
@endforeach
</select>
</div>

<div class="form-group">
<label>Title</label>
<input type="text" name="title" class="form-control">
</div>

<div class="form-group">
<label>Description</label>
<textarea name="description" class="form-control"></textarea>
</div>

<div class="form-group">
<label>Status</label>
<select name="status" class="form-control">
<option value="pending">Pending</option>
<option value="in_progress">In Progress</option>
<option value="completed">Completed</option>
</select>
</div>

<button class="btn btn-success">
Create Task
</button>

</form>

@stop