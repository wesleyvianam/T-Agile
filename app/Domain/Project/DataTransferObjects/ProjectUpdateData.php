<?php

namespace Domain\Project\DataTransferObjects;

class ProjectUpdateData
{
    public function __construct(
        public readonly string $title,
        public readonly string $type,
        public readonly string $description,
    ){
    }
}
