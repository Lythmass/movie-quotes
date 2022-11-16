@props(['text'])
<button 
    type="submit" 
    class = "py-[0.25rem] px-[1rem] text-xl rounded hover:bg-gray-800
    bg-black text-white"
>
    @lang($text)
</button>