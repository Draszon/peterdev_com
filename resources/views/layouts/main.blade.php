<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="description" content="
            Péter vagyok, hobbi programozó és
    	    webfejlesztő. Régebben Draszonként 
    	    ismerhettél YouTube-on és Twitchen, ahol gameplay 
    	    tartalmakat osztottam meg.">

        <meta name="keywords" content="webdesign, weboldal, készítés, design, kódolás, hobbi, dizájn, fejlesztés">
        <meta name="author" content="WEB-Peter">
        <meta name="robots" content="index, follow">

        <title>@yield('title', 'Péter')</title>

        <link rel="icon" type="image/png" href="{{ asset('images/page_logo.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-darkGreen bg-darkGreen scroll-smooth">
        <div class="fixed top-0 w-full bg-darkerGreen">
            <div class="flex justify-between p-2">
                <div class="flex">
                    <img src="{{ asset('images/logo_icon.svg') }}" alt="logo"
                        class="w-10">
                    <p class="font-ubuntu font-bold text-green flex items-center text-xl">Peter</p>
                </div>
                <div class="flex relative ml-auto w-10 h-10 cursor-pointer">
                    <img id="menu-closed" src="{{ asset('images/menu_icons/hamburger-menu-closed.svg') }}" alt="hamburger menu"
                        class="w-10 absolute top-0 left-0">
                    <img id="menu-opened" src="{{ asset('images/menu_icons/hamburger-menu-opened.svg') }}" alt="hamburger menu"
                        class="w-10 absolute top-0 left-0 hidden">
                </div>
            </div>
        </div>

        <div id="nav-menu" class="h-0 overflow-hidden">
            <nav class="bg-darkerGreen mt-14 py-5 text-white font-ubuntu w-full flex flex-col items-center">
                <div class="flex justify-start gap-4 py-5 w-1/2 border-b">
                    <img src="{{ asset('images/menu_icons/home.svg') }}" alt="Főoldal ikon"
                    class="w-8">
                    <p class="content-center">Főoldal</p>
                </div>
                <div class="flex justify-start gap-4 py-3 w-1/2 border-b">
                    <img src="{{ asset('images/menu_icons/me.svg') }}" alt="Főoldal ikon"
                    class="w-8">
                    <p class="content-center">Rólam</p>
                </div>
                <div class="flex justify-start gap-4 py-3 w-1/2 border-b">
                    <img src="{{ asset('images/menu_icons/tech.svg') }}" alt="Főoldal ikon"
                    class="w-8">
                    <p class="content-center">Technológiák</p>
                </div>
                <div class="flex justify-start gap-4 py-3 w-1/2 border-b">
                    <img src="{{ asset('images/menu_icons/project.svg') }}" alt="Főoldal ikon"
                    class="w-8">
                    <p class="content-center">Projektek</p>
                </div>
                <div class="flex justify-start gap-4 py-3 w-1/2 border-b">
                    <img src="{{ asset('images/menu_icons/study.svg') }}" alt="Főoldal ikon"
                    class="w-8">
                    <p class="content-center">Tanulmányok</p>
                </div>
                <div class="flex justify-start gap-4 py-3 w-1/2 border-b">
                    <img src="{{ asset('images/menu_icons/contact.svg') }}" alt="Főoldal ikon"
                    class="w-8">
                    <p class="content-center">Elérhetőségek</p>
                </div>
            </nav>
            <div>
                <img src="{{ asset('images/menu_icons/menu_divider.svg') }}" alt="Menü határoló">
            </div>
        </div>

        <main>
            @yield('content')
        </main>
    </body>
</html>
