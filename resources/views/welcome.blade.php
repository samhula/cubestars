@props(['products', 'messages'])

<x-utils.layout :products=$products :messages=$messages>
    <x-utils.nav />
    <div class="grid grid-cols-12 gap-4 p-4">
        <x-products.filters class="col-span-12 md:col-span-3 xl:col-span-2"/>
        <x-products.grid :products="$products" class="col-span-12 md:col-span-9 xl:col-span-10" />
    </div>
    @vite(['resources/js/radio.js', 'resources/js/checkbox.js'])
</x-utils.layout>