@props(['products', 'messages'])

<x-utils.layout :messages=$messages>
    <div class="grid grid-cols-12 gap-4 p-4">
        <x-products.filters class="col-span-12 md:col-span-3 xl:col-span-2"/>
        @if(isset($products))
            <x-products.grid :products="$products" class="col-span-12 md:col-span-9 xl:col-span-10" />
        @else 
            <div class="col-span-12 text-center p-4">
                <p class="text-gray-500">No products found.</p>
            </div>  
        @endif
    </div>
    @vite(['resources/js/radio.js', 'resources/js/checkbox.js'])
</x-utils.layout>