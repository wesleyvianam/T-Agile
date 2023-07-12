@extends('components.app')

@section('title') Epics @endsection

@section('content')
    @include('components._sidebar', ['active' => 'epics', 'projectId' => $projectId])

    <div class="ms-3 w-2/3 border p-3">
        <div class="flex justify-between">
            <h1>Epics</h1>
            <a href="{{ route('epic.create', ['id' => $projectId]) }}" class="border p-2">New Epic</a>
        </div>

        <ul class="mt-3">
            @foreach($epics as $epic)
                <li class="border p-2 rounded flex justify-between">
                    <div>
                        <span>{{ $epic->project_id }}</span>
                        <a href="{{ route('epic.show', $projectId) }}">{{ $epic->title }}</a>
                    </div>

                    <div class="flex">
                        <a href="{{ route('epic.edit', $epic->id) }}" class="pe-3">
                            <i class="bi bi-pencil-square text-gray-500 hover:text-gray-800"></i>
                        </a>
                        <form action="{{ route('epic.destroy', $epic->id) }}" method="post">
                            @csrf
                            @method('Delete')

                            <button><i class="text-red-500 hover:text-red-800 bi bi-trash-fill"></i></button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
