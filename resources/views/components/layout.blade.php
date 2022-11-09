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
    <body class="bg-zinc-700">
        <div class="flex">
            <language-panel>
                <div class="mt-80 ml-7 flex flex-col">
                    <span class="mb-4 w-14 h-14 flex items-center justify-center text-white rounded-full border-white border">en</span>
                    <span class="w-14 h-14 flex bg-white items-center text-zinc-700 justify-center rounded-full border-white border">ka</span>
                </div>
            </language-panel>
            {{$slot}}
        </div>
    </body>
</html>
