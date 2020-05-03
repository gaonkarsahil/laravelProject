<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projectpartfour;

class ProjectController extends Controller
{
    public function index()
    {
      $projects = Projectpartfour::where('is_completed', false)
                          ->orderBy('created_at', 'desc')
                          ->withCount(['tasks' => function ($query) {
                            $query->where('is_completed', false);
                          }])
                          ->get();

      return $projects->toJson();
    }

    public function store(Request $request)
    {
      $validatedData = $request->validate([
        'name' => 'required',
        'description' => 'required',
      ]);

      $project = Projectpartfour::create([
        'name' => $validatedData['name'],
        'description' => $validatedData['description'],
      ]);

      return response()->json('Project created!');
    }

    public function show($id)
    {
      $project = Projectpartfour::with(['tasks' => function ($query) {
        $query->where('is_completed', false);
      }])->find($id);

      return $project->toJson();
    }

    public function markAsCompleted(Projectpartfour $project)
    {
      $project->is_completed = true;
      $project->update();

      return response()->json('Project updated!');
    }
}
