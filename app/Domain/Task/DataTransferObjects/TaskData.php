<?php

namespace Domain\Task\DataTransferObjects;

use Spatie\LaravelData\Data;

class TaskData extends Data
{
    public function __construct(
        public string $task,
        public string $category
    ) {
    }
}
