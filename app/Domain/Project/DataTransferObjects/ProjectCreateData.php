<?php

namespace Domain\Project\DataTransferObjects;

use Spatie\LaravelData\Data;

class ProjectCreateData extends Data
{
    public function __construct(
        public readonly string $title,
        public readonly int $userId,
    ) {
    }
}
