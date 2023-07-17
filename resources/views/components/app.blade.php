<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col items-center">
    @include('components.navbar')

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div class="w-full px-80">
        <div class="flex">
            @yield('content')
        </div>
    </div>
</body>
</html>
