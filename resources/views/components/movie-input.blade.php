@props(['value', 'name'])

<label for="{{ $name }}" class = "text-xl">Movie {{ ucwords($name) }}</label>
@if (strlen($value))
    <input value = {{ $value }} class = "border border-gray-700" id = "{{ $name }}" name = "{{ $name }}" type="text">
@else
    <input value = '' class = "border border-gray-700" id = "{{ $name }}" name = "{{ $name }}" type="text">
@endif
@error('{{ $name }}')
    {{ $message }}
@enderror