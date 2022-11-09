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
        <div>
            {{$slot}}
            <language-panel>
                    <span>en</span>
                    <span>ka</span>
            </language-panel>
    </div>
    </body>
</html>
