@extends('adminlte::page')

@section('title','Projects')

@section('content_header')
<h1>Projects</h1>
@stop

@section('content')

<a href="{{ route('projects.create') }}" class="btn btn-primary mb-3">Create Project</a>

<table class="table table-bordered">
<thead>
<tr>
<th>ID</th>
<th>Title</th>
<th>Description</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>

<tbody>
@foreach($projects as $project)

<tr>
<td>{{ $project->id }}</td>
<td>{{ $project->title }}</td>
<td>{{ $project->description }}</td>
<td>{{ $project->status }}</td>

<td>

<a href="{{ route('projects.edit',$project->id) }}" class="btn btn-warning btn-sm">
Edit
</a>

<form action="{{ route('projects.destroy',$project->id) }}" method="POST" style="display:inline">
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