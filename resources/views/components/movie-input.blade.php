@props(['value', 'name', 'language', 'id', 'text'])

<label for="{{ $id }}" class = "text-xl">@lang($language)</label>
@if (strlen($value))
    <input required value = {{ $value }} class = "border border-gray-700" id = "{{ $id }}" name = "{{ $name }}" type="text">
    @error($name)
        <p class="text-red-500">{{ $message }}</p>
    @enderror
@else
    <input required value = '' class = "border border-gray-700" id = "{{ $id }}" name = "{{ $name }}" type="text">
    @error($name)
        <p class="text-red-500">{{ $message }}</p>
    @enderror
@endif
