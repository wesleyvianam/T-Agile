<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    </head>
    <body class="content">
        <div style="padding: 5rem;" class="d-flex justify-content-center">
            <div style="max-width: 600px">
                @if ($errors->any())
                    @foreach($errors->all() as $error)
                        <div  class="alert alert-danger alert-dismissible fade show" role="alert">
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
                        <button class="btn btn-primary px-3">Save</button>
                    </div>
                </form>

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
                                <span>{{ $task->category }}</span>
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
                                            <i class="bi bi-trash-fill text-danger"></i>
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
                                <span style="text-decoration: {{ $task->status }}">{{ $task->category }}</span>
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
                                            <i class="bi bi-trash-fill text-danger"></i>
                                        </button>
                                    </form>
                                </div>
                            </li>
                        @endif
                    @endforeach
                </ul>

                @if(session('sucess'))
                    <p>{{ session('success') }}</p>
                @endif
            </div>
        </div>
    </body>
</html>
