<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>

        {{-- SORA FONT HERE --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700&display=swap" rel="stylesheet">

        {{-- Standard CSS & JS for Jigsaw --}}
        <link rel="stylesheet" href="/assets/build/css/main.css">
        <script defer src="/assets/build/js/main.js"></script>
    </head>
    
    {{-- specific font --}}
    <body class="text-gray-900 antialiased" style="font-family: 'Sora', sans-serif;">
        @yield('body')
    </body>
</html>