<?php

namespace App\Web\Project\Controllers;

use App\Core\Http\Controllers\Controller;
use Domain\Project\Models\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('project.index')->with('projects', $projects);
    }

    public function store()
    {

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
