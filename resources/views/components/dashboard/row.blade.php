@props(['item'])

<div {{ $attributes->merge(['class' => 'flex flex-row gap-2 w-full bg-white hover:bg-neutral-100 transition-all border-b border-x border-gray-200 p-4']) }}>
    <div>
        {{ $item->id }}
    </div>
    <div>
        {{ $item->name }}
    </div>
</div>