<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            @font-face {
                font-family: 'sansation';
                font-style: normal;
                font-weight: 400;
                src: url('/fonts/Sansation_Regular.ttf');
            }

        </style>
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
        @php
            $quote = $movies->quote->random();
        @endphp
        <section class = "flex justify-center items-center w-full h-screen bg-gradient-radial from-gray-889 to-gray-888">
            <div class = "flex flex-col text-center">
                <img 
                    src="{{ $quote->image }}" 
                    class = "h-96 w-[700px] rounded-lg mb-[65px] m-auto"
                />

                <p class = "text-white mb-[114px] text-5xl font-sansation">
                    "{{ $quote->text }}"
                </p>

                <h1 class = "text-white text-5xl underline font-sansation">
                    {{ $movies->title }}
                </h1>
            </div>
        </section>
    </body>
</html>
