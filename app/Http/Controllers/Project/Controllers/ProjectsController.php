<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Project\Resquests\RequestProjects;
use App\Models\Project\Actions\CreateProjectsAction;
use App\Models\Project\DTO\ProjectCreateData;
use App\Models\Project\Models\Project;
use Illuminate\Support\Facades\Auth;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('project.index')->with('projects', $projects);
    }

    public function create()
    {
        return view('project.create');
    }

    public function store(RequestProjects $request, CreateProjectsAction $action)
    {
        $title = $request->get('title');
        $userId = $request->get('userId');

        $data = new ProjectCreateData($title, $userId);

        $action($data);

        return to_route('project.index');
    }

    public function update()
    {
        return to_route('project.index');
    }

    public function destroy()
    {
        return to_route('project.index');
    }
}
