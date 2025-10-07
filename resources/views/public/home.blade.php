@extends('layouts.main')

@section('title', 'Péter - Főoldal')

@section('content')
<header class="mt-20 text-white">
    <div class="mx-2">
        <div class="mb-10">
            <div class="font-bold font-ubuntu text-2xl">
                <h1><span class="text-orange">&lt;</span> Szia, Péter vagyok <span class="text-orange">/&gt;</span></h1>
                <h2 class="text-lg text-green"><span class="text-orange">{</span> Junior webfejlesztő <span class="text-orange">}</span></h2>
            </div>
            <div class="my-10">
                <p>
                    Ez pedig a portfólió oldalam, ahol bemutatom az eddigi
                    projektjeimet és tanulmányaimat. Laravel, TailwindCSS és 
                    JavaScript alapokon építek reszponzív, modern weboldalakat.
                </p>
            </div>
            <div class="flex flex-row gap-5 justify-center">
                <a href="#" class="
                    py-2 px-5 transition duration-300 bg-green hover:bg-lightGreen hover:text-darkGreen rounded-full">Munkáim</a>
                <a href="#" class="
                    py-2 px-5 transition duration-300 bg-green hover:bg-lightGreen hover:text-darkGreen rounded-full">Kapcsolat</a>
            </div>
        </div>
        <div class="flex justify-center">
            <img src="{{ asset('images/icons/me.svg') }}" alt="Fényképem" class="h-48">
        </div>
    </div>
</header>

<section class="text-darkerGreen bg-white my-10 py-10 px-2">
    <div>
        <div class="flex justify-center">
            <img src="{{ asset('images/icons/me_programming.svg') }}" alt="programming icon" class="h-48">
        </div>
        <div>
            <h2 class="font-bold font-ubuntu text-2xl mt-10 mb-5 text-center"><span class="text-orange">&lt;</span> Ismerj meg <span class="text-orange">/&gt;</span></h2>
            <p>
                Főállásban rendszerüzemeltetéssel foglalkozom, ahol Linux-alapú rendszerek stabil,
                biztonságos működéséért felelek. Ez a háttér fontos alapot ad a technikai szemléletemhez,
                de ami igazán lelkesít, az a webfejlesztés.
                A kódolás számomra nemcsak eszköz, hanem kreatív eszköz – szeretek ötleteket megvalósítani, 
                unkciókat tervezni és működő webalkalmazásokat építeni. A fejlesztés világa számomra egy
                izgalmas terep, ahol mindig van mit tanulni és fejleszteni.
                Ez az oldal is ennek a szenvedélyemnek a része: gyakorlás, tanulás és önkifejezés egyben.
            </p>
        </div>
    </div>
</section>

<section class="text-darkerGreen bg-darkGreen my-10 py-10 px2">
    <div>
        <div>
            <h2 class="font-bold font-ubuntu text-2xl mb-5 text-center text-white">
                <span class="text-orange">&lt;</span> Tech Stack <span class="text-orange">/&gt;</span>
            </h2>
        </div>
        <div></div>
    </div>
</section>
@endsection