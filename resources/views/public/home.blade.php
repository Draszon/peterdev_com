@extends('layouts.main')

@section('title', 'Péter - Főoldal')

@section('content')
<header class="mt-20 text-white">
    <div class="mx-2">
        <div class="mb-10">
            <div class="font-bold text-2xl">
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
                    py-2 px-5 transition duration-300 bg-green hover:bg-dGreen rounded-full">Munkáim</a>
                <a href="#" class="
                    py-2 px-5 transition duration-300 bg-green hover:bg-dGreen rounded-full">Kapcsolat</a>
            </div>
        </div>
        <div class="flex justify-center">
            <img src="{{ asset('images/icons/me.svg') }}" alt="Fényképem" class="h-48">
        </div>
    </div>
</header>
@endsection