<?php

namespace App\Models\Category\DTO;

use Spatie\LaravelData\Data;

class CategoryCreateData extends Data
{
    public function __construct(
        public readonly string $title,
        public readonly int $projectId
    ){
    }
}
