<?php

namespace Domain\Project\Actions;

use Domain\Project\DataTransferObjects\ProjectCreateData;
use Domain\Project\Models\Project;

class CreateActionProject
{
    public function __invoke(ProjectCreateData $data): Project
    {
        return Project::create([
            'title' => $data->title,
            'type' => $data->type,
            'description' => $data->description
        ]);
    }
}
