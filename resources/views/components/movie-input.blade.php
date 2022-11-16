@props(['value', 'name', 'language', 'id', 'text'])

<label for="{{ $name }}" class = "text-xl">Movie {{ ucwords($text) }} in {{ $language }}</label>
@if (strlen($value))
    <input value = {{ $value }} class = "border border-gray-700" id = "{{ $id }}" name = "{{ $name }}" type="text">
@else
    <input value = '' class = "border border-gray-700" id = "{{ $id }}" name = "{{ $name }}" type="text">
@endif
@error('{{ $name }}')
    {{ $message }}
@enderror