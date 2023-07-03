<?php

namespace Domain\Task\Action;

use Domain\Task\DataTransferObjects\TaskData;
use Domain\Task\DataTransferObjects\TaskUpdateData;
use Domain\Task\Models\Task;

final class UpdateTaskAction
{
    public function __invoke(Task $task, TaskUpdateData $data): bool
    {
        $update = $task->update(['status' => $data->status]);

        return $update;
    }
}
