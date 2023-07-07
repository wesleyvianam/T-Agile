@extends('Components.app')

@section('content')

    @include('Components._sidebar', ['active' => 'project'])

    <div style="width: 600px">
        <div class="d-flex justify-content-between pb-3">
            <input placeholder='Search' class="form-control" style="width: 515px">

            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                New
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Create a new Project</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="{{ route('project.store') }}">
                                @csrf
                                <div class="d-flex pb-3">
                                    <div class="pe-3" style="width: 420px">
                                        <input class="form-control" type="text" name="title" id="title" placeholder="Title">
                                    </div>

                                    <select style="width: 120px" class="form-select" name="type" id="type">
                                        <option value="list">list</option>
                                        <option value="kanban">kanban</option>
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <textarea class="form-control" name="description" id="description"></textarea>
                                    </div>
                                </div>

                                <div class="mt-3 text-end">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button class="btn btn-primary px-3">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
