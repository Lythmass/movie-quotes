<h1 
    {{ $attributes->merge(['class' => 'text-white text-5xl']) }}
>
    
    {!! !request()->is('movie/'.$movies->slug) ? '<a href="movie/'.$movies->slug.'">'.$movies->title.'</a>' : $movies->title!!}
    
</h1>