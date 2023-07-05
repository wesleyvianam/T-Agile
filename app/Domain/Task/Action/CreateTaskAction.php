<?php

namespace Domain\Task\Action;

use Domain\Task\DataTransferObjects\TaskData;
use Domain\Task\Models\Task;

final class CreateTaskAction
{
    public function __invoke(TaskData $taskData): Task
    {
        return Task::create([
            'task' => $taskData->task,
            'category' => $taskData->category,
            'project_id' => $taskData->projectId,
            'status' => $taskData->status,
        ]);
    }
}
