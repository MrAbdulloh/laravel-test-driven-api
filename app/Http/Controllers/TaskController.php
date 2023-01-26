<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\TodoList;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return response($tasks);
    }

    public function store(Request $request, TodoList $todo_List)
    {
        $request['todo_list_id'] = $todo_List->id;
        return  Task::create($request->all());

    }

    public function destroy(Task $task)
    {
        $task->delete();
        return response('', Response::HTTP_NO_CONTENT);
    }

    public function update(Task $task, Request $request)
    {
        $task->update($request->all());

        return response($task);
    }
}
