<?php

namespace Domain\Task\DataTransferObjects;

use Spatie\LaravelData\Data;

class TaskUpdateData extends Data
{
    public function __construct(
        public string $status
    ){
    }
}
