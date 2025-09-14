<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
         <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow">

        <meta property="og:type" content="website">
        <meta property="og:title" itemprop="name" content="Maagiri Hotel – Leading city hotel in Male’, Maldives">
        <meta property="og:site_name" content="Maagiri">
        <meta property="og:url" content="{{ url('/') }}"/>
        <meta property="og:image" content="{{ url('images/logo_desktop.svg') }}">
        <meta property="og:description" content="Maagiri Hotel – leading city hotel in Male’, Maldives is located in one of the premier locations in Male’ conveniently opposite of Airport/ Hulhumale’ FerryTerminal. Set against a scenic backdrop of the surrounding ocean, Maagiri Hotel provides a 4-star accommodation to complement its excellent service." />

        <meta itemprop="image" content="{{ url('images/logo_desktop.svg') }}">
        <meta name="description" content="Maagiri Hotel – Leading city hotel in Male’, Maldives is located in one of the premier locations in Male’ conveniently opposite of Airport/ Hulhumale’ FerryTerminal. Set against a scenic backdrop of the surrounding ocean, Maagiri Hotel provides a 4-star accommodation to complement its excellent service.">
        <meta name="keywords" content="Maagiri hotel, Maldives Hotels, Maldives, Maagiri, Male City Hotels, Male City, Hotels Maldives, City Hotels, Stay in Maldives, Stay, Holiday, Conference Hotel, Restaurant Maldives">
        <meta name="twitter:description" content="Maagiri Hotel – leading city hotel in Male’, Maldives is located in one of the premier locations in Male’ conveniently opposite of Airport/ Hulhumale’ FerryTerminal. Set against a scenic backdrop of the surrounding ocean, Maagiri Hotel provides a 4-star accommodation to complement its excellent service.">
        <meta name="twitter:title" content="Maagiri Hotel – Leading city hotel in Male’, Maldives">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@maagiri">
        <meta name="twitter:creator" content="@maagiri">

        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon/favicon/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="/manifest.json">

        <title inertia>{{ config('app.name', 'Maagiri Hotel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- <link rel='stylesheet prefetch' href="/css/bootstrap.min.css">
        <link rel='stylesheet prefetch' href="/css/maagiri-layout.css"> -->

        <title>Maagiri City Hotel Maldives</title>

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
    <style>
        @font-face {
            font-family: "Freight_Neo_Pro";
            src: url(../fonts/Freight_Neo_Pro.otf) format("opentype");
        }
    </style>
</html>
