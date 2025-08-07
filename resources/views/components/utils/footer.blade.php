<footer class="w-full bg-gray-800 text-white py-4">
    <div class="mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row justify-between items-center">
        <div class="flex items-center mb-2 sm:mb-0">
            <img src="{{ asset('storage/images/cubestars.png') }}" alt="Logo" class="h-8 w-8 inline-block mr-2">
            <span class="text-lg font-bold">{{ env('APP_NAME') }}</span>
        </div>
        <div class="flex flex-col sm:flex-row gap-4">
            <a href="{{ url('/') }}" class="text-gray-300 hover:text-white">Home</a>
            <a href="{{ url('/about') }}" class="text-gray-300 hover:text-white">About</a>
            <a href="{{ url('/contact') }}" class="text-gray-300 hover:text-white">Contact</a>
        </div>
        <div class="mt-2 sm:mt-0">
            <p class="text-sm text-gray-400">© {{ date('Y') }} {{ env('APP_NAME') }}. All rights reserved.</p> 
        </div>
    </div>
</footer>