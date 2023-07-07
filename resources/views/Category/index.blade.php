@extends('Components.app')

@section('title')
    Todo fast | Categories
@endsection

@section('content')

    @include('Components._sidebar', ['active' => 'settings'])

    <div style="width: 600px">
        <div class="card mb-3 border rounded shadow-sm">
            <div class="px-3 py-2 border-bottom d-flex justify-content-between rounded-top align-items-center bg-danger">
                <h1 class="h6 text-white">Categories</h1>

                <div class="d-flex">
                    <a href="{{ route('setting.index') }}" class="btn btn-sm border text-white d-flex align-items-center">
                        <i class="bi bi-chevron-left"></i>
                    </a>

                    <button type="button" class="btn  ms-2 border btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        New
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Create Category</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('category.store') }}">
                                        @csrf
                                        <div class="pb-3">
                                            <input class="form-control" type="text" name="title" id="title" placeholder="Title">
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <textarea class="form-control" name="description" id="description" placeholder="Description"></textarea>
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
            </div>

            <div class="p-3">
                @if(count($categories))
                    @foreach($categories as $category)
                        <div class="border rounded p-3 mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <span>{{ $category->title }}</span>

                                <div class="dropdown border rounded">
                                    <button class="btn btn-sm text-white btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-gear"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark">
                                        <li>
                                            <a href="{{ route('category.edit', $category->id) }}" class="dropdown-item text-decoration-none btn btn-sm btn-white" title="Edit">
                                                <i class="bi bi-pencil-square me-3"></i>
                                                Edit
                                            </a>
                                        </li>
                                        <li>
                                            <form method="POST" action="{{ route('category.destroy', $category->id) }}" class="dropdown-item text-decoration-none btn btn-sm btn-white" title="Delete">
                                                @csrf
                                                @Method('DELETE')

                                                <button type="submit" class="btn btn-sm btn-white text-white p-0" title="Delete">
                                                    <i class="bi bi-trash-fill me-3"></i>
                                                    Delete
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <hr>
                            <span>{{ $category->description }}</span>
                        </div>
                    @endforeach
                @else
                    <span class="text-secondary">No category to show</span>
                @endif
            </div>
        </div>
    </div>
@endsection

