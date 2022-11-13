<div class = "fixed top-0 right-0 px-10 py-2 flex gap-6">
    <a 
        href = "/dashboard"
        class = "text-[1.4rem] text-white underline hover:text-red-400"
    >
        Dashboard
    </a>
    <form 
        action="/logout" 
        method="post"
    >
        @csrf
        <button 
            type="submit"
            class = "text-[1.4rem] text-white underline hover:text-red-400"
        >
            Log Out
        </button>
    </form>
</div>