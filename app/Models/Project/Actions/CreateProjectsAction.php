<?php

namespace App\Models\Project\Actions;

use App\Models\Project\DTO\ProjectCreateData;
use App\Models\Project\Models\Project;

final class CreateProjectsAction
{
    public function __invoke(ProjectCreateData $project)
    {
        return Project::create([
            'title' => $project->title,
            'user_id' => $project->userId
        ]);
    }
}
