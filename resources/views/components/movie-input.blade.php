@props(['value', 'name', 'language', 'id', 'text'])

<label for="{{ $id }}" class = "text-xl">@lang($language)</label>
@if (strlen($value))
    <input required value = {{ $value }} class = "rounded py-1 px-[0.75rem] text-[1.2rem] border border-gray-700" id = "{{ $id }}" name = "{{ $name }}" type="text">
    @error($name)
        <p class="text-red-500">{{ $message }}</p>
    @enderror
@else
    <input required value = '' class = "rounded py-1 px-[0.75rem] text-[1.2rem] border border-gray-700" id = "{{ $id }}" name = "{{ $name }}" type="text">
    @error($name)
        <p class="text-red-500">{{ $message }}</p>
    @enderror
@endif
