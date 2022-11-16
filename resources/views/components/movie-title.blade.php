@php
    $route = route('movie', [$locale, $movies->slug]);
@endphp
<h1 
    {{ $attributes->merge(['class' => 'text-white text-5xl']) }}
>
    
    {!! !request()->is($route) ? '<a href='.$route.'>'.$movies->getTranslations('title')[$locale].'</a>' : $movies->getTranslations('title')[$locale] !!}
    
</h1>