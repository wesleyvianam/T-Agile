@extends('components.app')

@section('title') {{ $project->title }} @endsection

@section('content')

    @include('components._sidebar', ['projectId' => $project->id, 'active' => 'backlog'])

    <div class="ms-3 w-2/3 border p-3">
        <div class="flex justify-between">
            <h1>Backlog</h1>
            <a href="{{ route('project.index') }}" class="border p-2">Back</a>
        </div>

        <div>
            <form action="{{ route('task.store') }}" method="post" class="mt-3 p-3 border">
                @csrf
                <div class="flex flex-wrap -mx-3 mb-3">
                    <input name="projectId" id="projectId" type="hidden">

                    <div class="w-full px-3 mb-6 md:mb-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                            Title
                        </label>
                        <input name="title" id="title" type="text" placeholder="Title" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" />
                    </div>

                    <div class="w-full md:w-2/5 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                            Category
                        </label>
                        <select name="category" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="">Estudo</option>
                        </select>
                    </div>

                    <div class="w-full md:w-2/5 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                            Epic
                        </label>
                        <select name="epic" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option>Ajustes e melhorias</option>
                        </select>
                    </div>

                    <div class="w-full md:w-1/5 px-3 mt-6 mb-6 md:mb-0">
                        <button class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 pb-3 px-4 rounded">Save</button>
                    </div>

                </div>

            </form>
            <ul class="mt-3">
                {{--            @foreach($projects as $project)--}}
                {{--                <li class="border p-2 rounded flex justify-between">--}}
                {{--                    <div>--}}
                {{--                        <span>{{ $project->user_id }}</span>--}}
                {{--                        <span>{{ $project->title }}</span>--}}
                {{--                    </div>--}}

                {{--                    <div class="flex">--}}
                {{--                        <a href="{{ route('project.edit', $project->id) }}" class="pe-3">--}}
                {{--                            <i class="bi bi-pencil-square text-gray-500 hover:text-gray-800"></i>--}}
                {{--                        </a>--}}
                {{--                        <form action="{{ route('project.destroy', $project->id) }}" method="post">--}}
                {{--                            @csrf--}}
                {{--                            @method('Delete')--}}

                {{--                            <button><i class="text-red-500 hover:text-red-800 bi bi-trash-fill"></i></button>--}}
                {{--                        </form>--}}
                {{--                    </div>--}}
                {{--                </li>--}}
                {{--            @endforeach--}}
            </ul>
        </div>
    </div>
@endsection
