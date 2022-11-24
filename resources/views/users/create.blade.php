<x-layout>
    <form action="{{ route('login', [app()->getLocale()]) }}" method="post" class = "flex flex-col justify-center bg-white p-[5rem] rounded-lg w-[40rem] h-[27rem]">
        @csrf
        <div class = "flex flex-col mb-4">

            <label for="username" class = "text-black text-lg mb-2">
                @lang('profile.username')
            </label>
            <input 
                required 
                class = "text-2xl rounded p-2 border-2 border-black" 
                type = "text" 
                id = "username"
                name = "username"
            >
            @error('username')
                <p class = "text-red-500 text-s mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class = "flex flex-col mb-4">

            <label for="password" class = "text-black text-lg mb-2">
                @lang('profile.password')
            </label>
            <input 
                required 
                class = "text-2xl rounded p-2 border-2 border-black" 
                type = "password" 
                id = "password"
                name = "password"
            >
            @error('password')
                <p class = "text-red-500 text-s mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class = "flex flex-col mb-4">
            <button type="submit" class = "w-[7rem] box-border text-2xl bg-black text-white rounded">@lang('profile.login')</button>
        </div>

    </form>
</x-layout>