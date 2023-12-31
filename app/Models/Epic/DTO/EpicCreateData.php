<?php

namespace App\Models\Epic\DTO;

use Spatie\LaravelData\Data;

class EpicCreateData extends Data
{
    public function __construct(
        public readonly string $title,
        public readonly int $projectId,
    )
    {
    }

}
