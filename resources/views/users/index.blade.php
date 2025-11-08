@props(['products', 'messages'])

<x-utils.layout>
    <div class="flex flex-row p-4 bg-white shadow-lg rounded-4xl max-h-fit mx-auto min-h-screen">
        <form action="" method="POST" class="mx-auto w-full">
            @csrf
            @method('POST')
            <h3 class="text-3xl font-semibold text-center text-neutral-800">Sign Up</h3>
        </form>
    </div>
</x-utils.layout>