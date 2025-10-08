@extends('layouts.public')

@section('title', 'Perfil de ' . $user->name)

@section('content')
<div class="container mx-auto p-4 sm:p-8">

    {{-- Alterado: bg-zinc-900 --}}
    <div class="bg-zinc-900 shadow-lg overflow-hidden">
        <div class="p-6">
            <div class="flex flex-col sm:flex-row items-start sm:items-center">
                <img class="h-24 w-24 object-cover mr-6 border-4 border-gray-700" src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}">
                <div class="mt-4 sm:mt-0">
                    <h1 class="text-3xl font-extrabold text-brand-red uppercase tracking-wider">{{ $user->name }}</h1>
                    <p class="text-xl text-green-400 font-bold tracking-wide">{{ $user->athleteProfile?->position ?? 'Posição não informada' }}</p>
                </div>
            </div>
            <div class="mt-6 grid grid-cols-2 sm:grid-cols-4 gap-4 border-t border-gray-700 pt-4">
                <div class="text-center">
                    <p class="text-sm text-gray-400 uppercase">Altura</p>
                    <p class="text-lg font-semibold text-white">{{ $user->athleteProfile?->height_cm ? $user->athleteProfile->height_cm . ' cm' : 'N/A' }}</p>
                </div>
                <div class="text-center">
                    <p class="text-sm text-gray-400 uppercase">Peso</p>
                    <p class="text-lg font-semibold text-white">{{ $user->athleteProfile?->weight_kg ? $user->athleteProfile->weight_kg . ' kg' : 'N/A' }}</p>
                </div>
                <div class="text-center">
                    <p class="text-sm text-gray-400 uppercase">Pé Dominante</p>
                    <p class="text-lg font-semibold text-white">{{ $user->athleteProfile?->dominant_foot ?? 'N/A' }}</p>
                </div>
                <div class="text-center">
                    <p class="text-sm text-gray-400 uppercase">Passaporte EU</p>
                    <p class="text-lg font-semibold {{ $user->athleteProfile?->passport_eu_bool ? 'text-green-400' : 'text-white' }}">
                        {{ $user->athleteProfile?->passport_eu_bool ? 'Sim' : 'Não' }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 sm:px-8 mt-8">
        {{-- Alterado: bg-zinc-900 --}}
        <div class="bg-zinc-900 shadow-lg p-6">
            <h2 class="text-2xl font-bold text-white uppercase tracking-wider">Sobre</h2>
            <p class="mt-4 text-gray-300 leading-relaxed">
                {{ $user->athleteProfile?->bio ?? 'Biografia não disponível.' }}
            </p>
        </div>
    </div>
</div>
@endsection