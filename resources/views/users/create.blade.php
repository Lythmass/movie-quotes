<x-layout>
    <form action="{{ route('login') }}" method="post" class = "bg-white p-[4rem] rounded-lg">
        @csrf
        <div class = "flex flex-col mb-4">

            <label for="username" class = "text-black text-lg mb-2">
                Username
            </label>
            <input 
                required 
                class = "text-2xl rounded p-2 border-2 border-black" 
                type = "text" 
                id = "username"
                name = "username"
            >
            @error('username')
                <p class = "text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class = "flex flex-col mb-4">

            <label for="password" class = "text-black text-lg mb-2">
                Password
            </label>
            <input 
                required 
                class = "text-2xl rounded p-2 border-2 border-black" 
                type = "password" 
                id = "password"
                name = "password"
            >
            @error('password')
                <p class = "text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class = "flex flex-col mb-4">
            <button type="submit" class = "w-[7rem] box-border text-2xl bg-black text-white rounded">Log In</button>
        </div>

    </form>
</x-layout>