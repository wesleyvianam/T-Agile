@extends('components.app')

@section('title') T-Agile @endsection

@section('content')
    <style>
        .typed-cursor {
            font-size: 3rem;
            color: #FF735C;
            font-weight: bold;
        }
    </style>

    <div class="w-full flex justify-between items-center">
        <div>
            <h1>
                <span class="auto-type font-bold text-5xl text-primary"></span>
            </h1>
            <p class="text-2xl">T-Agile, a new concept of agility</p>
        </div>
        <div class="relative left-14">
            <img width="600" src="/image/team-checklist.png" alt="Banner de representação do framework ágil Scrum" />
        </div>
    </div>

    <script>
        let typed = new Typed(".auto-type", {
            strings: ['Your Team Agile', 'A new agile team concept'],
            typeSpeed: 150,
            backSpeed:150,
            loop: true
        })
    </script>
@endsection
