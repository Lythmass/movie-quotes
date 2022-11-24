<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ ucwords(request()->route()->getName()) }}</title>
        
        <link rel="icon" href="{{ asset('images/favicon.png') }}">
        <link rel="stylesheet" href="/index.css">
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased flex items-center bg-gradient-radial from-gray-889 to-gray-888">
        @php
            $active = request()->route('locale');
            $name = request()->route()->getName();

            request()->route()->setParameter('locale', 'ka');
            $ka = request()->route()->parameters();

            request()->route()->setParameter('locale', 'en');
            $en = request()->route()->parameters();
        @endphp
        <div class = "font-sansation flex flex-col gap-[0.7rem] ml-10">

            @if ($active == 'en') 
                <a href = "#" class = "text-[1.5rem] flex justify-center items-center rounded-full  bg-white w-[3.6rem] h-[3.6rem]">en</a>
                <a href = "{{ route($name, $ka) }}" class = "text-[1.5rem] flex justify-center items-center rounded-full text-white border-[2px] w-[3.6rem] h-[3.6rem]">ka</a>
            @else
                <a href = "{{ route($name, $en)}}" class = "text-[1.5rem] flex justify-center items-center rounded-full text-white border-[2px] h-[3.6rem]">en</a>
                <a href = "#" class = "text-[1.5rem] flex justify-center items-center rounded-full bg-white w-[3.6rem] h-[3.6rem]">ka</a>
            @endif

        </div>
        <section class = "font-sansation flex flex-col justify-center items-center w-full min-h-screen ">
            @auth
                <x-links-for-admin/>
            @endauth
            {{ $slot }}
        </section>
    </body>
</html>
