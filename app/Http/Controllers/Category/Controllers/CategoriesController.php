<?php

namespace App\Http\Controllers\Category\Controllers;

use App\Http\Controllers\Category\Requests\RequestCategory;
use App\Http\Controllers\Controller;
use App\Models\Category\Actions\CreateCategoryAction;
use App\Models\Category\DTO\CategoryCreateData;
use App\Models\Category\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(Request $request)
    {
        $projectId = $request->query('id');

        $categories = Category::where('project_id', $projectId)->get();

        return view('category.index', compact('categories', 'projectId'));
    }

    public function create(Request $request)
    {
        $projectId = $request->query('id');

        return view('category.form', compact('projectId'));
    }

    public function store(RequestCategory $request, CreateCategoryAction $action)
    {
        $title = $request->get('title');
        $projectId = $request->get('projectId');

        $data = new CategoryCreateData($title, $projectId);

        $action($data);

        return to_route('category.index')->with('id', $projectId);
    }

    public function edit(Category $category, Request $request)
    {
        $projectId = $request->query('id');

        return view('category.form', compact('category','projectId'));
    }

    public function update()
    {
    }

    public function destroy()
    {
    }
}
