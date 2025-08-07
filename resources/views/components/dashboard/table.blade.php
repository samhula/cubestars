@props(['items'])

@if(count($items) > 0)
    <div {{ $attributes->merge(['class' => 'class="col-span-12 md:col-span-9 xl:col-span-10 flex flex-col']) }}>
        @foreach($items as $item)
            <x-dashboard.row :item="$item" />
        @endforeach
    </div>
@endif