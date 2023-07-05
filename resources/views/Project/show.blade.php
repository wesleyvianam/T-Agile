@extends('Components.app')

@section('content')

    @include('Components._sidebar', ['active' => 'home'])
    <div style="width: 600px">
        <h1>{{ $project->title }}</h1>
        <pre>
        {{print_r($project)}}

        <div class="d-flex justify-content-between pb-3">
            <input placeholder="Search task" class="form-control" style="width: 480px">
            <a href="{{ route("task.create", $project->id) }}" class="btn btn-danger">New Task</a>
        </div>

        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between">
                <span style="width: 300px">Title</span>
                <span>category</span>
                <span>Action</span>
            </li>
        </ul>
    </div>
@endsection
