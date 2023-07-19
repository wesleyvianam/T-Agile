@extends('components.app')

@section('title') Login | T-Agile @endsection

@section('content')
    <div class="w-full flex justify-between items-center mt-20">
        <div class="shadow w-1/2 p-6 rounded-xl">
            <div>
                <h1 class="mb-3 text-4xl font-bold text-center">Login</h1>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <div class="flex mb-6 border rounded-md">
                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-l-md">
                            <i class="bi bi-envelope-fill text-zinc-500"></i>
                        </span>
                        <input type="text" name="email" id="email" class="rounded-none rounded-r-lg bg-gray-50 text-gray-900 focus:border-none block flex-1 min-w-0 w-full text-sm border-none p-2.5  dark:bg-gray-700" placeholder="Email">
                    </div>

                    <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <div class="flex mb-6 border rounded-md">
                        <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 rounded-l-md">
                            <i class="bi bi-shield-lock-fill text-zinc-500"></i>
                        </span>
                        <input type="password" name="password" id="password" class="rounded-none rounded-r-lg bg-gray-50 text-gray-900 focus:ring-blue-500 focus:border-none block flex-1 min-w-0 w-full text-sm border-none p-2.5  dark:bg-gray-700" placeholder="Password">
                    </div>

                    <div class="">
                        <div class="flex justify-between items-center">
                            <a href="#" class="underline text-blue-600">Esqueci minha senha.</a>

                            <button class="mb-5 py-2 px-4 border rounded-md">Entrar</button>
                        </div>

                        <p class="">Ainda nao possui conta? <a href="{{ route('register') }}" class="text-primary">registre-se</a></p>
                    </div>
                </form>
            </div>
        </div>

        <div class="w-1/2 relative left-20">
            <img width="600" src="/image/scrum.jpg" alt="Banner de representação do framework ágil Scrum" />
        </div>
    </div>
@endsection
