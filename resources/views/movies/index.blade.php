<x-layout>
    
        @php
            if($movies != null) {
                $quote = $movies->quote->random();
            }
        @endphp
        
        @if ($movies != null)
            <div class = "flex flex-col text-center">
                <x-image :quote="$quote" class="rounded-lg mb-[4rem]"/>
                <x-quote-text :quote="$quote" class="mb-[7.1rem] text-white"/>
                <x-movie-title :movies="$movies" class="underline"/>
            </div>
        @else
            <div>
                <h1 class="mb-[7.1rem] text-white text-[5rem]">@lang('profile.not-available')</h1>
            </div>
        @endif

</x-layout>