@extends('layouts.main')

@section('title', 'Péter - Főoldal')

@section('content')

<!--HEADER-->
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

<!--ABOUT ME-->
<section id="about-me" class="text-darkerGreen bg-white mt-10 py-10 px-2">
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

<!--TECH STACK-->
<section id="tech-stack" class="py-10 px-2">
    <div>
        <div class="mb-10">
            <h2 class="font-bold font-ubuntu text-2xl text-center text-white mb-3">
                <span class="text-orange">&lt;</span> Tech Stack <span class="text-orange">/&gt;</span>
            </h2>
            <h2 class="text-lg text-green font-bold font-ubuntu text-center mb-5">
                <span class="text-orange">{</span> Eszközök, amikkel dolgozom <span class="text-orange">}</span>
            </h2>
        </div>
        <div class="flex justify-center flex-wrap items-center gap-5">
            <div class="text-darkerGreen bg-white rounded-lg w-60 py-5">
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/tech_icons/html.svg') }}" alt="HTML ikon"
                        class="h-24">
                    <h3 class="font-bold font-ubuntu mt-1 m-4 text-xl">
                        <span class="text-orange">&lt;</span>HTML<span class="text-orange">/&gt;</span>
                    </h3>
                    <p class="text-center">A web alapja, amivel a struktúrát építem fel.</p>
                </div>
            </div>

            <div class="text-darkerGreen bg-white rounded-lg w-60 py-5">
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/tech_icons/html.svg') }}" alt="HTML ikon"
                        class="h-24">
                    <h3 class="font-bold font-ubuntu mt-1 m-4 text-xl">
                        <span class="text-orange">&lt;</span>HTML<span class="text-orange">/&gt;</span>
                    </h3>
                    <p class="text-center">A web alapja, amivel a struktúrát építem fel.</p>
                </div>
            </div>

            <div class="text-darkerGreen bg-white rounded-lg w-60 py-5">
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/tech_icons/html.svg') }}" alt="HTML ikon"
                        class="h-24">
                    <h3 class="font-bold font-ubuntu mt-1 m-4 text-xl">
                        <span class="text-orange">&lt;</span>HTML<span class="text-orange">/&gt;</span>
                    </h3>
                    <p class="text-center">A web alapja, amivel a struktúrát építem fel.</p>
                </div>
            </div>

            <div class="text-darkerGreen bg-white rounded-lg w-60 py-5">
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/tech_icons/html.svg') }}" alt="HTML ikon"
                        class="h-24">
                    <h3 class="font-bold font-ubuntu mt-1 m-4 text-xl">
                        <span class="text-orange">&lt;</span>HTML<span class="text-orange">/&gt;</span>
                    </h3>
                    <p class="text-center">A web alapja, amivel a struktúrát építem fel.</p>
                </div>
            </div>

            <div class="text-darkerGreen bg-white rounded-lg w-60 py-5">
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/tech_icons/html.svg') }}" alt="HTML ikon"
                        class="h-24">
                    <h3 class="font-bold font-ubuntu mt-1 m-4 text-xl">
                        <span class="text-orange">&lt;</span>HTML<span class="text-orange">/&gt;</span>
                    </h3>
                    <p class="text-center">A web alapja, amivel a struktúrát építem fel.</p>
                </div>
            </div>

            <div class="text-darkerGreen bg-white rounded-lg w-60 py-5">
                <div class="flex flex-col items-center">
                    <img src="{{ asset('images/tech_icons/html.svg') }}" alt="HTML ikon"
                        class="h-24">
                    <h3 class="font-bold font-ubuntu mt-1 m-4 text-xl">
                        <span class="text-orange">&lt;</span>HTML<span class="text-orange">/&gt;</span>
                    </h3>
                    <p class="text-center">A web alapja, amivel a struktúrát építem fel.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--PROJECTS-->
