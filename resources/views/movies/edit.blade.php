<x-layout>
    <div class = "flex flex-col w-[70rem] h-[35rem] bg-white rounded-xl shadow-lg">
        <div class = "fixed w-[70rem] h-[4rem] py-5 shadow-lg shadow-slate-300 bg-white rounded-t-xl">
            <div class = "flex gap-10 justify-center text-xl">
                @lang('profile.edit-movie') - "{{ $movie->title }}"
            </div>
        </div>
        <div class = "w-fill h-[4rem] py-10"></div>    
        <form method = "post" action = "{{ route('movies-update', [app()->getLocale(), $movie->id]) }}"class = "flex flex-col items-center w-full h-3/4 justify-evenly">
            @csrf
            @method('PATCH')

            <x-movie-input :value="$movie->getTranslations('title')['en']" id="en" text="title" name="en" language="profile.edit-movie-en"/>
            <x-movie-input :value="$movie->getTranslations('title')['ka']" id="ka" text="title" name="ka" language="profile.edit-movie-ka"/>
            
            <x-submit-button text="profile.rename"/>
        </form>
        
        
    </div>
</x-layout>