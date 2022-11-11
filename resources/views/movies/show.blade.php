<x-layout>
    <div class="w-[700px] mt-[79px]">
        <x-movie-title :movies="$movie" class="mb-[82px] text-left"/>
        @foreach ($movie->quote as $eachQuote)
            <div class = "flex flex-col text-center mb-[67px]">
                <div class="bg-white rounded-lg">
                    <x-image :quote="$eachQuote" class="mb-[34px] rounded-t-lg"/>
                    <x-quote-text :quote="$eachQuote" class="text-neutral-700 text-[32px] pb-[34px]"/>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>




