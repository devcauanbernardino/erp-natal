@props(['label', 'name', 'type' => 'text'])
<div class="mb-4">
    <label for="{{ $name }}" class="mb-1 block text-sm font-medium text-ink">{{ $label }}</label>
    <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}"
           value="{{ $type === 'password' ? '' : old($name) }}"
           {{ $attributes->merge(['class' => 'input']) }}>
    @error($name)
        <p class="mt-1 text-sm text-berry">{{ $message }}</p>
    @enderror
</div>
