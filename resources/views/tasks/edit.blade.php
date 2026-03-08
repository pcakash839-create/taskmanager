@extends('adminlte::page')

@section('title','Edit Task')

@section('content_header')
<h1>Edit Task</h1>
@stop

@section('content')

<form method="POST" action="{{ route('tasks.update',$task->id) }}">
@csrf
@method('PUT')

<div class="form-group">
<label>Project</label>
<select name="project_id" class="form-control">

@foreach($projects as $project)
<option value="{{ $project->id }}"
{{ $task->project_id == $project->id ? 'selected' : '' }}>
{{ $project->title }}
</option>
@endforeach

</select>
</div>

<div class="form-group">
<label>Title</label>
<input type="text" name="title" class="form-control" value="{{ $task->title }}">
</div>

<div class="form-group">
<label>Description</label>
<textarea name="description" class="form-control">{{ $task->description }}</textarea>
</div>

<div class="form-group">
<label>Status</label>
<select name="status" class="form-control">
<option value="pending" {{ $task->status == 'pending' ? 'selected' : '' }}>Pending</option>
<option value="in_progress" {{ $task->status == 'in_progress' ? 'selected' : '' }}>In Progress</option>
<option value="completed" {{ $task->status == 'completed' ? 'selected' : '' }}>Completed</option>
</select>
</div>

<button class="btn btn-primary">
Update Task
</button>

</form>

@stop