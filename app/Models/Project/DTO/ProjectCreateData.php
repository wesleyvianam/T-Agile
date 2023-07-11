<?php

namespace App\Models\Project\DTO;

use Spatie\LaravelData\Data;

class ProjectCreateData extends Data
{
    public function __construct(
        public readonly string $title,
        public readonly int $userId,
    ) {
    }
}
