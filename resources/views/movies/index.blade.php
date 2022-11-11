<x-layout>
    
        @php
            $quote = $movies->quote->random();
        @endphp
        
        <div class = "flex flex-col text-center">
            <x-image :quote="$quote" class="rounded-lg mb-[4rem]"/>
            <x-quote-text :quote="$quote" class="mb-[7.1rem] text-white"/>
            <x-movie-title :movies="$movies" class="underline"/>
        </div>

</x-layout>