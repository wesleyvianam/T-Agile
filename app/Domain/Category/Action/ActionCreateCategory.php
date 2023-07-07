<?php

namespace Domain\Category\Action;

use Domain\Category\DataTransferObjects\CategoryCreateData;
use Domain\Category\Models\Category;

class ActionCreateCategory
{
    public function __invoke(CategoryCreateData $data): Category
    {
        return Category::create([
            'title' => $data->title,
            'description' => $data->description
        ]);
    }
}



