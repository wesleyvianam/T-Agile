<?php

namespace App\Web\Project\Controllers;

use App\Core\Http\Controllers\Controller;
use App\Web\Project\Requests\ProjectsRequest;
use Domain\Project\Actions\CreateActionProject;
use Domain\Project\DataTransferObjects\ProjectCreateData;
use Domain\Project\Models\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('Project.index', compact('projects'));
    }

    public function create()
    {
        return view('Project.create');
    }

    public function store(ProjectsRequest $request, CreateActionProject $crateActionProject)
    {
        $title = $request->get('title');
        $type = $request->get('type');
        $description = $request->get('description') ?: "";

        $data = new ProjectCreateData($title, $type, $description);
        $response = $crateActionProject($data);

        if ($response) {
            return to_route('project.index');
        }
    }

    public function show(Project $project)
    {
        return view('Project.show')->with('project', $project);
    }

    public function update(Project $project)
    {
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return to_route('project.index');
    }
}
