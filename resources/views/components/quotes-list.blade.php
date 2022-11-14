<div class = "flex overflow-auto">
    <div class = "flex flex-col gap-4 py-4 w-full">
        @foreach ($quotes as $quote)
            <div class = "px-10 flex justify-between">
                <h3 class = "w-[10rem]">"{{ substr($quote->text, 0, 10) }}"</h3>
                <h3 class = "w-[1rem] hover:underline"><a href = "/movie/{{ $quote->movie->slug }}">{{ ucwords($quote->movie->title) }}</a></h3>
                <h3>{{ $quote->created_at->diffForHumans() }}</h3>
                <h3 class = "text-blue-700 hover:text-blue-900"><a href = "#">Edit</a></h3>
                <h3 class = "text-red-700 hover:text-red-900"><a href = "#">Delete</a></h3>
            </div>
        @endforeach
    </div>
</div>