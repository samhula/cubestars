<nav class="w-full bg-white shadow fixed top-0 z-50">
    <div class="mx-auto px-2 sm:px-6 lg:px-8 flex flex-row justify-between">
        <div class="w-full relative flex-row items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                Mobile menu button
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex flex-row gap-2 flex-shrink-0 items-center">
                    <div>
                        <img src="{{ asset('storage/images/cubestars.png') }}" alt="Logo" class="h-16 w-16 inline-block">
                    </div>
                    <a href="{{ url('/') }}" class="text-xl font-bold text-gray-900">{{ env('APP_NAME') }}</a>
                </div>
                <div class="hidden sm:block sm:ml-6 my-auto">
                    <div class="flex gap-4 my-auto">
                        <a href="{{ url('/') }}" class="text-gray-900 hover:bg-gray-200 px-3 py-2 rounded-md text-sm font-medium my-auto">Home</a>
                        <a href="{{ url('/about') }}" class="text-gray-900 hover:bg-gray-200 px-3 py-2 rounded-md text-sm font-medium my-auto">About</a>
                        <a href="{{ url('/contact') }}" class="text-gray-900 hover:bg-gray-200 px-3 py-2 rounded-md text-sm font-medium my-auto">Contact</a>
                        <x-forms.input-search name="search" id="search"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-auto flex flex-row gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
            </svg>
        </div>
    </div>  
</nav>