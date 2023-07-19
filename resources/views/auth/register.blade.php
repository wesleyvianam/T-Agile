@extends('components.app')

@section('title') Login | T-Agile @endsection

@section('content')
    <div class="w-full flex justify-between items-center">
        <div class="shadow w-1/2 p-6 rounded-xl">
            <div>
                <h1 class="mb-3 text-4xl font-bold text-center">Register</h1>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" id="name" name="name" class="rounded-lg bg-gray-50 text-gray-900 focus:border-none block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700" placeholder="Name">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="text" name="email" id="email" class="rounded-lg bg-gray-50 text-gray-900 focus:border-none block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700" placeholder="Email">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                        <input type="password" id="password" name="password" class="rounded-lg bg-gray-50 text-gray-900 focus:border-none block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700" placeholder="Password">
                    </div>

                    <div class="mb-5">
                        <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm Password</label>
                        <input type="password" name="confirm-password" id="confirm-password" class="rounded-lg bg-gray-50 text-gray-900 focus:border-none block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700" placeholder="Confirm Password">
                    </div>

                    <div>
                        <div class="flex justify-between items-center">
                            <p class="">Já possui conta? <a href="{{ route('login') }}" class="text-primary">Entrar</a></p>

                            <button class="mb-5 py-2 px-4 border rounded-md">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="w-1/2 relative left-20">
            <img width="600" src="/image/scrum.jpg" alt="Banner de representação do framework ágil Scrum" />
        </div>
    </div>
@endsection
