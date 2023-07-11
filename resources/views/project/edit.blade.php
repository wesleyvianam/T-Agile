@extends('components.app')

@section('title') Edit Project @endsection

@section('content')
    <div>
        <div class="flex justify-between">
            <h1>New Project</h1>
            <a href="{{ route('project.index', $project->id) }}" class="border p-2">Back</a>
        </div>

        <div>
            <form action="{{ route('project.update', $project->id) }}" method="post">
                @csrf
                @method('PUT')

                <input name="title" id="title" type="text" placeholder="Title" value="{{ $project->title }}">

                <button class="border p-2">Update</button>
            </form>
        </div>
    </div>

@endsection
