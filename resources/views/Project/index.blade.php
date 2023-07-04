@extends('Components.app')

@section('content')

    @include('Components._sidebar', ['active' => 'home'])
    <div style="width: 600px">
        <div class="d-flex justify-content-between pb-3">
            <input placeholder="Search" class="form-control" style="width: 500px">
            <a href="{{ route('project.create') }}" class="btn btn-primary">New</a>
        </div>

        <ul>
            @foreach($projects as $project)
                <li class="d-flex justify-content-between">
                    <span style="width: 300px">{{ $project->title }}</span>
                    <span>{{ $project->type }}</span>
                    <a href="#">Entrar</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
