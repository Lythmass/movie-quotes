<x-layout>
    <div class="w-[43.75rem] mt-[5rem]">
        <x-movie-title :movies="$movie" class="mb-[5rem] text-left"/>
        @foreach ($movie->quote as $eachQuote)
            <div class = "flex flex-col text-center mb-[4rem]">
                <div class="bg-white rounded-lg">
                    <x-image :quote="$eachQuote" class="mb-[2.1rem] rounded-t-lg"/>
                    <x-quote-text :quote="$eachQuote" class="text-neutral-700 text-[2rem] pb-[2.1rem]"/>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>




