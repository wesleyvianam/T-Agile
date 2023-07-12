@extends('components.app')

@section('title') {{ $project->title }} @endsection

@section('content')
    @include('components._sidebar', ['active' => 'backlog', 'projectId' => $project->id])

    <div class="ms-3 w-2/3 border p-3">
        <div class="flex justify-between">
            <h1>Backlog</h1>
            <a href="{{ route('project.create') }}" class="border p-2">New Task</a>
        </div>

        <ul class="mt-3">
{{--            @foreach($projects as $project)--}}
{{--                <li class="border p-2 rounded flex justify-between">--}}
{{--                    <div>--}}
{{--                        <span>{{ $project->user_id }}</span>--}}
{{--                        <span>{{ $project->title }}</span>--}}
{{--                    </div>--}}

{{--                    <div class="flex">--}}
{{--                        <a href="{{ route('project.edit', $project->id) }}" class="pe-3">--}}
{{--                            <i class="bi bi-pencil-square text-gray-500 hover:text-gray-800"></i>--}}
{{--                        </a>--}}
{{--                        <form action="{{ route('project.destroy', $project->id) }}" method="post">--}}
{{--                            @csrf--}}
{{--                            @method('Delete')--}}

{{--                            <button><i class="text-red-500 hover:text-red-800 bi bi-trash-fill"></i></button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--            @endforeach--}}
        </ul>
    </div>
@endsection
