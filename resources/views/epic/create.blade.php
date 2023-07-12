@extends('components.app')

@section('title') Create Project @endsection

@section('content')
    @include('components._sidebar', ['active' => 'backlog', 'project' => $projectId])

    <div class="ms-3 w-2/3 border p-3">
        <div class="flex justify-between">
            <h1>New Project</h1>
            <a href="{{ route('epic.index', ['id' => $projectId]) }}" class="border p-2">Back</a>
        </div>

        <div>
            <form action="{{ route('epic.store') }}" method="post">
                @csrf

                <input name="projectId" id="projectId" type="hidden" value="{{ $projectId }}">

                <input name="title" id="title" type="text" placeholder="Title">

                <button class="border p-2">Salvar</button>
            </form>
        </div>
    </div>

@endsection
