@extends('layouts.public')

@section('title', $athlete->name)

@section('content')

<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="max-w-4xl mx-auto">

        {{-- CABEÇALHO DO PERFIL --}}
        <header class="bg-zinc-900 border border-zinc-800 shadow-xl p-8 flex flex-col md:flex-row items-center gap-8">
            {{-- FOTO DE PERFIL --}}
            <div class="flex-shrink-0">
                <img class="h-40 w-40 object-cover border-4 border-zinc-700" src="{{ $athlete->profile_photo_url }}" alt="{{ $athlete->name }}">
            </div>

            {{-- INFORMAÇÕES PRINCIPAIS --}}
            <div class="text-center md:text-left">
                <h1 class="text-4xl font-bold text-white">{{ $athlete->name }}</h1>
                <p class="text-xl text-green-400 font-semibold mt-1">{{ $athlete->athleteProfile->position }}</p>

                <div class="flex flex-wrap justify-center md:justify-start items-center gap-x-6 gap-y-2 text-gray-300 mt-4">
                    <span>Altura: <span class="font-bold">{{ $athlete->athleteProfile->height_cm ?? 'N/A' }} cm</span></span>
                    <span>Peso: <span class="font-bold">{{ $athlete->athleteProfile->weight_kg ?? 'N/A' }} kg</span></span>
                    <span>Pé Dominante: <span class="font-bold">{{ $athlete->athleteProfile->dominant_foot ?? 'N/A' }}</span></span>
                    <span>Clube Atual: <span class="font-bold">{{ $athlete->athleteProfile->current_club ?? 'N/A' }}</span></span>
                </div>
            </div>
        </header>

        {{-- CORPO DO PERFIL --}}
        <main class="mt-8 grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            {{-- Coluna Principal (Bio, Vídeos, etc.) --}}
            <div class="lg:col-span-2 space-y-8">

                {{-- TAREFA 1.1: SEÇÃO DE BIOGRAFIA --}}
                <section class="bg-zinc-900 border border-zinc-800 shadow-xl p-8">
                    <h2 class="text-2xl font-bold text-white mb-4">Sobre Mim</h2>
                    <p class="text-gray-300 whitespace-pre-line leading-relaxed">
                        {{ $athlete->athleteProfile->bio ?? 'Nenhuma biografia disponível.' }}
                    </p>

                    <div class="mt-6 pt-6 border-t border-zinc-800">
                        <h3 class="text-lg font-semibold text-white mb-3">Detalhes Adicionais</h3>
                        <dl class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
                            <div class="text-gray-400">
                                <dt class="font-bold">Status Federativo:</dt>
                                <dd class="text-gray-200">{{ $athlete->athleteProfile->federation_status ?? 'Não informado' }}</dd>
                            </div>
                             {{-- Adicione outros campos aqui conforme necessário --}}
                        </dl>
                    </div>
                </section>

                {{-- Espaço para a futura Seção de Vídeos (Tarefa 1.2) --}}
                <section class="bg-zinc-900 border border-zinc-800 shadow-xl p-8">
                     <h2 class="text-2xl font-bold text-white mb-4">Vídeos em Destaque</h2>
                     <p class="text-gray-500">Em breve...</p>
                </section>

            </div>

            {{-- Coluna Lateral (Feed, etc.) --}}
            <aside class="space-y-8">
                {{-- Espaço para o futuro Feed de Atualizações (Tarefa 1.3) --}}
                <section class="bg-zinc-900 border border-zinc-800 shadow-xl p-8">
                    <h2 class="text-2xl font-bold text-white mb-4">Atualizações</h2>
                    <p class="text-gray-500">Em breve...</p>
                </section>
            </aside>

        </main>

    </div>
</div>

@endsection