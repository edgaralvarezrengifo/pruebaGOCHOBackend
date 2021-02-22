<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\tasks;

class tasksController extends Controller
{
    public function index()
    {
        return tasks::all();
    }

    public function show(tasks $task)
    {
        return $task;
    }

    public function store(Request $request)
    {
        $task = tasks::create($request->all());

        return response()->json($task, 201);
    }

    public function update(Request $request, tasks $task)
    {
        $task->update($request->all());

        return response()->json($task, 200);
    }

    public function delete(tasks $article)
    {
        $task->delete();

        return response()->json(null, 204);
    }
}
