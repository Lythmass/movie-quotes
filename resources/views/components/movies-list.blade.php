
<div class = "flex overflow-auto">
    <div class = "flex flex-col gap-4 py-4 w-full">
        @foreach ($movies as $movie)
            <div class = "px-10 flex justify-between">
                <h3 class = "w-[1rem]">{{ $movie->title }}</h3>
                <h3>{{ $movie->created_at->diffForHumans() }}</h3>
                <h3 class = "text-blue-700 hover:text-blue-900"><a href = "{{ route('movies-edit', [app()->getLocale(), $movie->id]) }}">@lang('profile.edit')</a></h3>
                <form onsubmit = "return confirmDelete('{{$movie->title}}')" action="{{ route('movies-delete', [app()->getLocale(), $movie->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class = "text-red-700 hover:text-red-900" type="submit">@lang('profile.delete')</button>
                </form>
            </div>
        @endforeach
    </div>
</div>
<script>
    function confirmDelete(title) {
        var answer = confirm(`Are you sure you want to delete ${title}?`);
        return answer;
    }
</script>