@extends('Components.app')

@section('title')
    Edit | {{ $category->title }}
@endsection

@section('content')

    @include('Components._sidebar', ['active' => 'settings'])

    <div style="width: 600px">
        <div class="card mb-3 border rounded shadow-sm">
            <div class="px-3 py-2 border-bottom d-flex justify-content-between rounded-top align-items-center bg-danger">
                <h1 class="h6 text-white">{{ $category->title }}</h1>

                <a href="{{ route('category.index') }}" class="btn btn-sm border text-white d-flex align-items-center">
                    <i class="bi bi-chevron-left"></i>
                </a>
            </div>

            <div class="p-3">
                <form method="POST" action="{{ route('category.update', $category->id) }}">
                    @csrf
                    @Method('PUT')

                    <div class="pb-3">
                        <input class="form-control" type="text" name="title" id="title" placeholder="Title" value="{{ $category->title }}">
                    </div>

                    <div class="pb-3">
                        <textarea class="form-control" name="description" id="description" placeholder="Description">{{ $category->description }}</textarea>
                    </div>

                    <div class="text-end">
                        <button class="btn btn-primary px-3">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

