<x-layout>
    <div class = "flex flex-col w-3/4 h-[35rem] bg-white rounded-xl shadow-lg">
        <div class = "fixed w-3/4 h-[4rem] py-5 shadow-lg shadow-slate-300 bg-white rounded-t-xl">
            <div class = "flex gap-10 justify-center text-xl">
                Create New Movie
            </div>
        </div>
        <div class = "w-fill h-[4rem] py-10"></div>    
        <form method = "post" action = "{{route('movies-store')}}" class = "flex flex-col items-center w-full h-3/4 justify-evenly">
            @csrf
            <x-movie-input value="" name="title"/>
            <x-movie-input value="" name="slug"/>
            <x-submit-button text="Submit"/>
        </form>
        
        
    </div>
</x-layout>