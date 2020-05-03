<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Taskpartfour;

class TaskController extends Controller
{
    public function store(Request $request)
      {
        $validatedData = $request->validate(['title' => 'required']);

        $task = Taskpartfour::create([
          'title' => $validatedData['title'],
          'project_id' => $request->project_id,
        ]);

        return $task->toJson();
      }

      public function markAsCompleted(Taskpartfour $task)
      {
        $task->is_completed = true;
        $task->update();

        return response()->json('Task updated!');
      }
}
