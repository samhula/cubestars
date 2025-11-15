@props(['product', 'messages'])

@if(!isset($messages))
    @php
        $messages = [];
    @endphp
@endif

<x-utils.layout :messages=$messages>
    <div class="container mx-auto gap-4 p-4">
        @if(!empty($product))
            <x-products.big-card :product="$product" />
        @else 
            <div class="col-span-12 text-center p-4">
                <p class="text-gray-500">No product information found.</p>
            </div>  
        @endif
    </div>
    @vite(['resources/js/radio.js', 'resources/js/checkbox.js'])
</x-utils.layout>