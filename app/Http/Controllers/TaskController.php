<?php

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return response()->json(Task::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:tasks|max:255',
            'description' => 'required|min:10',
            'status' => 'in:pending,in-progress,complete',
        ]);

        $task = Task::create($request->all());

        return response()->json($task, 201);
    }

    public function show(Task $task)
    {
        return response()->json($task);
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'unique:tasks|max:255',
            'description' => 'min:10',
            'status' => 'in:pending,in-progress,complete',
        ]);

        $task->update($request->all());

        return response()->json($task);
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json(null, 204);
    }
}

