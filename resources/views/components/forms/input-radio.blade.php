@props(['id', 'name', 'value'])

<input type="radio" id="{{ $id }}" name="{{ $name }}" value="{{ $value }}" {{ $attributes->merge(['class' => 'hidden']) }}>