<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use App\Task;
use App\TaskType;
use App\TaskEntry;

class AppTasksController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('splash');
    }

    public function task($id) {
        $task = Task::find($id);
        $task_types = TaskType::all();
        $entry = false;
        $task_entry = TaskEntry::where('task_id', $task->id)->where('user_id', Auth::user()->id)->first();
        if(TaskEntry::where('task_id', $task->id)->where('user_id', Auth::user()->id)->count()) {
            $entry = true;
        }
        return view('app.tasks.task', compact('task', 'task_types', 'entry', 'task_entry'));
    }

    public function taskSubmit($id, Request $request) {
        $task_answer = $request->file('task_answer');
        $path = public_path('/images/taskentries');
        $image_name = 'task'.$id.'_'.Auth::user()->id.'.'.$task_answer->extension();
        $task_answer->move($path, 'task'.$id.'_'.Auth::user()->id.'.'.$task_answer->extension());

        TaskEntry::create([
            'date_submit' => Carbon::now(),
            'status' => 'pending',
            'answer' => $image_name,
            'user_id' => Auth::user()->id,
            'task_id' => $id
        ]);


        return redirect(url('home'));
    }
}