<section id="projects" class="bg-white py-10 px-2">
    <div>
        <h2 class="font-bold font-ubuntu text-2xl text-center text-darkGreen mb-10">
            <span class="text-orange">&lt;</span> Projektek <span class="text-orange">/&gt;</span>
        </h2>

        <div>
            <div class="mb-16 flex flex-wrap">
                <div class="w-full max-w-xl">
                    <img src="{{ asset('images/projekt_indexek/kucko.png') }}" alt="Kuckó index"
                        class="rounded-md border border-green w-full h-auto">
                </div>
                <div>
                    <h3 class="font-bold font-ubuntu my-5 text-lg">
                        <span class="text-orange">{</span> Kuckó Tanulószoba <span class="text-orange">}</span>
                    </h3>
                    <p>
                        Egy magántanár számára készített, modern és letisztult weboldal.
                        A projekt fő célja egy átlátható, könnyen kezelhető felület megalkotása
                        volt, ahol a tanulók és szülők gyorsan tájékozódhatnak
                        az órákról és szolgáltatásokról.
                    </p>
                    <div class="my-5">
                        <p class="font-bold font-ubuntu">Technológiák: </p>
                        <p>HTML, CSS, VueJs</p>
                    </div>
                    <a href="#" 
                        class="py-2 px-10 transition duration-300 bg-green hover:bg-lightGreen text-white  rounded-full">
                        Megnézem
                    </a>
                </div>
            </div>

            <div class="mb-16 flex flex-wrap">
                <div class="w-full max-w-xl">
                    <img src="{{ asset('images/projekt_indexek/kucko.png') }}" alt="Kuckó index"
                        class="rounded-md border border-green w-full h-auto">
                </div>
                <div>
                    <h3 class="font-bold font-ubuntu my-5 text-lg">
                        <span class="text-orange">{</span> Kuckó Tanulószoba <span class="text-orange">}</span>
                    </h3>
                    <p>
                        Egy magántanár számára készített, modern és letisztult weboldal.
                        A projekt fő célja egy átlátható, könnyen kezelhető felület megalkotása
                        volt, ahol a tanulók és szülők gyorsan tájékozódhatnak
                        az órákról és szolgáltatásokról.
                    </p>
                    <div class="my-5">
                        <p class="font-bold font-ubuntu">Technológiák: </p>
                        <p>HTML, CSS, VueJs</p>
                    </div>
                    <a href="#" 
                        class="py-2 px-10 transition duration-300 bg-green hover:bg-lightGreen text-white  rounded-full">
                        Megnézem
                    </a>
                </div>
            </div>

            <div class="mb-16 flex flex-wrap">
                <div class="w-full max-w-xl">
                    <img src="{{ asset('images/projekt_indexek/kucko.png') }}" alt="Kuckó index"
                        class="rounded-md border border-green w-full h-auto">
                </div>
                <div>
                    <h3 class="font-bold font-ubuntu my-5 text-lg">
                        <span class="text-orange">{</span> Kuckó Tanulószoba <span class="text-orange">}</span>
                    </h3>
                    <p>
                        Egy magántanár számára készített, modern és letisztult weboldal.
                        A projekt fő célja egy átlátható, könnyen kezelhető felület megalkotása
                        volt, ahol a tanulók és szülők gyorsan tájékozódhatnak
                        az órákról és szolgáltatásokról.
                    </p>
                    <div class="my-5">
                        <p class="font-bold font-ubuntu">Technológiák: </p>
                        <p>HTML, CSS, VueJs</p>
                    </div>
                    <a href="#" 
                        class="py-2 px-10 transition duration-300 bg-green hover:bg-lightGreen text-white  rounded-full">
                        Megnézem
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--TIMELINE-->
<section id="timeline" class="text-white py-10 px-2">
    <div>
        <h2 class="font-bold font-ubuntu text-2xl text-center mb-10">
            <span class="text-orange">&lt;</span> Tanulmányok <span class="text-orange">/&gt;</span>
        </h2>
        
        <div>
            <div></div>
            <div></div>
        </div>
    </div>
</section>

<section id="contacts" class="h-72 bg-white py-10 px-2">
    <div class="mb-10">
        <h2 class="font-bold font-ubuntu text-2xl text-center mb-3">
            <span class="text-orange">&lt;</span> Kapcsolat <span class="text-orange">/&gt;</span>
        </h2>
        <h2 class="text-lg text-green font-bold font-ubuntu text-center mb-5">
            <span class="text-orange">{</span> Ha szeretnél velem dolgozni vagy kérdésed van, keress bátran <span class="text-orange">}</span>
        </h2>
    </div>

    <div>
        <div>
            <div class="w-full max-w-14">
                <img src="{{ asset('images/contact_icons/email.svg') }}" alt="email" class="w-full">
            </div>
            <h3>Email</h3>
            <p>info@peterdev.hu</p>
        </div>
    </div>
</section>
@endsection