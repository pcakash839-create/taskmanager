@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')

<div style="font-size:20px">
<ol>
<li>
    <div style="margin-bottom:10px;">
        <a href="/projects">Create Project</a>
    </div>
</li>
<li>
    <div style="margin-bottom:10px;">
        <a href="/tasks">Create Task</a>
    </div>
</li>
@can('admin')
    <li>
    <div style="margin-bottom:10px;">
        <a href="/users">Add new User</a>
    </div>
</li>
@endcan

<li>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
    <div>
        <a href="#" onclick="logout()">Logout</a>
    </div>
    </li>
</ol>

</div>

<script>

function logout() {

    fetch('/api/logout', {
        method: 'POST',
        headers: {
            'Authorization': 'Bearer {{ session("api_token") }}',
            'Accept': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        window.location.href = "/login";
    });

}

</script>

@stop