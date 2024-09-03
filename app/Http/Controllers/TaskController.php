<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create() {
        return view('tasks.create');
    }

    public function store(request $request) {
        $task = new Task;

        $task->title = $request->title;
        $task->date = $request->date;
        $task->description = $request->description;

        $user = auth()->user();

        $task->user_id = $user->id;

        $task->save();

        return redirect('/')->with('msg', 'Tarefa criada com sucesso');
    }
}
