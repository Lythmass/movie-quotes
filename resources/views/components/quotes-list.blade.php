<div class = "flex overflow-auto">
    <div class = "flex flex-col gap-4 py-4 w-full">
        @foreach ($quotes as $quote)
            <div class = "px-10 flex justify-between">
                <h3 class = "w-[10rem]">"{{$quote->text}}"</h3>
                <h3 class = "w-[1rem] hover:underline"><a href = "/movie/{{ $quote->movie->slug }}">{{ ucwords($quote->movie->title) }}</a></h3>
                <h3>{{ $quote->created_at->diffForHumans() }}</h3>
                <h3 class = "text-blue-700 hover:text-blue-900"><a href = "{{ route('quotes-edit', ['quote' => $quote->id]) }}">Edit</a></h3>
                <form action="{{ route('quotes-delete', ['quote' => $quote->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type = "submit" class = "text-red-700 hover:text-red-900">Delete</button>
                </form>
                
            </div>
        @endforeach
    </div>
</div>