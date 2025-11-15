<!-- Product Page Design -->
<div class="max-w-6xl mx-auto p-6 grid grid-cols-1 lg:grid-cols-2 gap-10">
    <!-- Image Gallery -->
    <div class="flex flex-col gap-4">
        <img src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-96 object-contain rounded-3xl shadow-md bg-white p-4" />
    </div>

    <!-- Product Details -->
    <div class="flex flex-col gap-6">
        <h1 class="text-4xl font-bold text-neutral-800">{{ $product->name }}</h1>

        <!-- Rating -->
        @if($product->rating)
        <div class="flex flex-row items-center gap-2">
            @for($i = 0; $i < $product->rating; $i++)
                <svg xmlns="http://www.w3.org/2000/svg" fill="#f2d518" viewBox="0 0 24 24" stroke="#f2d518" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                </svg>
            @endfor
        </div>
        @endif

        <!-- Price -->
        <p class="text-3xl font-bold text-green-600">£{{ number_format($product->price, 2) }}</p>

        <!-- Description -->
        <p class="text-gray-600 leading-relaxed">{{ $product->description }}</p>

        <!-- Stock + Buy Section -->
        <div class="flex flex-col gap-4">
            @if($product->stock_quantity > 0)
            <form action="{{ url('/') }}" method="POST" class="flex flex-col gap-4">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">

                <div class="flex items-center gap-2">
                    <span class="font-semibold">Quantity:</span>
                    <input type="number" name="quantity" value="1" min="1" max="{{ $product->stock_quantity }}" class="w-20 border border-gray-300 rounded-lg p-2 text-center">
                </div>

                <button class="bg-green-600 text-white px-6 py-3 rounded-2xl shadow hover:bg-green-500 transition flex items-center gap-2 w-fit">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                    </svg>
                    Add to Cart
                </button>
            </form>
            @else
                <div class="text-red-600 font-bold text-lg">Out of Stock</div>
            @endif
        </div>

        <!-- Stock Alerts -->
        <div class="flex flex-col gap-2 mt-4">
            @php $randomNumber = rand(1,6); @endphp

            @if($randomNumber % 2 == 0)
                <div class="bg-blue-100 text-blue-700 px-4 py-2 rounded-xl w-fit text-sm">
                    {{ $randomNumber }} bought in the last 24 hours 🔥
                </div>
            @endif

            @if($product->stock_quantity < 3 && $product->stock_quantity > 0)
                <div class="bg-red-100 text-red-700 px-4 py-2 rounded-xl w-fit text-sm">
                    Only {{ $product->stock_quantity }} left in stock!
                </div>
            @endif
        </div>

    </div>
</div>

@vite(['resources/js/quantity.js'])
