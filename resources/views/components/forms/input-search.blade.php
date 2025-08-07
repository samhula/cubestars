@props(['name', 'id'])

<input type="text" name="{{ $name }}" id="{{ $id }}" placeholder="Search..." aria-label="Search input" 
{{ $attributes->merge(['class' => 'w-full p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500']) }}>
