<x-layout>
    <div class = "flex flex-col w-3/4 h-[35rem] bg-white rounded-xl shadow-lg">
        <div class = "fixed w-3/4 h-[4rem] py-5 shadow-lg shadow-slate-300 bg-white rounded-t-xl">
            <ul class = "flex gap-10 justify-center text-xl relative">
                @if (request()->route()->getName() == 'movies-dashboard')
                    <a href = "{{route('movies-create')}}" class = "text-white bg-green-600 px-4 py-1 rounded absolute left-8">+ Create Movie</a>
                    <li class = "text-black underline leading-3"><a href="{{route('movies-dashboard')}}">Movies</a></li>
                    <li class = "text-blue-700 hover:text-blue-900"><a href="{{route('quotes-dashboard')}}">Quotes</a></li>    
                @else
                    <a href = "{{route('quotes-create')}}" class = "text-white bg-green-600 px-4 py-1 rounded absolute left-8">+ Create Quote</a>
                    <li class = "text-blue-700 hover:text-blue-900"><a href="{{route('movies-dashboard')}}">Movies</a></li>
                    <li class = "text-black underline leading-3"><a href="{{route('quotes-dashboard')}}">Quotes</a></li>    
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