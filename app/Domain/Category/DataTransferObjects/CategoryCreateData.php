<?php

namespace Domain\Category\DataTransferObjects;

use Spatie\LaravelData\Data;

class CategoryCreateData extends Data
{
    public function __construct(
        public readonly string $title,
        public readonly string $description = "",
    ) {
    }
}
