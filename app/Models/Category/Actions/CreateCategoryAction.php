<?php

namespace App\Models\Category\Actions;

use App\Models\Category\DTO\CategoryCreateData;
use App\Models\Category\Models\Category;

final class CreateCategoryAction
{
    public function __invoke(CategoryCreateData $data): bool
    {
        return Category::create([
            'title' => $data->title,
            'project_id' => $data->title
        ]);
    }
}
