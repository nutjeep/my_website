<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title }}</title>
        

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.3/dist/cdn.min.js"></script>
    </head>
    <body>
        <h1>Lorem ipsum dolor sit amet consectetur, adipisicing elit. At, porro?</h1>
        {{ $seo->cannonical }}
        <br>
        {{ $seo->keywords }}
        <br>
        {{ $seo->description }}

    </body>
</html>
