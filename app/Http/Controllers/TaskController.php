<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Fitur Read (Milik Temanmu)
    public function index() {
        $tasks = Task::latest()->get();
        return view('tasks', compact('tasks'));
    }

    // Fitur Create (Milikmu)
    public function store(Request $request) {
        $request->validate(['task_name' => 'required']);
        Task::create(['task_name' => $request->task_name]);
        return redirect()->back();
    }

    // Fitur Delete (Milik Temanmu)
    public function destroy(Task $task) {
        $task->delete();
        return redirect()->back();
    }
}