<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>{{ucwords(str_replace('.', ' ', \Route::currentRouteName()))}} - Mosque</title>
        <meta name="description" content="">
        <meta name="keywords" content="">

        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    {{--    CSS--}}
        <x-home.header_link/>
        <meta name="csrf-token" content="{{ csrf_token() }}" />

    </head>

    <body class="index-page">
        @include('layouts.home._header')
        <main class="main">
            @yield('mainContent')
        </main>
        @include('layouts.home._footer')
        <!-- Scroll Top -->
        <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
        <!-- Preloader -->
        <div id="preloader"></div>
        <!-- Vendor JS Files -->
        <x-home.footer_link/>
    </body>
</html>
