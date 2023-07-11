@extends('components.app')

@section('title') Project @endsection

@section('content')
    <div class="">
        <div class="flex justify-between">
            <h1>Project</h1>
            <a href="{{ route('project.create') }}" class="border p-2">New Project</a>
        </div>

        <ul class="mt-3">
            @foreach($projects as $project)
                <li class="border p-2 rounded">
                    {{ $project->user_id }}
                    {{ $project->title }}
                </li>
            @endforeach
        </ul>
    </div>


@endsection
