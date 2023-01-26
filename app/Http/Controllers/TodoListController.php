<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;

use Symfony\Component\HttpFoundation\Response;

class TodoListController extends Controller
{
    public function index()
    {
        $todo_list = TodoList::all();

        return response($todo_list);

    }

    public function show(TodoList $todo_list)
    {
    return response($todo_list);
//        dd($res);
    }

    public function store(Request $request)
    {
//         validate
        $request->validate(['name' =>[ 'required']]);

        $lists = TodoList::query()->create($request->all());

        return $lists;
    }

    public function destroy(TodoList $todo_list)
    {
        $todo_list->delete();

        return response(' ', Response::HTTP_NO_CONTENT);
    }

    public function update(Request $request, TodoList $todo_list)
    {
        $request->validate(['name' => 'required']);

$res=        $todo_list->update($request->all());
//        dd($res);
        return response($todo_list, Response::HTTP_UNPROCESSABLE_ENTITY);

    }

}
