<div {{ $attributes->merge(['class' => 'sticky top-20 bg-white shadow-md rounded-xl p-2 max-h-[89vh] overflow-y-auto no-scrollbar hidden md:flex md:flex-col']) }}>
    <x-forms.form action="{{ url('/search') }}" method="GET" class="gap-2">
        <p class="text-neutral-500 text-lg font-semibold p-2">Sort By</p>
        <div class="flex flex-col gap-2">
            <div class="flex flex-row gap-1 rounded-xl p-2 transition-all duration-30">
                <x-forms.input-radio id="trending" name="sort" value="trending"/>
                <x-forms.label for="trending" class="radio-select select-none text-sm font-semibold text-neutral-900">Trending</x-forms.label>
            </div>
            <div class="flex flex-row gap-1 rounded-xl p-2 transition-all duration-30">
                <x-forms.input-radio id="lowest" name="sort" value="lowest"/>
                <x-forms.label for="lowest" class="radio-select select-none text-sm font-semibold text-neutral-900">Lowest Price</x-forms.label>
            </div>
            <div class="flex flex-row gap-1 rounded-xl p-2 transition-all duration-30">
                <x-forms.input-radio id="highest" name="sort" value="highest"/>
                <x-forms.label for="highest" class="radio-select select-none text-sm font-semibold text-neutral-900">Highest Price</x-forms.label>
            </div>
            <div class="flex flex-row gap-1 rounded-xl p-2 transition-all duration-30">
                <x-forms.input-radio id="most-popular" name="sort" value="most-popular"/>
                <x-forms.label for="most-popular" class="radio-select select-none text-sm font-semibold text-neutral-900">Most Popular</x-forms.label>
            </div>
            <div class="flex flex-row gap-1 rounded-xl p-2 transition-all duration-30">
                <x-forms.input-radio id="rating" name="rating" value="rating"/>
                <x-forms.label for="rating" class="radio-select select-none text-sm font-semibold text-neutral-900">Rating</x-forms.label>
            </div>
        </div>
        <hr class="border-neutral-200">
        <p class="text-neutral-500 text-lg font-semibold p-2">Categories</p>
        <div class="flex flex-col gap-2">
            <div class="flex flex-row gap-1 rounded-xl p-2 transition-all duration-30">
                <x-forms.input-checkbox id="2x2" name="2x2" checked=""/>
                <x-forms.label for="2x2" class="checkbox-select select-none text-sm">2x2</x-forms.label>
            </div>
            <div class="flex flex-row gap-1 rounded-xl p-2 transition-all duration-30">
                <x-forms.input-checkbox id="3x3" name="3x3" checked=""/>
                <x-forms.label for="3x3" class="checkbox-select select-none text-sm">3x3</x-forms.label>
            </div>
            <div class="flex flex-row gap-1 rounded-xl p-2 transition-all duration-30">
                <x-forms.input-checkbox id="4x4" name="4x4" checked=""/>
                <x-forms.label for="4x4" class="checkbox-select select-none text-sm">4x4</x-forms.label>
            </div>
            <div class="flex flex-row gap-1 rounded-xl p-2 transition-all duration-30">
                <x-forms.input-checkbox id="5x5" name="5x5" checked=""/>
                <x-forms.label for="5x5" class="checkbox-select select-none text-sm">5x5</x-forms.label>
            </div>
        </div>
        <hr class="border-neutral-200">
        <p class="text-neutral-500 text-lg font-semibold p-2">Brands</p>
        <div class="flex flex-col gap-2">
            <div class="flex flex-row gap-1 rounded-xl p-2 transition-all duration-30">
                <x-forms.input-checkbox id="brand-1" name="brand-1" checked=""/>
                <x-forms.label for="brand-1" class="checkbox-select select-none text-sm">brand 1</x-forms.label>
            </div>
            <div class="flex flex-row gap-1 rounded-xl p-2 transition-all duration-30">
                <x-forms.input-checkbox id="brand-2" name="brand-2" checked=""/>
                <x-forms.label for="brand-2" class="checkbox-select select-none text-sm">brand 2</x-forms.label>
            </div>
            <div class="flex flex-row gap-1 rounded-xl p-2 transition-all duration-30">
                <x-forms.input-checkbox id="brand-3" name="brand-3" checked=""/>
                <x-forms.label for="brand-3" class="checkbox-select select-none text-sm">brand 3</x-forms.label>
            </div>
            <div class="flex flex-row gap-1 rounded-xl p-2 transition-all duration-30">
                <x-forms.input-checkbox id="brand-4" name="brand-4" checked=""/>
                <x-forms.label for="brand-4" class="checkbox-select select-none text-sm">brand 4</x-forms.label>
            </div>
        </div>
    </x-forms.form>
</div>