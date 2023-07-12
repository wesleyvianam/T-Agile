@extends('components.app')

@section('title') Settings @endsection

@section('content')
    @include('components._sidebar', ['active' => 'settings', 'projectId' => $projectId])

    <div class="ms-3 w-2/3 border p-3">
        <div class="flex justify-between">
            <h1>Backlog</h1>
            <a href="{{ route('project.show', $projectId) }}" class="border p-2">Back</a>
        </div>

        <ul class="mt-3">
            <li class="border p-2 rounded flex justify-between">
                <span>Categorias</span>

                <a href="{{ route('category.index', $projectId) }}" class="pe-3">
                    <i class="bi bi-pencil-square text-gray-500 hover:text-gray-800"></i>
                </a>
            </li>
        </ul>
    </div>
@endsection
