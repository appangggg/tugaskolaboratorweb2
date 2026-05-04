<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
 feature/read-delete-task
    public function index() {
         $tasks = Task::latest()->get();
         return view('tasks', compact('tasks'));
     }

     public function destroy(Task $task) {
         $task->delete();
         return redirect()->back();
     }
}

    // Fungsi Create (POST) harus berada di dalam class ini
    public function store(Request $request) {
        $request->validate(['task_name' => 'required']);
        Task::create(['task_name' => $request->task_name]);
        return redirect()->back();
    }
}
main
