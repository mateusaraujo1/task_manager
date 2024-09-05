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

        return redirect('/dashboard')->with('msg', 'Tarefa criada com sucesso');
    }

    public function dashboard() {
        $user = auth()->user();

        $tasks = $user->tasks;

        return view('tasks.dashboard', ['tasks' => $tasks]);
    }

    public function destroy($id) {
        $user = auth()->user();
        $task = Task::findOrFail($id);

        if ($user->id != $task->user_id) {
            return redirect('/');
        }

        Task::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Tarefa "' . $task->title . '" excluída com sucesso');
    }
}
