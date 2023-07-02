<?php

namespace App\Web\Task\Controllers;

use App\Core\Http\Controllers\Controller;
use App\Web\Task\Requests\TaskRequest;
use Domain\Task\Action\CreateTaskAction;
use Domain\Task\DataTransferObjects\TaskData;
use Domain\Task\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = app(Task::class)->get();

        return view('welcome', compact('tasks'));
    }

    public function store(TaskRequest $request, CreateTaskAction $action)
    {
        $task = $request->get('task');
        $category = $request->get('category');

        $data = new TaskData($task, $category);
        $response = $action($data);

        return back()->with(['success' => 'Tarefa criada com sucesso']);
    }

}
