<x-utils.layout :products="$products">
    <x-utils.nav />
    <div class="grid grid-cols-12 gap-4 p-4">
        <x-dashboard.sidebar class="col-span-12 md:col-span-3 xl:col-span-2"/>
        <x-dashboard.table :items=$products/>
    </div>
</x-utils.layout>