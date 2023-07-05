<?php

namespace App\Web\Task\Controllers;

use App\Core\Http\Controllers\Controller;
use App\Web\Task\Requests\TaskRequest;
use App\Web\Task\Requests\UpdateRequest;
use Domain\Project\Models\Project;
use Domain\Task\Action\CreateTaskAction;
use Domain\Task\Action\UpdateTaskAction;
use Domain\Task\DataTransferObjects\TaskData;
use Domain\Task\DataTransferObjects\TaskUpdateData;
use Domain\Task\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = app(Task::class)->get();

        return view('Task.index', compact('tasks'));
    }

    public function create(int $project)
    {
        return view('Task.create')->with('project', $project);
    }

    public function store(TaskRequest $request, CreateTaskAction $action)
    {
        $task = $request->get('task');
        $category = $request->get('category');
        $projectId = $request->get('projectId');

        $data = new TaskData($task, $category, $projectId);
        $response = $action($data);

        return back()->with(['success' => 'Tarefa criada com sucesso']);
    }

    public function update(Task $task, UpdateRequest $request, UpdateTaskAction $action)
    {
        $dataUpdate = new TaskUpdateData($request->get('status'));
        $response = $action($task, $dataUpdate);

        return to_route('task.index');
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return to_route('task.index');
    }

}
