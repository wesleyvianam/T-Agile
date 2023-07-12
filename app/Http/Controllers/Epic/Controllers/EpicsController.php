<?php

namespace App\Http\Controllers\Epic\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Epic\Models\Epic;
use App\Models\Project\Models\Project;
use Illuminate\Http\Request;

class EpicsController extends Controller
{
    public function index(Request $request)
    {
        $projectId = $request->query('id');

        $epics = Epic::where('project_id', $projectId)->get();

        return view('epic.index', compact('epics', 'projectId'));
    }

    public function create(Request $request)
    {
        $projectId = $request->query('id');

        return view('epic.create', compact('projectId'));
    }

    public function store()
    {
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy()
    {
    }
}
