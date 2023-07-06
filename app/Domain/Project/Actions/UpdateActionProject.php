<?php

namespace Domain\Project\Actions;

use Domain\Project\DataTransferObjects\ProjectUpdateData;
use Domain\Project\Models\Project;

class UpdateActionProject
{
    public function __invoke(Project $project, ProjectUpdateData $data): bool
    {
        $update = $project->update([
            'title' => $data->title,
            'type' => $data->type,
            'description' => $data->description
        ]);

        return $update;
    }
}
