<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{

    public function getTodo(){
        $todo = Todo::all();
        $response = [
            'todolist' => $todo
        ];

        if ($response == null) {
            return response()->json(['msg' => 'No Data Fetched/Found!']);
        }
        return response()->json($response);
    }

    public function postTodo(Request $request)
    {
        $todo = new Todo();
        $todo->todolist = $request->input('todolist');
        $todo->save();
        return response()->json(['todolist' => $todo]);
    }

    public function updateTodo(Request $request, $id)
    {
        $todo = Todo::find($id);
        if (!$todo) {
            return response()->json(['msg' => 'No Data Fetched/Found!']);
        }
        $todo->todolist = $request->input('todolist');
        $todo->status = $request->input('status');
        $todo->save();
        return response()->json(['todolist' => $todo]);
    }

    public function destroyTodo($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return response()->json(['msg' => 'Todo List Successfully Deletef!']);
    }

    public function updateStatus(Request $request, $id)
    {
        $todo = Todo::find($id);
        $todo->status = $request->input('status');
        $todo->save();

        return response()->json(['status' => $todo]);
    }
}
