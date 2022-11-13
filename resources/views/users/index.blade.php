<x-layout>
    <div class = "flex flex-col w-3/4 h-[35rem] bg-white rounded-xl shadow-lg">
        <div class = "fixed w-3/4 h-[4rem] py-5 shadow-lg shadow-slate-300 bg-white rounded-t-xl">
            <ul class = "flex gap-10 justify-center text-xl">
                <li class = "text-blue-700 hover:text-blue-900"><a href="/dashboard/movies">Movies</a></li>
                <li class = "text-blue-700 hover:text-blue-900"><a href="/dashboard/quotes">Quotes</a></li>
            </ul>
        </div>
        <div class = "w-fill h-[4rem] py-5"></div>
        
        <div class = "flex overflow-auto">
            <div class = "flex flex-col gap-4 py-4 w-full">
                @foreach ($movies as $movie)
                <div class = "px-10 flex justify-between">
                    <h3 class = "w-[1rem] hover:underline"><a href = "#">{{ $movie->title }}</a></h3>
                    <h3>{{ $movie->created_at->diffForHumans() }}</h3>
                    <h3 class = "text-blue-700 hover:text-blue-900"><a href = "#">Edit</a></h3>
                    <h3 class = "text-red-700 hover:text-red-900"><a href = "#">Delete</a></h3>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>