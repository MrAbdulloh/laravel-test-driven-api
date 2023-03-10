<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\TodoList;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TaskController extends Controller
{
    public function index(TodoList $todo_list)
    {
        $tasks = $todo_list->tasks;
//        $tasks = Task::query()->where(['todo_list_id'=>$todo_list->id])->get();
        return response($tasks);
    }

    public function store(Request $request, TodoList $todo_list)
    {
//         $request['todo_list_id'] = $todo_list->id;
//
//         $task = Task::query()->create($request->all());
        $task = $todo_list->tasks()->create($request->all());
        return $task;
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
