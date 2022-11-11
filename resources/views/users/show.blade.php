<x-layout>
    <form action="/" method="post" class = "bg-white p-[4rem] rounded-lg">

        <div class = "flex flex-col mb-4">

            <label for="username" class = "text-black text-lg mb-2">
                Username
            </label>
            <input class = "text-2xl rounded p-2 border-2 border-black" type = "text" id = "username">
        </div>

        <div class = "flex flex-col mb-4">

            <label for="password" class = "text-black text-lg mb-2">
                Password
            </label>
            <input class = "text-2xl rounded p-2 border-2 border-black" type = "password" id = "password">
        </div>

        <div class = "flex flex-col mb-4">
            <button class = "w-[7rem] box-border text-2xl bg-black text-white rounded">Log In</button>
        </div>

    </form>
</x-layout>