<?php

namespace App\Web\CategoriesController\Controllers;

use App\Core\Http\Controllers\Controller;
use App\Web\CategoriesController\Requests\CategoriesRequest;
use Domain\Category\Action\ActionCreateCategory;
use Domain\Category\Action\ActionUpdateCategory;
use Domain\Category\DataTransferObjects\CategoryCreateData;
use Domain\Category\Models\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('Category.index')->with('categories', $categories);
    }

    public function create()
    {
        return view('Category.create');
    }

    public function edit(Category $category)
    {
        return view('Category.edit')->with('category', $category);
    }

    public function store(CategoriesRequest $request, ActionCreateCategory $actionCreate)
    {
        $category = $request->get('title');
        $description = $request->get('description') ?: "";

        $dataCategory = new CategoryCreateData($category, $description);

        $actionCreate($dataCategory);

        return to_route('category.index');
    }

    public function update(Category $category, CategoriesRequest $request, ActionUpdateCategory $actionUpdate)
    {
        $title = $request->get('title');
        $description = $request->get('description');

        $dataCategory = new CategoryCreateData($title, $description);

        $actionUpdate($category, $dataCategory);

        return to_route('category.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return to_route('category.index');
    }
}
