@props(['products', 'messages'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ env('APP_NAME') . ' - UK Speedcube shop'}}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-100">
        <x-utils.nav />
        <div class="mt-16">
            {{ $slot }}
        </div>
        <x-utils.footer />
        @if(isset($messages))
            <div class="flex flex-col gap-2 fixed bottom-2 right-2 z-50">
                @foreach($messages as $message)
                    <div class="bg-pink-200 p-2 shadow rounded">
                        {{ $message->message }}
                    </div>
                @endforeach
            </div>
        @endif
    </body>
</html>
