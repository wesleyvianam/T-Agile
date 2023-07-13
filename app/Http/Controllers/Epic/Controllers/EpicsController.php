<?php

namespace App\Http\Controllers\Epic\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Epic\Requests\RequestEpic;
use App\Models\Epic\Actions\CreateEpicAction;
use App\Models\Epic\DTO\EpicCreateData;
use App\Models\Epic\Models\Epic;
use App\Models\Project\Models\Project;
use Illuminate\Http\Request;

class EpicsController extends Controller
{
    public function index(Request $request)
    {
        $projectId = $request->query('id');
        if (empty($projectId)) {
            $projectId = $request->session()->get('id');
        }

        $epics = Epic::where('project_id', $projectId)->get();

        return view('epic.index', compact('epics', 'projectId'));
    }

    public function create(Request $request)
    {
        $projectId = $request->query('id');

        return view('epic.create', compact('projectId'));
    }

    public function store(RequestEpic $request, CreateEpicAction $action)
    {
        $title = $request->get('title');
        $projectId = $request->get('projectId');

        $data = new EpicCreateData($title, $projectId);

        $action($data);

        $request->session()->flash('id', $projectId);

        return to_route('epic.index')->with('id', $projectId);
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
