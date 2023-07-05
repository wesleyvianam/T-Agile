@extends('Components.app')

@section('content')

    @include('Components._sidebar', ['active' => 'home'])

    <div style="width: 600px">
        <form method="POST" action="{{ url('/task') }}">
            @csrf
            <div class="d-flex pb-3">
                <input class="form-control" type="hidden" name="projectId" id="projectId" value="{{ $project }}">

                <div class="form-floating pe-3">
                    <input class="form-control" type="text" name="task" id="task">
                    <label for="task">Task</label>
                </div>

                <div class="form-floating pe-3">
                    <input class="form-control" type="text" name="category" id="category">
                    <label for="category">Category</label>
                </div>
                <button class="btn btn-primary px-3">Save</button>
            </div>
        </form>
    </div>
@endsection
