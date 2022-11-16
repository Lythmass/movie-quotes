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

            <x-movie-input :value="$movie->getTranslations('title')['en']" id="en" text="title" name="title[]" language="English"/>
            <x-movie-input :value="$movie->getTranslations('title')['ka']" id="ka" text="title" name="title[]" language="Georgian"/>
            
            <x-submit-button text="Rename"/>
        </form>
        
        
    </div>
</x-layout>