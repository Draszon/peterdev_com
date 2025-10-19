<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
        <div class="fixed top-0 w-full z-10 bg-darkerGreen/80 backdrop-blur-md">
            <div class="flex justify-between h-16 xl:max-w-[1200px] xl:mx-auto">
                <div class="flex">
                    <img src="{{ asset('images/logo_icon.svg') }}" alt="logo"
                        class="w-10">
                    <p class="font-ubuntu font-bold text-green flex items-center text-xl">Peter</p>
                </div>
                <div class="flex relative ml-auto w-10 h-10 cursor-pointer md:hidden">
                    <img id="menu-closed" src="{{ asset('images/menu_icons/hamburger-menu-closed.svg') }}" alt="hamburger menu"
                        class="w-10 absolute top-3 left-0">
                    <img id="menu-opened" src="{{ asset('images/menu_icons/hamburger-menu-opened.svg') }}" alt="hamburger menu"
                        class="w-10 absolute top-3 left-0 hidden">
                </div>
                <div class="hidden text-white font-ubuntu md:flex md:items-center">
                    <ul class="flex flex-row h-full">
                        <li class="h-full hover:bg-green hover:text-darkGreen transition delay-75 rounded-sm"><a class="mx-3 h-full flex items-center" href="#">Főoldal</a></li>
                        <li class="h-full hover:bg-green hover:text-darkGreen transition delay-75 rounded-sm"><a class="mx-3 h-full flex items-center" href="#about-me">Rólam</a></li>
                        <li class="h-full hover:bg-green hover:text-darkGreen transition delay-75 rounded-sm"><a class="mx-3 h-full flex items-center" href="#tech-stack">Technológiák</a></li>
                        <li class="h-full hover:bg-green hover:text-darkGreen transition delay-75 rounded-sm"><a class="mx-3 h-full flex items-center" href="#projects">Projektek</a></li>
                        <li class="h-full hover:bg-green hover:text-darkGreen transition delay-75 rounded-sm"><a class="mx-3 h-full flex items-center" href="#timeline">Tanulmányok</a></li>
                        <li class="h-full hover:bg-green hover:text-darkGreen transition delay-75 rounded-sm"><a class="mx-3 h-full flex items-center" href="#contacts">Elérhetőségek</a></li>
                    </ul>
                </div>
            </div>

            <div id="nav-menu" class="overflow-hidden h-0 z-10">
                <nav class=" pb-10 text-white font-ubuntu w-full flex flex-col items-center">
                    <a href="#" class="nav-menu flex justify-start gap-4 py-5 w-1/2 border-b">
                        <img src="{{ asset('images/menu_icons/home.svg') }}" alt="Főoldal ikon"
                        class="w-8">
                        <p class="content-center">Főoldal</p>
                    </a>
                    <a href="#about-me" class="nav-menu flex justify-start gap-4 py-3 w-1/2 border-b">
                        <img src="{{ asset('images/menu_icons/me.svg') }}" alt="Főoldal ikon"
                        class="w-8">
                        <p class="content-center">Rólam</p>
                    </a>
                    <a href="#tech-stack" class="nav-menu flex justify-start gap-4 py-3 w-1/2 border-b">
                        <img src="{{ asset('images/menu_icons/tech.svg') }}" alt="Főoldal ikon"
                        class="w-8">
                        <p class="content-center">Technológiák</p>
                    </a>
                    <a href="#projects" class="nav-menu flex justify-start gap-4 py-3 w-1/2 border-b">
                        <img src="{{ asset('images/menu_icons/project.svg') }}" alt="Főoldal ikon"
                        class="w-8">
                        <p class="content-center">Projektek</p>
                    </a>
                    <a href="#timeline" class="nav-menu flex justify-start gap-4 py-3 w-1/2 border-b">
                        <img src="{{ asset('images/menu_icons/study.svg') }}" alt="Főoldal ikon"
                        class="w-8">
                        <p class="content-center">Tanulmányok</p>
                    </a>
                    <a href="#contacts" class="nav-menu flex justify-start gap-4 py-3 w-1/2 border-b">
                        <img src="{{ asset('images/menu_icons/contact.svg') }}" alt="Főoldal ikon"
                        class="w-8">
                        <p class="content-center">Elérhetőségek</p>
                    </a>
                </nav>
            </div>
        </div>

        <main>
            @yield('content')
        </main>

        <footer class="h-20 flex items-center justify-center text-white text-sm bg-darkerGreen">
            <p>© <span id="footer-year"></span> DRASZON | Minden jog fenntartva.</p>
        </footer>
    </body>
</html>
