<?php

namespace App\Models\Epic\Actions;

use App\Models\Epic\DTO\EpicCreateData;
use App\Models\Epic\Models\Epic;

final class CreateEpicAction
{
    public function __invoke(EpicCreateData $data)
    {
        return Epic::create([
            'title' => $data->title,
            'project_id' => $data->projectId,
        ]);
    }
}
