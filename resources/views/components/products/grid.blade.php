@props(['products'])

<div {{ $attributes->merge(['class' => 'grid grid-cols-12 gap-4']) }}>
    @if(count($products) > 0)
        @foreach($products as $product)
            <x-products.card :product="$product" />
        @endforeach
    @else 
        <div class="col-span-12 text-center p-4">
            <p class="text-gray-500">No products found.</p>
        </div>  
    @endif
</div>