<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Fungsi Create (POST) harus berada di dalam class ini
    public function store(Request $request) {
        $request->validate(['task_name' => 'required']);
        Task::create(['task_name' => $request->task_name]);
        return redirect()->back();
    }
}