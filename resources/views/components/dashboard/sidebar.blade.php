

<div {{ $attributes->merge(['class' => 'sticky bg-neutral-700 shadow-md rounded-xl p-2 max-h-[89vh] overflow-y-auto no-scrollbar flex flex-col gap-1']) }}>
    <x-forms.input-search name="search" id="search" class="bg-neutral-400 focus:bg-neutral-300"/>
    <div class="flex flex-col gap-2 justify-between h-full">
        <div class="flex flex-col">
            <div class="bg-neutral-600 p-2 rounded-lg mb-2">
                <p class="text-white">Products</p>
            </div>
            <div class="bg-neutral-600 p-2 rounded-lg mb-2">
                <p class="text-white">Categories</p>
            </div>
            <div class="bg-neutral-600 p-2 rounded-lg mb-2">
                <p class="text-white">Users</p>
            </div>
            <div class="bg-neutral-600 p-2 rounded-lg mb-2">
                <p class="text-white">Filter option</p>
            </div>
        </div>
        <div>
            Logged in as Someone
        </div>
    </div>
</div>