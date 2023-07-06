@extends('Components.app')

@section('title'){{ $project->title }}@endsection

@section('content')

    @include('Components._sidebar', ['active' => 'project'])

    <div style="width: 600px">
        <div class="card mb-3 border rounded shadow-sm">
            <div class="px-3 py-2 border-bottom d-flex justify-content-between rounded-top align-items-center bg-danger">
                <h1 class="h6 text-white">{{ $project->title }}</h1>

                <div class="d-flex">
                    <a href="{{ route('project.index') }}" class="btn btn-sm border text-white me-2 d-flex align-items-center">
                        <i class="bi bi-chevron-left"></i>
                    </a>
                    <div class="dropdown border rounded">
                        <button class="btn btn-sm text-white btn-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-gear"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li>
                                <a href="{{ route('project.edit', $project->id) }}" class="dropdown-item text-decoration-none btn btn-sm btn-white" title="Edit">
                                    <i class="bi bi-pencil-square me-3"></i>
                                    Edit
                                </a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('project.destroy', $project->id) }}" class="dropdown-item text-decoration-none btn btn-sm btn-white" title="Delete">
                                    @csrf
                                    @Method('DELETE')

                                    <button type="submit" class="btn btn-sm btn-white text-white p-0" title="Delete">
                                        <i class="bi bi-trash-fill me-3"></i>
                                        Delete
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="p-3">
                <form method="POST" action="{{ url('/task') }}">
                    @csrf
                    <div class="d-flex">
                        <input class="form-control" type="hidden" name="projectId" id="projectId" value="{{ $project->id }}">

                        <div class="pe-3">
                            <input style="width: 360px" class="form-control form-control-sm" type="text" name="task" id="task" placeholder="Title">
                        </div>

                        <div class="pe-3">
                            <select class="form-select form-select-sm" name="category" id="category">
                                <option value="Estudo">Estudo</option>
                                <option value="Trabalho">Trabalho</option>
                                <option value="Casa">Casa</option>
                            </select>
                        </div>

                        <button class="btn btn-sm btn-danger px-3">Save</button>
                    </div>
                </form>
            </div>
        </div>

        {{--INCOMPLETE--}}
        <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <strong style="width: 275px;">Title</strong>
                <strong>Category</strong>
                <strong>Action</strong>
            </li>
            @foreach($tasks as $task)
                @if($task->status == "none")
                    <li class="list-group-item d-flex justify-content-between align-items-center px-3">
                        <span style="width: 300px">{{ $task->task }}</span>
                        <div>
                            <span class="badge text-bg-success">{{ $task->category }}</span>
                        </div>
                        <div>
                            <form method="POST" action="{{ route('task.update', $task->id) }}" class="text-decoration-none btn btn-sm btn-white border" title="Complete">
                                @csrf
                                @Method('PUT')
                                <input type="hidden" name="status" value="complete" />

                                <button type="submit" class="btn btn-sm btn-white p-0" title="Complete">
                                    <i class="bi bi-check text-muted"></i>
                                </button>
                            </form>
                            <form method="POST" action="{{ route('task.destroy', $task->id) }}" class="text-decoration-none btn btn-sm btn-white border" title="Delete">
                                @csrf
                                @Method('DELETE')
                                <input type="hidden" name="status" value="incomplete" />

                                <button type="submit" class="btn btn-sm btn-white p-0" title="Delete">
                                    <i class="bi bi-trash-fill text-secondary"></i>
                                </button>
                            </form>
                        </div>
                    </li>
                @endif
            @endforeach
        </ul>

        {{--COMPLETE--}}
        <ul class="list-group">
            @foreach($tasks as $task)
                @if($task->status != "none")
                    <li class="list-group-item d-flex justify-content-between align-items-center px-3 text-black-50">
                        <span style="width: 300px; text-decoration: {{ $task->status }}">{{ $task->task }}</span>
                        <div>
                            <span class="badge text-bg-secondary" style="text-decoration: {{ $task->status }}">{{ $task->category }}
                        </div>
                        <div>
                            <form method="POST" action="{{ route('task.update', $task->id) }}" class="text-decoration-none btn btn-sm btn-white border" title="Rollback">
                                @csrf
                                @Method('PUT')
                                <input type="hidden" name="status" value="incomplete" />

                                <button type="submit" class="btn btn-sm btn-white p-0" title="Rollback">
                                    <i class="bi bi-arrow-counterclockwise text-muted"></i>
                                </button>
                            </form>

                            <form method="POST" action="{{ route('task.destroy', $task->id) }}" class="text-decoration-none btn btn-sm btn-white border" title="Delete">
                                @csrf
                                @Method('DELETE')
                                <input type="hidden" name="status" value="incomplete" />

                                <button type="submit" class="btn btn-sm btn-white p-0" title="Delete">
                                    <i class="bi bi-trash-fill text-secondary"></i>
                                </button>
                            </form>
                        </div>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
@endsection
