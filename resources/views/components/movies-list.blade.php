
<div class = "flex overflow-auto">
    <div class = "flex flex-col gap-4 py-4 w-full">
        @foreach ($movies as $movie)
            <div class = "px-10 flex justify-between">
                <h3 class = "w-[1rem]">{{ $movie->title }}</h3>
                <h3>{{ $movie->created_at->diffForHumans() }}</h3>
                <h3 class = "text-blue-700 hover:text-blue-900"><a href = "#">Edit</a></h3>
                <h3 class = "text-red-700 hover:text-red-900"><a href = "#">Delete</a></h3>
            </div>
        @endforeach
    </div>
</div>