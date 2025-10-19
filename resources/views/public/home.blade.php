@extends('layouts.main')

@section('title', 'Péter - Főoldal')

@section('content')

<!--HEADER-->
<header class="mt-20 text-white">
    <div class="mx-2 md:my-20 md:mt-32 md:flex md:flex-row lg:justify-center lg:max-w-[1200px] lg:mx-auto xl:justify-between">
        <div class="mb-10 md:mb-0 lg:flex lg:flex-col lg:justify-center">
            @foreach ($introductions as $introduction)
            <div class="font-bold font-ubuntu">
                <h1 class="text-2xl md:text-3xl lg:text-5xl">
                    <span class="text-orange">&lt;</span> {{ $introduction->title }} <span class="text-orange">/&gt;</span>
                </h1>
                <h2 class="text-lg lg:text-2xl text-green">
                    <span class="text-orange">{</span> {{ $introduction->subtitle }} <span class="text-orange">}</span>
                </h2>
            </div>
            <div class="my-10 lg:max-w-[580px]">
                <p>{{ $introduction->content }}</p>
            </div>
            @endforeach
            <div class="flex flex-row gap-5 justify-center md:justify-start">
                <a href="#projects" class="
                    py-2 px-5 md:py-3 md:px-10 transition duration-300 bg-green 
                    hover:bg-lightGreen hover:text-darkGreen rounded-full">Munkáim</a>
                <a href="#contacts" class="
                    py-2 px-5 md:py-3 md:px-10 transition duration-300 bg-green 
                    hover:bg-lightGreen hover:text-darkGreen rounded-full">Kapcsolat</a>
            </div>
        </div>
        <div class="flex justify-center">
            <img src="{{ asset('images/icons/me.svg') }}" alt="Fényképem"
                class="w-48 md:min-w-80 xl:min-w-[482px] md:ml-5">
        </div>
    </div>
</header>

<!--ABOUT ME-->
<section id="about-me" class="text-darkerGreen bg-white mt-10 py-10 px-2">
    <div class="md:flex flex-row lg:max-w-[1200px] lg:mx-auto">
        <div class="flex justify-center md:mr-5">
            <img src="{{ asset('images/icons/me_programming.svg') }}" alt="programming icon"
                class="w-48 md:min-w-80 lg:min-w-96 xl:min-w-[500px]">
        </div>
        @foreach ($aboutmes as $aboutme)
        <div class="flex flex-col justify-center">
            <h2
                class="font-bold font-ubuntu text-2xl md:text-3xl lg:text-4xl mt-10 mb-5 md:mt-0 text-center">
                <span class="text-orange">&lt;</span> {{ $aboutme->title }} <span class="text-orange">/&gt;</span>
            </h2>
            <p>{{ $aboutme->content }}</p>
        </div>
        @endforeach
    </div>
</section>

