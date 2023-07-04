<?php

namespace App\Web\Project\Controllers;

use App\Core\Http\Controllers\Controller;
use App\Web\Project\Requests\ProjectsRequest;
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

    public function store(ProjectsRequest $request)
    {

    }

    public function update()
    {
    }

    public function destroy()
    {
    }
}
