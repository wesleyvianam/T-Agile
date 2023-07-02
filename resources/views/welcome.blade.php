<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    </head>
    <body class="content">
        <div style="padding: 5rem;" class="d-flex justify-content-center">
            <div style="max-width: 500px">
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
                        <button class="btn btn-primary">Salvar</button>
                    </div>
                </form>

                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between">
                        <strong>Title</strong>
                        <strong>Category</strong>
                    </li>
                    @foreach($tasks as $task)
                        <li class="list-group-item d-flex justify-content-between" style="text-decoration: {{ $task->status }}">
                            <span>{{ $task->task }}</span>
                            <span>{{ $task->category }}</span>
                        </li>
                    @endforeach
                </ul>

                @if(session('sucess'))
                    <p>{{ session('success') }}</p>
                @endif
            </div>
        </div>
    </body>
</html>
