<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Mail;
use App\Mail\TaskCompleteMail;
use App\Models\task;

class taskcontroller extends Controller
{
    public function task(): View{
        $tasks = task::where('is_archived', 0)->get();

        return view('task.task', ['tasks' => $tasks]);
    }

    public function create()
    {
        return view('task.create');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'tn' => ['required', 'string', 'max:500'],
        ]);

        task::create([
            'tn' => $validated['tn'],
            'is_archived' => 0,
        ]);

        return redirect('/task')->with('success', 'Task created successfully!');
    }

    public function edit ($id){
        $task = task::findOrFail($id);
        return view('task.edit', ['task' => $task]);
    }
    public function update(Request $request, $id){
        $validated = $request->validate([
            'tn' => ['required', 'string', 'max:500'],
        ]);

        $task = task::findOrFail($id);
        $task->update([
            'tn' => $validated['tn'],
            'is_archived' => 0,
        ]);

        return redirect('/task')->with('success', 'Task updated successfully!');
    }

    #removes a task from the task list
    public function done(Request $request, $id){
        $task = task::findOrFail($id);

        if($task->is_archived == 0){
            $task->update(['is_archived' => 1]);
            Mail::to('you@example.com')->send(new TaskCompleteMail($task));
        }

        return redirect('/task')->with('success', 'Congratulations! You completed a task!');
    }

}