@extends('Components.app')

@section('title')
    Todo fast | Settings
@endsection

@section('content')

    @include('Components._sidebar', ['active' => 'settings'])

    <div style="width: 600px">
        <div class="card mb-3 border rounded shadow-sm">
            <div class="px-3 py-2 border-bottom d-flex justify-content-between rounded-top align-items-center bg-danger mb-3">
                <h1 class="h6 text-white">Settings</h1>

                <a href="{{ route('project.index') }}" class="btn btn-sm border text-white d-flex align-items-center">
                    <i class="bi bi-chevron-left"></i>
                </a>
            </div>

            <ul class="list-group">
                <li class="list-group-item">
                    Categories
                </li>
                <li class="list-group-item">
                    Categories
                </li>
            </ul>
        </div>
    </div>
@endsection
