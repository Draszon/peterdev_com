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
                                    px-8 rounded-lg transition delay-100">
                            Mentés
                        </button>
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
                                    px-8 rounded-lg transition delay-100">
                            Mentés
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 max-w-[500px]">
                    <h1 class="font-bold mb-10">Tech Stack rész szerkesztése</h1>

                    @if (session('messageDeleteTech'))
                        <p class="font-bold text-green">{{ session('messageDeleteTech') }}</p>
                    @endif
                        
                    <form action="{{ route('techstack.multiple-destroy') }}" method="POST">
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

                    <form action="{{ route('techstack.store') }}" method="post" enctype="multipart/form-data" class="mt-10">
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
</x-app-layout>
