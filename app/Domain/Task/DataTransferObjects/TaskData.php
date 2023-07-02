<?php

namespace Domain\Task\DataTransferObjects;

use App\Web\Task\Requests\TaskRequest;
use Spatie\LaravelData\Data;

class TaskData extends Data
{
    public function __construct(
        public string $task,
        public string $category
    ) {
    }
}
