@extends('layouts.public')

@section('title', $athlete->name)

@section('content')

    <div x-data="{ openModal: false, videoUrl: '' }" class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="max-w-4xl mx-auto">

            {{-- CABEÇALHO DO PERFIL --}}
            <header class="bg-zinc-900 border border-zinc-800 shadow-xl p-8 flex flex-col md:flex-row items-center gap-8">
                {{-- FOTO DE PERFIL --}}
                <div class="flex-shrink-0">
                    <img class="h-40 w-40 object-cover border-4 border-zinc-700" src="{{ $athlete->profile_photo_url }}"
                        alt="{{ $athlete->name }}">
                </div>

                {{-- INFORMAÇÕES PRINCIPAIS --}}
                <div class="text-center md:text-left">
                    <h1 class="text-4xl font-bold text-white">{{ $athlete->name }}</h1>
                    <p class="text-xl text-green-400 font-semibold mt-1">{{ $athlete->athleteProfile->position }}</p>

                    <div
                        class="flex flex-wrap justify-center md:justify-start items-center gap-x-6 gap-y-2 text-gray-300 mt-4">
                        <span>Altura: <span class="font-bold">{{ $athlete->athleteProfile->height_cm ?? 'N/A' }}
                                cm</span></span>
                        <span>Peso: <span class="font-bold">{{ $athlete->athleteProfile->weight_kg ?? 'N/A' }}
                                kg</span></span>
                        <span>Pé Dominante: <span
                                class="font-bold">{{ $athlete->athleteProfile->dominant_foot ?? 'N/A' }}</span></span>
                        <span>Clube Atual: <span
                                class="font-bold">{{ $athlete->athleteProfile->current_club ?? 'N/A' }}</span></span>
                    </div>
                </div>
            </header>

            {{-- CORPO DO PERFIL --}}
            <main class="mt-8 grid grid-cols-1 lg:grid-cols-3 gap-8">

                <div class="lg:col-span-2 space-y-8">

                    {{-- SEÇÃO DE BIOGRAFIA --}}
                    <section class="bg-zinc-900 border border-zinc-800 shadow-xl p-8">
                        <h2 class="text-2xl font-bold text-white mb-4">Sobre Mim</h2>
                        <p class="text-gray-300 whitespace-pre-line leading-relaxed">
                            {{ $athlete->athleteProfile->bio ?? 'Nenhuma biografia disponível.' }}
                        </p>
                        {{-- ... (outros detalhes) ... --}}
                    </section>

                    {{-- SEÇÃO DE VÍDEOS --}}
                    <section class="bg-zinc-900 border border-zinc-800 shadow-xl p-8">
                        <h2 class="text-2xl font-bold text-white mb-4">Vídeos em Destaque</h2>

                        @if ($athlete->videos->count() > 0)
                            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                                @foreach ($athlete->videos as $video)
                                    @php
                                        preg_match(
                                            "/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/",
                                            $video->youtube_url,
                                            $matches,
                                        );
                                        $videoId = $matches[1] ?? '';
                                    @endphp

                                    <div @click="openModal = true; videoUrl = 'https://www.youtube.com/embed/{{ $videoId }}?autoplay=1'"
                                        class="cursor-pointer group">
                                        <div class="relative">
                                            <img src="https://img.youtube.com/vi/{{ $videoId }}/hqdefault.jpg"
                                                alt="{{ $video->title }}"
                                                class="w-full h-auto border-2 border-transparent group-hover:border-green-500 transition-all">
                                            <div
                                                class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                                <svg class="h-12 w-12 text-white" fill="currentColor" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                        <h4 class="text-sm font-semibold text-gray-200 mt-2 truncate">{{ $video->title }}
                                        </h4>
                                    </div>
                                @endforeach
                            </div>
                        @else
                            <p class="text-gray-500">Nenhum vídeo adicionado ainda.</p>
                        @endif
                    </section>
                </div>

                {{-- Coluna Lateral --}}
                <aside class="space-y-8">
                    <section class="bg-zinc-900 border border-zinc-800 shadow-xl p-8">
                        <h2 class="text-2xl font-bold text-white mb-4">Atualizações</h2>
                        <p class="text-gray-500">Em breve...</p>
                    </section>
                </aside>
            </main>
        </div>

        {{-- MODAL DO VÍDEO (COM A CORREÇÃO) --}}
        <div x-show="openModal" x-transition @click.away="openModal = false; videoUrl = ''"
            class="fixed inset-0 bg-black/80 z-50 flex items-center justify-center p-4" style="display: none;">
            {{-- <--- A CORREÇÃO ESTÁ AQUI --}}

            <div class="relative w-full max-w-4xl">
                <div class="aspect-w-16 aspect-h-9">
                    <iframe :src="videoUrl" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

@endsection
