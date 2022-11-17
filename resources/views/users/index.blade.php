<x-layout>
    <div class = "flex flex-col w-[70rem] h-[35rem] bg-white rounded-xl shadow-lg">
        <div class = "fixed w-[70rem] h-[4rem] py-5 shadow-lg shadow-slate-300 bg-white rounded-t-xl">
            <ul class = "flex gap-10 justify-center text-xl relative">
                @if (request()->route()->getName() == 'movies-dashboard')
                    <a href = "{{route('movies-create', [app()->getLocale()])}}" class = "text-white bg-green-600 px-4 py-1 rounded absolute bottom-0 left-8">+ @lang('profile.create-movie')</a>
                    <li class = "text-black underline leading-3"><a href="{{route('movies-dashboard', [app()->getLocale()])}}">@lang('profile.movies')</a></li>
                    <li class = "text-blue-700 hover:text-blue-900"><a href="{{route('quotes-dashboard', [app()->getLocale()])}}">@lang('profile.quotes')</a></li>    
                @else
                    <a href = "{{route('quotes-create', [app()->getLocale()])}}" class = "text-white bg-green-600 px-4 py-1 rounded absolute bottom-0 left-8">+ @lang('profile.create-quote')</a>
                    <li class = "text-blue-700 hover:text-blue-900"><a href="{{route('movies-dashboard', [app()->getLocale()])}}">@lang('profile.movies')</a></li>
                    <li class = "text-black underline leading-3"><a href="{{route('quotes-dashboard', [app()->getLocale()])}}">@lang('profile.quotes')</a></li>    
                @endif
            </ul>
        </div>
        <div class = "w-fill h-[4rem] py-10"></div>    
       
        @if (request()->route()->getName() == 'movies-dashboard')
            <x-movies-list :movies="$movies"/>
        @else
            <x-quotes-list :quotes="$quotes"/>
        @endif
        
    </div>
</x-layout>