<x-layout>
    
        @php
            if($movies != null && count($movies->quote)) {
                $quote = $movies->quote->random();
            }
        @endphp
        
        @if ($movies != null && count($movies->quote))
            <div class = "flex flex-col text-center">
                <x-image :quote="$quote" class="rounded-lg mb-[4rem]"/>
                <x-quote-text :quote="$quote" class="mb-[7.1rem] text-white"/>
                <x-movie-title :movies="$movies" class="underline"/>
            </div>
        @else
            @if($movies != null) 
                <div class = "flex flex-col text-center gap-10">
                    <x-movie-title :movies="$movies" class="underline"/>
                    <h1 class="mb-[7.1rem] text-white text-xl">No Quotes for {{ $movies->getTranslations('title')[request()->path()] }} </h1>
                </div>
            
            @else 
                <div>
                    <h1 class="mb-[7.1rem] text-white text-[5rem]">No available quotes!</h1>
                </div>
            
            @endif
        @endif

</x-layout>