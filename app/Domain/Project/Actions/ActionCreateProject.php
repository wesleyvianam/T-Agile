<?php

namespace Domain\Project\Actions;

use Domain\Project\DataTransferObjects\ProjectCreateData;
use Domain\Project\Models\Project;

final class ActionCreateProject
{
    public function __invoke(ProjectCreateData $data): Project
    {
        return Project::create([
            'title' => $data->title,
            'user_id' => $data->userId,
        ]);
    }
}
