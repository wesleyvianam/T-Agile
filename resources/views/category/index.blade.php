@extends('components.app')

@section('title') Categories @endsection

@section('content')
    @include('components._sidebar', ['active' => 'settings', 'projectId' => $projectId])

    <div class="ms-3 w-2/3 border p-3">
        <div class="flex justify-between">
            <h1>Categories</h1>
            <a href="{{ route('setting.index', $projectId) }}" class="border p-2">Back</a>
        </div>

        <ul class="mt-3">
            <li class="border p-2 rounded flex justify-between">
            </li>
        </ul>
    </div>
@endsection
