<?php

namespace App\Http\Controllers\Project\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Project\Resquests\RequestProjects;
use App\Http\Controllers\Project\Resquests\RequestUpdateProject;
use App\Models\Project\Actions\CreateProjectsAction;
use App\Models\Project\Actions\UpdateProjectAction;
use App\Models\Project\DTO\ProjectCreateData;
use App\Models\Project\DTO\ProjectUpdateData;
use App\Models\Project\Models\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $userId = auth()->user()->getAuthIdentifier();

        $projects = Project::where('user_id', $userId)->get();

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

    public function edit(Project $project)
    {
        return view('project.edit')->with('project', $project);
    }

    public function update(Project $project, RequestUpdateProject $request, UpdateProjectAction $action)
    {
        $title = $request->get('title');
        $data = new ProjectUpdateData($title);
        $res = $action($project, $data);
        return to_route('project.index')->with(['success' => "Project $res->title updated successfully"]);
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return to_route('project.index')->with(['success' => "Project $project->title destroy with successfully!"]);
    }
}
