@props(['name'])

<select name="{{ $name }}"{{ $attributes->merge(['class' => '']) }}>
    {{ $slot }}
</select>