@extends('Components.app')

@section('content')
    <div style="max-width: 500px">
        @if ($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $error }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endforeach
        @endif

        <form method="POST" action="{{ url('/task') }}">
            @csrf
            <div class="d-flex pb-3">
                <div class="form-floating pe-3">
                    <input class="form-control" type="text" name="task" id="task">
                    <label for="task">Task</label>
                </div>

                <div class="form-floating pe-3">
                    <input class="form-control" type="text" name="category" id="category">
                    <label for="category">Category</label>
                </div>
                <button class="btn btn-primary">Salvar</button>
            </div>
        </form>

        {{--INCOMPLETE--}}
        <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between">
                <strong>Title</strong>
                <strong>Category</strong>
            </li>
            @foreach($tasks as $task)
                @if($task->status == "none")
                    <li class="list-group-item d-flex justify-content-between px-3"
                        style="text-decoration: {{ $task->status }}">
                        <span>{{ $task->task }}</span>
                        <span>{{ $task->category }}</span>
                        <div>
                            <a href="#" class="text-decoration-none btn btn-sm btn-white border" title="Complete">
                                <i class="bi bi-check text-muted"></i>
                            </a>
                            <button class="btn btn-sm btn-white" title="Delete"><i
                                    class="bi bi-trash-fill text-danger"></i></button>
                        </div>
                    </li>
                @endif
            @endforeach
        </ul>

        {{--COMPLETE--}}
        <ul class="list-group">
            @foreach($tasks as $task)
                @if($task->status != "none")
                    <li class="list-group-item d-flex justify-content-between px-3 text-black-50">
                        <span style="text-decoration: {{ $task->status }}">{{ $task->task }}</span>
                        <span style="text-decoration: {{ $task->status }}">{{ $task->category }}</span>
                        <div>
                            <a href="#" class="text-decoration-none btn btn-sm btn-white border" title="Rollback">
                                <i class="bi bi-arrow-counterclockwise"></i>
                            </a>
                            <button class="btn btn-sm btn-white" title="Delete"><i
                                    class="bi bi-trash-fill text-danger"></i></button>
                        </div>
                    </li>
                @endif
            @endforeach
        </ul>

        @if(session('sucess'))
            <p>{{ session('success') }}</p>
        @endif
    </div>
@endsection
