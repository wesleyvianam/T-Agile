@extends('components.app')

@section('title') Create Project @endsection

@section('content')
    <div class="w-full border p-3">
        <div class="flex justify-between">
            <h1>New Project</h1>
            <a href="{{ route('project.index') }}" class="border p-2">voltar</a>
        </div>

        <div>
            <form action="{{ route('project.store') }}" method="post">
                @csrf

                <input name="userId" id="userId" type="hidden" value="{{ Auth::id() }}">

                <input name="title" id="title" type="text" placeholder="Title">

                <button class="border p-2">Salvar</button>
            </form>
        </div>
    </div>

@endsection
