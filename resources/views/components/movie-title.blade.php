@php
    $route = route('movie', [app()->getLocale(), $movies->slug]);
@endphp
<h1 
    {{ $attributes->merge(['class' => 'text-white text-5xl']) }}
>
    @if ( !request()->is($route) )
        <a href="{{ $route }}">{{ $movies->title }}</a>
    @else
        {{ $movies->title }}
    @endif
    
</h1>