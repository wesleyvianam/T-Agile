@extends('Components.app')

@section('content')

    @include('Components._sidebar', ['active' => 'project'])

    <div style="width: 600px">
        <form method="POST" action="{{ route('project.update', $project->id) }}">
            @csrf
            @Method('PUT')
            <div class="row pb-3 pe-3">
                <div class="col">
                    <input class="form-control" type="text" name="title" id="title" placeholder="Title" value="{{ $project->title }}">
                </div>

                <select class="form-select col" name="type" id="type">
                    <option value="{{ $project->type }}">{{ $project->type }}</option>
                    <option value="list">list</option>
                    <option value="kanban">kanban</option>
                </select>
            </div>

            <div class="row">
                <div class="col" style="width: 100%">
                    <textarea class="form-control" name="description" id="description">{{ $project->description }}</textarea>
                </div>
            </div>

            <div class="py-3 pe-0 text-end">
                <button class="btn btn-primary px-3">Save</button>
            </div>
        </form>
    </div>
@endsection
