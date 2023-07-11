<?php

namespace App\Models\Project\DTO;

use Spatie\LaravelData\Data;

class ProjectUpdateData extends Data
{
    public function __construct(
        public readonly string $title,
    ){
    }
}
