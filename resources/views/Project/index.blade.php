@extends('Components.app')

@section('content')

    @include('Components._sidebar', ['active' => 'project'])

    <div style="width: 600px">
        <div class="d-flex justify-content-between pb-3">
            <input placeholder='Search' class="form-control" style="width: 515px">
            <a href="{{ route('project.create') }}" class="btn btn-danger">New</a>
        </div>

        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between">
                <span style="width: 300px">Title</span>
                <span>Type</span>
                <span>Action</span>
            </li>
            @foreach($projects as $project)
                <li class="list-group-item d-flex justify-content-between">
                    <span style="width: 300px">{{ $project->title }}</span>
                    <div>
                        <span class="badge text-bg-success">{{ $project->type }}</span>
                    </div>
                    <a href="{{ route("project.show", $project->id) }}" class="btn btn-sm btn-secondary">
                        Entrar
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
