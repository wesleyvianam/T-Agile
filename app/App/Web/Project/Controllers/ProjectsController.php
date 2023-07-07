<?php

namespace App\Web\Project\Controllers;

use App\Core\Http\Controllers\Controller;
use App\Web\Project\Requests\ProjectsRequest;
use Domain\Category\Models\Category;
use Domain\Project\Actions\CreateActionProject;
use Domain\Project\Actions\UpdateActionProject;
use Domain\Project\DataTransferObjects\ProjectCreateData;
use Domain\Project\DataTransferObjects\ProjectUpdateData;
use Domain\Project\Models\Project;
use Illuminate\Http\Client\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('Project.index', compact('projects'));
    }

    public function edit(Project $project)
    {
        return view('Project.edit')->with('project', $project);
    }

    public function store(ProjectsRequest $request, CreateActionProject $crateActionProject)
    {
        $title = $request->get('title');
        $type = $request->get('type');
        $description = $request->get('description') ?: "";

        $data = new ProjectCreateData($title, $type, $description);
        $response = $crateActionProject($data);

        return to_route('project.index');
    }

    public function show(Project $project)
    {
        $tasks = $project->tasks()->get();

        $categories = Category::all();

        return view('Project.show', compact('project', 'tasks', 'categories'));
    }

    public function update(Project $project, ProjectsRequest $request, UpdateActionProject $updateAction)
    {
        $title = $request->get('title');
        $type = $request->get('type');
        $description = $request->get('description') ?: "";

        $dataUpdate = new ProjectUpdateData($title, $type, $description);
        $res = $updateAction($project, $dataUpdate);

        return to_route('project.show', $project->id);
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return to_route('project.index');
    }
}
