<div class = "flex overflow-auto">
    <div class = "flex flex-col gap-4 py-4 w-full">
        @foreach ($quotes as $quote)
            <div class = "px-10 flex justify-between">
                <h3 class = "w-[10rem]">"{{$quote->text}}"</h3>
                <h3 class = "w-[1rem] hover:underline"><a href = "{{ route('movie', [app()->getLocale(), $quote->movie->slug]) }}">{{ ucwords($quote->movie->title) }}</a></h3>
                <h3>{{ $quote->created_at->diffForHumans() }}</h3>
                <h3 class = "text-blue-700 hover:text-blue-900"><a href = "{{ route('quotes-edit', [app()->getLocale(), 'quote' => $quote->id]) }}">@lang('profile.edit')</a></h3>
                <form onsubmit = "return confirmDelete('{{$quote->text}}')" action="{{ route('quotes-delete', [app()->getLocale(), $quote->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type = "submit" class = "text-red-700 hover:text-red-900">@lang('profile.delete')</button>
                </form>
                
            </div>
        @endforeach
    </div>
</div>
<script>
    function confirmDelete(title) {
        var answer = confirm(`Are you sure you want to delete ${title}?`);
        return answer == true ? true : false;
    }
</script>