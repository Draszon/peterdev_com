@extends('layouts.main')

@section('title', 'Péter - Főoldal')

@section('content')
<header class="mt-14 text-white">
    <div>
        <div>
            <div>
                <h1><span>&lt;</span> Szia, Péter vagyok <span>/&gt;</span></h1>
                <h2><span>{</span> Junior webfejlesztő <span>}</span></h2>
            </div>
            <div>
                <p>
                    Ez pedig a portfólió oldalam, ahol bemutatom az eddigi
                    projektjeimet és tanulmányaimat. Laravel, TailwindCSS és 
                    JavaScript alapokon építek reszponzív, modern weboldalakat.
                </p>
            </div>
            <div>
                <a href="#">Munkáim</a>
                <a href="#">Kapcsolat</a>
            </div>
        </div>

        <div>
            <img src="{{ asset('images/header/image.jpg') }}" alt="Fényképem">
        </div>
    </div>
</header>
@endsection