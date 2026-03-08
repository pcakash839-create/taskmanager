@extends('adminlte::page')

@section('title','Tasks')

@section('content_header')
<h1>Tasks</h1>
<a href="{{ route('tasks.create') }}" class="btn btn-primary">Create Task</a>
@stop

@section('content')

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Project</th>
            <th>Status</th>
            <th width="200">Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($tasks as $task)
        <tr>
            <td>{{ $task->id }}</td>
            <td>{{ $task->title }}</td>
            <td>{{ $task->project->title ?? '' }}</td>
            <td>{{ $task->status }}</td>
            <td>

                <a href="{{ route('tasks.edit',$task->id) }}" class="btn btn-sm btn-info">
                    Edit
                </a>

                <form action="{{ route('tasks.destroy',$task->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-sm btn-danger">
                        Delete
                    </button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop