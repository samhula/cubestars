@props(['products'])

<div {{ $attributes->merge(['class' => 'grid grid-cols-12 gap-4']) }}>
    @foreach($products as $product)
        <x-products.card :product="$product" />
    @endforeach
</div>