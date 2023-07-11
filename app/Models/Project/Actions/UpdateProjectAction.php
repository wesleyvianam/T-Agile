<?php

namespace App\Models\Project\Actions;

use App\Models\Project\DTO\ProjectUpdateData;
use App\Models\Project\Models\Project;

final class UpdateProjectAction
{
    public function __invoke(Project $project, ProjectUpdateData $data): Project
    {
        $project->update([
            'title' => $data->title
        ]);

        return $project;
    }
}
