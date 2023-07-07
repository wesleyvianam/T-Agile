<?php

namespace Domain\Category\Action;

use Domain\Category\DataTransferObjects\CategoryCreateData;
use Domain\Category\Models\Category;

class ActionUpdateCategory
{
    public function __invoke(Category $category, CategoryCreateData $data): bool
    {
        return $category->update([
            'title' => $data->title,
            'description' => $data->description
        ]);
    }
}
