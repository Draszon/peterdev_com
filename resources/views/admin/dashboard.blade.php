<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin oldal') }}
        </h2>
    </x-slot>

    <!--üdvözlő rész szerkesztése-->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 max-w-[500px]">

                    <!--mindenféle hiba kilistázása-->
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p class="text-red-500 font-bold">{{ $error }}</p>
                        @endforeach
                    @endif

                    <h1 class="font-bold mb-10">Üdvözlő rész szerkesztése</h1>

                    @if (session('introductionMessage'))
                        <p class="font-bold text-green">{{ session('introductionMessage') }}</p>
                    @endif
                    <form action="{{ route('introduction.update', $introductions[0]->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-5">
                            <p>Cím</p>
                            <input type="text" name="title" value="{{ $introductions[0]->title }}"
                                class="rounded-lg border-gray-300 shadow-sm w-full">
                        </div>
                        <div class="mb-5">
                            <p>Alcím</p>
                            <input type="text" name="subtitle" value="{{ $introductions[0]->subtitle }}"
                                class="rounded-lg border-gray-300 shadow-sm w-full">
                        </div>
                        <div class="mb-5">
                            <p>Tartalom</p>
                            <textarea name="content"
                                class="rounded-lg border-gray-300 shadow-sm w-full h-48">{{ $introductions[0]->content }}</textarea>
                        </div>
                        <button type="submit" 
                            class="bg-gray-600 hover:bg-gray-700 text-white py-2
                                    px-8 rounded-lg transition delay-100">Mentés</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 max-w-[500px]">
                    <h1 class="font-bold mb-10">Rólam rész szerkesztése</h1>

                    @if (session('aboutmeMessage'))
                        <p class="font-bold text-green">{{ session('aboutmeMessage') }}</p>
                    @endif
                    <form action="{{ route('aboutme.update', $aboutmes[0]->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-5">
                            <p>Cím</p>
                            <input type="text" name="title" value="{{ $aboutmes[0]->title }}"
                                class="rounded-lg border-gray-300 shadow-sm w-full">
                        </div>
                        <div class="mb-5">
                            <p>Tartalom</p>
                            <textarea name="content"
                                class="rounded-lg border-gray-300 shadow-sm w-full h-48">{{ $aboutmes[0]->content }}</textarea>
                        </div>
                        <button type="submit" 
                            class="bg-gray-600 hover:bg-gray-700 text-white py-2
                                    px-8 rounded-lg transition delay-100"> Mentés</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 w-full">
                    <h1 class="font-bold mb-10">Tech Stack rész szerkesztése</h1>

                    @if (session('messageDeleteTech'))
                        <p class="font-bold text-green">{{ session('messageDeleteTech') }}</p>
                    @endif
                        
                    <div class="flex flex-col md:flex-row w-full">
                        <form class="w-1/2" action="{{ route('techstack.multiple-destroy') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <p>Kiválasztott elemek törlése:</p>
                            <div class="flex flex-col gap-2 my-5">
                            @foreach ($techStacks as $techStack)
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" id="{{ $techStack->tech_name }}" name="deleted_ids[]" value="{{ $techStack->id }}"
                                        class="rounded-full text-red-600 bg-gray-100 border-gray-300 focus:ring-2 focus:ring-red-500">
                                    <label for="{{ $techStack->tech_name }}">{{ $techStack->tech_name }}</label>
                                </div>
                            @endforeach
                            </div>
                            <button type="submit" 
                            class="bg-gray-600 hover:bg-gray-700 text-white py-2
                                    px-8 rounded-lg transition delay-100 ">Törlés</button>
                        </form>

                        @if (session('messageStoreTech'))
                            <p class="font-bold text-green">{{ session('messageStoreTech') }}</p>
                        @endif

                        <form action="{{ route('techstack.store') }}" method="post" enctype="multipart/form-data" class="mt-10 md:mt-0 w-1/2">
                            @csrf
                            <p>Új feltöltése:</p>
                            <div class="my-5 flex flex-col gap-2">
                                <div>
                                    <p>Ikon:</p>
                                    <input type="file" name="path">
                                </div>
                                <div>
                                    <p>Név:</p>
                                    <input type="text" name="tech_name"
                                        class="rounded-lg border-gray-300 shadow-sm w-full">
                                </div>
                                <div>
                                    <p>Rövid leírás:</p>
                                    <input type="text" name="description"
                                        class="rounded-lg border-gray-300 shadow-sm w-full">
                                </div>
                            </div>
                            <button type="submit" 
                                class="bg-gray-600 hover:bg-gray-700 text-white py-2
                                px-8 rounded-lg transition delay-100 ">Feltölt</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 max-w-[500px]">
                    <h1 class="font-bold mb-10">Projektek rész szerkesztése</h1>

                    @if (session('messageDeleteProject'))
                        <p class="font-bold text-green">{{ session('messageDeleteProject') }}</p>
                    @endif
                    <form action="{{ route('projects.multiple-destroy') }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <p>Kiválasztott projektek törlése:</p>
                        <div class="flex flex-col gap-2 my-5">
                            @foreach ($projects as $project)
                            <div class="flex items-center gap-2">
                                <input type="checkbox" id="{{ $project->title }}" name="deleted_ids[]" value="{{ $project->id }}"
                                    class="rounded-full text-red-600 bg-gray-100 border-gray-300 focus:ring-2 focus:ring-red-500">
                                <label for="{{ $project->title }}">{{ $project->title }}</label>
                            </div>
                            @endforeach
                        </div>

                        <button type="submit" 
                            class="bg-gray-600 hover:bg-gray-700 text-white py-2
                                px-8 rounded-lg transition delay-100">Törlés</button>
                    </form>

                    <div class="mt-10 mb-4">
                        <p>Projektek tartalmának szerkesztése:</p>
                    </div>
                    @if (session('messageUpdateProject'))
                        <p class="font-bold text-green">{{ session('messageUpdateProject') }}</p>
                    @endif
                    @foreach ($projects as $project)
                    <form action="{{ route('projects.update', $project->id) }}" method="post" class="mb-10 flex flex-col gap-2">
                        @csrf
                        @method('PUT')

                        <label for="title">Projekt neve:</label>
                        <input type="text" id="title" name="title" value="{{ $project->title }}"
                            class="rounded-lg border-gray-300 shadow-sm w-full">
                        <label for="description">Projekt leírása:</label>
                        <textarea id="description" name="description"
                            class="rounded-lg border-gray-300 shadow-sm w-full h-48">{{ $project->description }}</textarea>
                        <label for="technology">Technológiák:</label>
                        <input type="text" id="technology" name="technology" value="{{ $project->technology }}"
                            class="rounded-lg border-gray-300 shadow-sm w-full">
                        <label for="link">Link az oldalra:</label>
                        <input type="text" id="link" name="link" value="{{ $project->link }}"
                            class="rounded-lg border-gray-300 shadow-sm w-full">
                        <button type="submit" 
                            class="bg-gray-600 hover:bg-gray-700 text-white py-2
                            px-8 rounded-lg transition delay-100 mt-5 max-w-48">Mentés</button>
                    </form>
                    @endforeach

                    <div class="mt-10 mb-4">
                        <p>Új projekt feltöltése:</p>
                    </div>
                    @if (session('messageStoreProject'))
                        <p class="font-bold text-green">{{ session('messageStoreProject') }}</p>
                    @endif
                    
                    <form action="{{ route('projects.store') }}" method="post"
                        class="mb-10 flex flex-col gap-2" enctype="multipart/form-data">
                        @csrf

                        <label for="title">Projekt neve:</label>
                        <input type="text" id="title" name="title"
                            class="rounded-lg border-gray-300 shadow-sm w-full">

                        <label for="description">Projekt leírása:</label>
                        <textarea id="description" name="description"
                            class="rounded-lg border-gray-300 shadow-sm w-full h-48"></textarea>

                        <label for="technology">Technológiák:</label>
                        <input type="text" id="technology" name="technology" value=""
                            class="rounded-lg border-gray-300 shadow-sm w-full">

                        <label for="link">Link az oldalra:</label>
                        <input type="text" id="link" name="link" value=""
                            class="rounded-lg border-gray-300 shadow-sm w-full">

                        <label for="index_path">Indexkép:</label>
                        <input type="file" name="index_path" id="index_path">

                        <button type="submit" 
                            class="bg-gray-600 hover:bg-gray-700 text-white py-2
                            px-8 rounded-lg transition delay-100 mt-5 max-w-48">Mentés</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 max-w-full">
                    <h1 class="font-bold mb-10">Tanulmányaim rész szerkesztése</h1>

                    @if (session('messageDeleteStudy'))
                        <p class="font-bold text-green">{{ session('messageDeleteStudy') }}</p>
                    @endif
                    <div class="max-w-full flex flex-col md:flex-row">
                        <form action="{{ route('study.multiple-destroy') }}" method="POST" class="w-1/2">
                            @csrf
                            @method('DELETE')

                            <p>Kiválasztott tanulmányok törlése:</p>
                            <div class="flex flex-col gap-2 my-5">
                                @foreach ($studies as $study)
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" id="{{ $study->title }}" name="deleted_ids[]" value="{{ $study->id }}"
                                        class="rounded-full text-red-600 bg-gray-100 border-gray-300 focus:ring-2 focus:ring-red-500">
                                    <label for="{{ $study->title }}">{{ $study->title }}</label>
                                </div>
                                @endforeach
                            </div>

                            <button type="submit" 
                                class="bg-gray-600 hover:bg-gray-700 text-white py-2
                                    px-8 rounded-lg transition delay-100">Törlés</button>
                        </form>

                        @if (session('messageUploadStudy'))
                            <p class="font-bold text-green">{{ session('messageUploadStudy') }}</p>
                        @endif
                        <form action="{{ route('study.store') }}" method="post" class="my-10 md:my-0 w-1/2">
                            @csrf

                            <p class="mb-5">Új tanulmány feltöltése:</p>
                            <div>
                                <div class="mb-5">
                                    <label for="date">Dátum:</label>
                                    <input type="text" id="date" name="date"
                                        class="rounded-lg border-gray-300 shadow-sm w-full">
                                </div>
                                <div class="mb-5">
                                    <label for="title">Cím:</label>
                                    <input type="text" id="title" name="title"
                                        class="rounded-lg border-gray-300 shadow-sm w-full">
                                </div>
                                <div class="mb-5">
                                    <label for="content">Tartalom:</label>
                                    <textarea id="content" name="content"
                                        class="rounded-lg border-gray-300 shadow-sm w-full h-48"></textarea>
                                </div>
                            </div>
                            <button type="submit" 
                                class="bg-gray-600 hover:bg-gray-700 text-white py-2
                                    px-8 rounded-lg transition delay-100">Feltöltés</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 max-w-full">
                    <h1 class="font-bold mb-10">Kapcsolatok rész szerkesztése</h1>

                    @if (session('messageDeleteContact'))
                        <p class="font-bold text-green">{{ session('messageDeleteContact') }}</p>
                    @endif
                    <div class="max-w-full flex flex-col md:flex-row">
                        <form action="{{ route('contact.multiple-destroy') }}" method="POST" class="w-1/2">
                            @csrf
                            @method('DELETE')

                            <p>Kiválasztott kapcsolat törlése:</p>
                            <div class="flex flex-col gap-2 my-5">
                                @foreach ($contacts as $contact)
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" id="{{ $contact->contact_name }}" name="deleted_ids[]" value="{{ $contact->id }}"
                                        class="rounded-full text-red-600 bg-gray-100 border-gray-300 focus:ring-2 focus:ring-red-500">
                                    <label for="{{ $contact->contact_name }}">{{ $contact->contact_name }}</label>
                                </div>
                                @endforeach
                            </div>

                            <button type="submit" 
                                class="bg-gray-600 hover:bg-gray-700 text-white py-2
                                    px-8 rounded-lg transition delay-100">Törlés</button>
                        </form>

                        @if (session('messageStoreContact'))
                            <p class="font-bold text-green">{{ session('messageStoreContact') }}</p>
                        @endif
                        <form action="{{ route('contact.store') }}" method="post" class="my-10 md:my-0 w-1/2" enctype="multipart/form-data">
                            @csrf

                            <p class="mb-5">Új kapcsolati adat feltöltése:</p>
                            <div>
                                <div class="mb-5">
                                    <label for="contact_name">Név:</label>
                                    <input type="text" id="contact_name" name="contact_name"
                                        class="rounded-lg border-gray-300 shadow-sm w-full">
                                </div>
                                <div class="mb-5">
                                    <label for="contact_link">Kontakt link:</label>
                                    <input type="text" id="contact_link" name="contact_link"
                                        class="rounded-lg border-gray-300 shadow-sm w-full">
                                </div>
                                <div class="mb-5">
                                    <label for="url">URL:</label>
                                    <input type="text" id="url" name="url"
                                        class="rounded-lg border-gray-300 shadow-sm w-full">
                                </div>
                                <div class="mb-5">
                                    <label for="index_path">Indexkép:</label>
                                    <input type="file" name="index_path" id="index_path">
                                </div>
                            </div>
                            <button type="submit" 
                                class="bg-gray-600 hover:bg-gray-700 text-white py-2
                                    px-8 rounded-lg transition delay-100">Feltöltés</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
