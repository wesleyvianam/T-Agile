<?php

namespace Domain\Task\DataTransferObjects;

use Domain\Project\Models\Project;
use Spatie\LaravelData\Data;

class TaskData extends Data
{
    public function __construct(
        public string $task,
        public string $category,
        public int $projectId,
        public string $status = 'incomplete',
    ) {
    }
}
