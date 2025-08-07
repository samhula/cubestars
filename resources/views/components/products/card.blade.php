@props(['product'])

<div class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-3 p-4 bg-white shadow-lg rounded-4xl max-h-fit hover:-translate-y-1 transition-all duration-200 hover:ring ring-blue-300 relative select-none">
    <img src="{{ asset('storage/images/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-48 object-contain mt-8">
    <div class="p-4 flex flex-col gap-2">
        <h3 class="text-3xl font-semibold text-center text-neutral-800">{{ $product->name }}</h3>
        <p class="text-lg text-gray-500 text-center">{{ $product->description }}</p>
        <p class="text-2xl text-center font-bold text-neutral-800">£{{ number_format($product->price, 2) }}</p>
        <div class="flex flex-row gap-2">
            @if($product->stock_quantity > 0)
                <div class="flex flex-rowv w-full">
                    <form action="{{ url('/') }}" method="POST" class="flex flex-row mx-auto">
                        @csrf
                        <div class="flex flex-row ">
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="number" name="quantity" id="quantity" value="1" class="w-[40px] border border-gray-300 rounded-l-lg p-1 text-center [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none" min="1" max="{{ $product->stock_quantity }}">
                            <div class="flex flex-col hover:pointer text-white -translate-x-1.5">
                                <div class="bg-blue-500 p-1 quantity-btn increase rounded-tr-lg hover:cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>
                                </div>
                                <div class="bg-blue-500 p-1 quantity-btn decrease rounded-br-lg hover:cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="w-full bg-green-500 px-4 py-2 rounded-xl text-white flex flex-row gap-2  hover:cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                            </svg>
                            <p>Add to Cart</p>
                        </button>
                    </form>
                </div>
            @else
                <div class="w-full bg-red-500 px-4 py-2 rounded-xl text-white text-center my-auto">Out of Stock</div>
            @endif
        </div>
        <a href="{{ url('/products/' . $product->id) }}" class="text-blue-500 hover:underline text-center mt-2  hover:cursor-pointer">View Details</a>
    </div>
    <div class="absolute top-4 right-4 flex flex-col gap-2">
        @php
            $randomNumber = rand(1, 6);
        @endphp
        @if($randomNumber % 2 == 0)
            <div class="bg-blue-400 text-white p-2 rounded-full text-xs w-fit ml-auto ">
                {{ $randomNumber }} bought in the past 24 hours 🔥
            </div>
        @endif
        @if($product->stock_quantity < 3 && $product->stock_quantity > 0)
            <div class="bg-red-400 text-white p-2 rounded-full text-xs w-fit ml-auto ">
                Only {{ $product->stock_quantity }} left in stock!
            </div>
        @endif
    </div>
</div>

@vite(['resources/js/quantity.js'])