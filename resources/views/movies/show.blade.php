<x-layout>

    <x-movie-title :movies="$movie"/>

    @foreach ($movie->quote as $eachQuote)
        
        <div class = "flex flex-col text-center">
            <x-image :quote="$eachQuote"/>
            <x-quote-text :quote="$eachQuote" class="text-white"/>
        </div>

    @endforeach

</x-layout>