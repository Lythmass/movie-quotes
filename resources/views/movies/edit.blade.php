<x-layout>
    <div class = "flex flex-col w-3/4 h-[35rem] bg-white rounded-xl shadow-lg">
        <div class = "fixed w-3/4 h-[4rem] py-5 shadow-lg shadow-slate-300 bg-white rounded-t-xl">
            <div class = "flex gap-10 justify-center text-xl">
                Edit Movie - "{{ $movie->title }}"
            </div>
        </div>
        <div class = "w-fill h-[4rem] py-10"></div>    
        <form method = "post" action = "/dashboard/movies/{{$movie->id}}"class = "flex flex-col items-center w-full h-3/4 justify-evenly">
            @csrf
            @method('PATCH')
            <label for="title" class = "text-xl">Movie Title</label>
            <input value = {{ $movie->title }} class = "border border-gray-700" id = "title" name = "title" type="text">
            <x-submit-button text="Rename"/>
        </form>
        
        
    </div>
</x-layout>