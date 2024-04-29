<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Bibliotex' }}</title>
    </head>
    <body style="background: #ffe7e8;">
        {{ $slot }}
    </body>
</html>
