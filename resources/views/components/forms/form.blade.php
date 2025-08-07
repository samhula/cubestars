@props(['name', 'id', 'method', 'action'])

<form action="{{ $action }}" method="{{ $method }}" {{ $attributes->merge(['class' => 'flex flex-col']) }}>
    @csrf
    @method($method) 
    {{ $slot }}
</form>