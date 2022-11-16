<x-layout>
    <div class = "flex flex-col w-3/4 h-[35rem] bg-white rounded-xl shadow-lg">
        <div class = "fixed w-3/4 h-[4rem] py-5 shadow-lg shadow-slate-300 bg-white rounded-t-xl">
            <div class = "flex gap-10 justify-center text-xl">
                @lang('profile.new-quote')
            </div>
        </div>
        <div class = "w-fill h-[4rem] py-10"></div>    
        <form enctype="multipart/form-data" method = "post" action = "{{route('quotes-store', [app()->getLocale()])}}" class = "flex flex-col items-center w-full h-3/4 justify-center gap-10">
            @csrf
            <div class = "flex gap-5">
                <label for="text" class = "text-xl" >@lang('profile.text-en'):</label>    
                <input type="text" class = "border border-gray-700" name="en" id="en">
                @error('en')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class = "flex gap-5">
                <label for="text" class = "text-xl" >@lang('profile.text-ka'):</label>    
                <input type="text" class = "border border-gray-700" name="ka" id="ka">
                @error('ka')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
            
            <div class = "flex gap-5 items-center">
                <label for="movie_id" class = "text-xl">@lang('profile.choose-movie'):</label>
                <select name="movie_id" id="movie_id" class = "text-center py-3">
                    @foreach ($movies as $movie)
                        <option 
                            class = "flex justify-center"
                            value="{{$movie->id}}"
                        >
                            {{ $movie->title }} | {{ $movie->slug }}
                        </option>
                    @endforeach
                </select>
                @error('movie_id')
                    {{ $message }}
                @enderror
            </div>

            <div class = "flex gap-5 items-center">
                <label for="image" class = "text-xl">@lang('profile.upload-image'):</label>
                <input type="file" name="image" id="image">
                @error('image')
                    {{ $message }}
                @enderror
            </div>


            <x-submit-button text="profile.submit"/>
        </form>
        
        
    </div>
</x-layout>