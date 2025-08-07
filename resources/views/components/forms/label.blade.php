@props(['for'])

<label for="{{ $for }}" {{ $attributes->merge(['class' => 'w-full']) }}> 
    {{ $slot }} 
</label>