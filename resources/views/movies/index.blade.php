<x-layout>
    
        @php
            $quote = $movies->quote->random();
        @endphp
        
        <div class = "flex flex-col text-center">
            <x-image :quote="$quote"/>
            <x-quote-text :quote="$quote" class="text-white"/>
            <x-movie-title :movies="$movies" class="underline"/>
        </div>

</x-layout>