<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LoginDemo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="w-screen h-screen bg-gray-800 text-white flex justify-center items-center">
<header class="absolute top-0 left-0 right-0 w-screen h-1/4 flex justify-center items-center gap-50">
    <h1 class="text-3xl font-bold">LoginDemo</h1>

    <div class="p-4 space-x-8">
        @auth
            <form method="POST" action="{{ route('login.destroy') }}">
                @csrf
                @method('DELETE')

                <button type="submit"
                        class="px-3 py-2 bg-blue-500 hover:bg-blue-400 border border-blue-400 rounded-lg cursor-pointer">
                    Ausloggen
                </button>
            </form>
        @endauth

        @guest
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register.index') }}"
               class="px-3 py-2 bg-blue-500 hover:bg-blue-400 border border-blue-400 rounded-lg cursor-pointer">Registrieren</a>
        @endguest
    </div>
</header>

<main>
    {{ $slot }}
</main>
</body>
</html>
