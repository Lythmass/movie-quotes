<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <link rel="stylesheet" href="index.css">
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
        <section class = "flex flex-col justify-center items-center w-full min-h-screen bg-gradient-radial from-gray-889 to-gray-888">
            {{ $slot }}
        </section>
    </body>
</html>
