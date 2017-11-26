<?php

namespace App\Http\Controllers;

use App\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TasksController extends Controller
{
	public function index()
	{
		$todo = Task::all();

        $currentDate = Carbon::now()->toFormattedDateString();

        return view('todo.show', [
            'todo' => $todo,
            'currentDate' => $currentDate,
        ]);
	}

    public function store(Request $request)
    {
        $this->validate($request, [
            'task' => 'required',
            'hour' => 'required|numeric',
            'minute' => 'required|numeric',
            'period' => 'required',
        ]);

        $todo = Task::create([
            'task' => request('task'),
            'hour' => request('hour'),
            'minute' => request('minute'),
            'period' => request('period'),
        ]);

        return redirect('/')
                ->with('flash', 'Task was created successfully');
    }

    public function destroy(Task $taskId)
    {
        $taskId->delete();

        if (request()->expectsJson()) {
            return response(['status' => 'Todo was Deleted']);
        }

        return back();
    }
}
