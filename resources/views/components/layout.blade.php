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
                    <a class="mr-10" href={{route("home")}}>{{__("language.home")}}</a>
                    <a href={{route("dashboard")}}>{{__("language.dashboard")}}</a>
                    </h2>
            <h2 class="mr-8">{{__("language.welcome")}}!</h2>
            <form method="POST" action={{route("logout")}}>
                @csrf
                <button type="submit" class="bg-pink-200 text-black">{{__("language.logout")}}</button>
            </form>
        </div>
        @endauth
        <div class="flex mb-3">
            <language-panel>
                <div class="mt-80 ml-7 flex flex-col fixed">
                    @foreach (Config::get("languages") as $lang => $language)
                    <a href="{{route('lang.switch', $lang)}}" class="{{$lang !== App::getLocale() ? 'mb-4 w-14 h-14 flex items-center text-zink-700 justify-center rounded-full border-white border' : 'mb-4 w-14 h-14 flex items-center bg-white text-zink-700 justify-center rounded-full border-white border'}}">
                        {{$language}}
                    </a>
                    @endforeach
                </div>
            </language-panel>
            {{$slot}}
        </div>
    </body>
</html>
