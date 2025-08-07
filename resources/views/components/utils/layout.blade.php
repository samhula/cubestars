@props(['products'])

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
    </body>
</html>
