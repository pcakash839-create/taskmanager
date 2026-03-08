<?php

namespace App\Http\Controllers\API;

use App\Models\Task;
use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Project $project)
    {
        return $project->tasks;
    }

    public function store(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|max:255',
            'priority' => 'required|in:low,medium,high',
            'status' => 'required|in:pending,in_progress,completed'
        ]);

        return $project->tasks()->create($request->all());
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->update($request->all());

        return $task;
    }

    public function destroy($id)
    {
        Task::findOrFail($id)->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