<!--TECH STACK-->
<section id="tech-stack" class="py-10 px-2">
    <div class="lg:max-w-[1000px] lg:mx-auto">
        <div class="mb-10">
            <h2 class="font-bold font-ubuntu text-2xl md:text-3xl lg:text-4xl text-center text-white mb-3">
                <span class="text-orange">&lt;</span> Tech Stack <span class="text-orange">/&gt;</span>
            </h2>
            <h2 class="text-lg text-green font-bold font-ubuntu text-center mb-5">
                <span class="text-orange">{</span> Eszközök, amikkel dolgozom <span class="text-orange">}</span>
            </h2>
        </div>
        <div class="flex justify-center items-center flex-wrap  gap-5 lg:gap-20">
            @foreach ($techStacks as $techStack)
            <div class="text-darkerGreen bg-white rounded-lg w-60 h-72 py-5 flex items-center">
                <div class="flex flex-col items-center p-2">
                    <img src="{{ asset('images/tech_icons/' . $techStack->path) }}" alt="HTML ikon"
                        class="h-24">
                    <h3 class="font-bold font-ubuntu mt-1 m-4 text-xl">
                        <span class="text-orange">&lt;</span>{{ $techStack->tech_name }}<span class="text-orange">/&gt;</span>
                    </h3>
                    <p class="text-center">{{ $techStack->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!--PROJECTS-->
<section id="projects" class="bg-white py-10 px-2">
    <div class="lg:max-w-[1200px] lg:mx-auto">
        <h2 class="font-bold font-ubuntu text-2xl md:text-3xl lg:text-4xl text-center text-darkGreen mb-10">
            <span class="text-orange">&lt;</span> Projektek <span class="text-orange">/&gt;</span>
        </h2>

        <div>
            <div class="mb-20 flex flex-col lg:flex-row lg:items-center lg:gap-10">
                <div class="w-full max-w-xl">
                    <img src="{{ asset('images/projekt_indexek/kucko.png') }}" alt="Kuckó index"
                        class="rounded-md border border-green w-full h-auto">
                </div>
                <div class="lg:w-1/2">
                    <h3 class="font-bold font-ubuntu my-5 text-xl md:text-2xl">
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
                        <p>HTML - CSS - VueJs</p>
                    </div>
                    <a href="#" 
                        class="py-2 px-10 transition duration-300 bg-green hover:bg-lightGreen text-white  rounded-full">
                        Megnézem
                    </a>
                </div>
            </div>

            <div class="mb-20 flex flex-col lg:flex-row-reverse lg:items-center lg:gap-10">
                <div class="w-full max-w-xl">
                    <img src="{{ asset('images/projekt_indexek/kucko.png') }}" alt="Kuckó index"
                        class="rounded-md border border-green w-full h-auto">
                </div>
                <div class="lg:w-1/2">
                    <h3 class="font-bold font-ubuntu my-5 text-xl md:text-2xl">
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
                        <p>HTML - CSS - VueJs</p>
                    </div>
                    <a href="#" 
                        class="py-2 px-10 transition duration-300 bg-green hover:bg-lightGreen text-white  rounded-full">
                        Megnézem
                    </a>
                </div>
            </div>

            <div class="mb-20 flex flex-col lg:flex-row lg:items-center lg:gap-10">
                <div class="w-full max-w-xl">
                    <img src="{{ asset('images/projekt_indexek/kucko.png') }}" alt="Kuckó index"
                        class="rounded-md border border-green w-full h-auto">
                </div>
                <div class="lg:w-1/2">
                    <h3 class="font-bold font-ubuntu my-5 text-xl md:text-2xl">
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
                        <p>HTML - CSS - VueJs</p>
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
<section id="timeline" class="text-white py-10 px-4">
    <div class="lg:max-w-[1200px] lg:mx-auto">
        <h2 class="font-bold font-ubuntu text-2xl md:text-3xl lg:text-4xl text-center mb-10">
            <span class="text-orange">&lt;</span> Tanulmányok <span class="text-orange">/&gt;</span>
        </h2>
        
        <div class="flex flex-row justify-center">
            <div class="w-0 rounded-3xl border-4 border-green"></div>
            <div class="ml-6">
                <div class="mb-20 relative">
                    <div class="bg-orange rounded-full w-5 h-5 absolute -left-9 top-4"></div>
                    <div class="bg-green h-12 max-w-60 rounded-full flex items-center justify-center font-bold font-ubuntu text-xl">
                        <p>2018 Január</p>
                    </div>
                    <div class="my-4 font-bold font-ubuntu text-lg">
                        <span class="text-orange">{</span> Tanulmányok befejezése <span class="text-orange">}</span>
                    </div>
                    
                    <div class="text-darkerGreen bg-white rounded-md p-6 max-w-[500px]">
                        <p>
                            Az egyetemen programtervező informatikus asszisztensként fejeztem be felsőoktatási
                            szakképzésemet. Már ekkor közelebb kerültem a szoftverfejlesztéshez, és elkezdtem
                            érdeklődni a web és technológia világa iránt.
                        </p>
                    </div>
                </div>

                <div class="mb-20 relative">
                    <div class="bg-orange rounded-full w-5 h-5 absolute -left-9 top-4"></div>
                    <div class="bg-green h-12 max-w-60 rounded-full flex items-center justify-center font-bold font-ubuntu text-xl">
                        <p>2018 Január</p>
                    </div>
                    <div class="my-4 font-bold font-ubuntu text-lg">
                        <span class="text-orange">{</span> Tanulmányok befejezése <span class="text-orange">}</span>
                    </div>
                    
                    <div class="text-darkerGreen bg-white rounded-md p-6 max-w-[500px]">
                        <p>
                            Az egyetemen programtervező informatikus asszisztensként fejeztem be felsőoktatási
                            szakképzésemet. Már ekkor közelebb kerültem a szoftverfejlesztéshez, és elkezdtem
                            érdeklődni a web és technológia világa iránt.
                        </p>
                    </div>
                </div>

                <div class="mb-20 relative">
                    <div class="bg-orange rounded-full w-5 h-5 absolute -left-9 top-4"></div>
                    <div class="bg-green h-12 max-w-60 rounded-full flex items-center justify-center
                                font-bold font-ubuntu text-xl">
                        <p>2018 Január</p>
                    </div>
                    <div class="my-4 font-bold font-ubuntu text-lg">
                        <span class="text-orange">{</span> Tanulmányok befejezése <span class="text-orange">}</span>
                    </div>
                    
                    <div class="text-darkerGreen bg-white rounded-md p-6 max-w-[500px]">
                        <p>
                            Az egyetemen programtervező informatikus asszisztensként fejeztem be felsőoktatási
                            szakképzésemet. Már ekkor közelebb kerültem a szoftverfejlesztéshez, és elkezdtem
                            érdeklődni a web és technológia világa iránt.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--CONTACTS-->
<section id="contacts" class="bg-white py-10 px-2 max-h-56">
    <div class="mb-10">
        <h2 class="font-bold font-ubuntu text-2xl md:text-3xl lg:text-4xl text-center mb-3">
            <span class="text-orange">&lt;</span> Kapcsolat <span class="text-orange">/&gt;</span>
        </h2>
        <h2 class="text-lg text-green font-bold font-ubuntu text-center mb-5">
            <span class="text-orange">{</span> Ha szeretnél velem dolgozni vagy kérdésed van, keress bátran <span class="text-orange">}</span>
        </h2>
    </div>
</section>
<div class="-mt-16 mb-16">
    <div class="flex flex-wrap gap-5 md:gap-20 justify-center">
        <a class="
            bg-white cursor-pointer flex flex-col items-center justify-center
            text-center rounded-2xl w-48 h-48 shadow-xl transition transform hover:-translate-y-1 hover:scale-110">
            <div class="w-full max-w-16">
                <img src="{{ asset('images/contact_icons/email.svg') }}" alt="email" class="w-full">
            </div>
            <h3 class="m-2 font-bold">Email</h3>
            <p>info@peterdev.hu</p>
        </a>

        <a class="
            bg-white cursor-pointer flex flex-col items-center justify-center
            text-center rounded-2xl w-48 h-48 shadow-xl transition transform hover:-translate-y-1 hover:scale-110">
            <div class="w-full max-w-16">
                <img src="{{ asset('images/contact_icons/linkedin.svg') }}" alt="linkedIn" class="w-full">
            </div>
            <h3 class="m-2 font-bold">LinkedIn</h3>
            <p>szpeterr</p>
        </a>

        <a class="
            bg-white cursor-pointer flex flex-col items-center justify-center
            text-center rounded-2xl w-48 h-48 shadow-xl transition transform hover:-translate-y-1 hover:scale-110">
            <div class="w-full max-w-16">
                <img src="{{ asset('images/contact_icons/github.svg') }}" alt="github" class="w-full">
            </div>
            <h3 class="m-2 font-bold">Github</h3>
            <p>github.com/Draszon</p>
        </a>        
    </div>
</div>
@endsection