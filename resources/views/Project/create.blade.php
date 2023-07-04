@extends('Components.app')

@section('content')

    @include('Components._sidebar', ['active' => 'home'])

    <div style="width: 600px">
        <form method="POST" action="{{ url('/project') }}">
            @csrf
            <div class="row pb-3 pe-3">
                <div class="col">
                    <input class="form-control" type="text" name="title" id="title" placeholder="Title">
                </div>

                <select class="form-select col" name="type" id="type">
                    <option value="list">list</option>
                    <option value="kanban">kanban</option>
                </select>
            </div>

            <div class="row">
                <div class="col" style="width: 100%">
                    <textarea class="form-control" name="category" id="category" placeholder=""></textarea>
                </div>
            </div>

            <div class="py-3 pe-0 text-end">
                <button class="btn btn-primary px-3">Save</button>
            </div>
        </form>
    </div>
@endsection
