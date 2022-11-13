<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
        <!-- Styles -->

    </head>
    <body class="bg-zinc-700 min-h-screen">
        @auth
        <div class="mt-5 text-white justify-end mr-14 text-3xl flex">
                <h2 class="mr-auto ml-10">
                    <a class="mr-10" href="/">Home</a>
                    <a href="/admin/movies">Dashboard</a>
                    </h2>
            <h2 class="mr-8">Welcome!</h2>
            <form method="POST" action="/logout">
                @csrf
                <button type="submit" class="bg-pink-200 text-black">Logout</button>
            </form>
        </div>
        @else
        <div class="mt-5 text-white text-right mr-14 text-3xl">
            <a href="/login">
                Login
            </a>
        </div>
        @endauth
        <div class="flex mb-3">
            <language-panel>
                <div class="mt-80 ml-7 flex flex-col fixed">
                    <span class="mb-4 w-14 h-14 flex items-center justify-center text-white rounded-full border-white border">en</span>
                    <span class="w-14 h-14 flex bg-white items-center text-zinc-700 justify-center rounded-full border-white border">ka</span>
                </div>
            </language-panel>
            {{$slot}}
        </div>
    </body>
</html>
