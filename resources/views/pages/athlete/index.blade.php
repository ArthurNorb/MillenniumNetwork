{{-- resources/views/pages/athlete/index.blade.php --}}
@extends('layouts.public')

@section('title', 'Buscar Atletas')

@section('content')
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <div class="max-w-7xl mx-auto">
        
        <header class="mb-10 text-center">
            <h1 class="text-4xl font-bold text-white">Encontre Talentos</h1>
            <p class="text-gray-400 mt-2">Navegue pelos perfis dos atletas cadastrados na plataforma.</p>
        </header>

        {{-- Grid de Atletas --}}
        @if($athletes->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
                @foreach ($athletes as $athlete)
                    <a href="{{ route('athlete.show', $athlete) }}" class="block bg-zinc-900 border border-zinc-800 shadow-xl group">
                        <div class="relative overflow-hidden">
                            <img class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-300" src="{{ $athlete->profile_photo_url }}" alt="{{ $athlete->name }}">
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-white truncate">{{ $athlete->name }}</h3>
                            <p class="text-green-400 font-semibold">{{ $athlete->athleteProfile->position }}</p>
                        </div>
                    </a>
                @endforeach
            </div>

            {{-- Links de Paginação --}}
            <div class="mt-12">
                {{ $athletes->links() }}
            </div>
        @else
            <p class="text-center text-gray-500">Nenhum atleta encontrado.</p>
        @endif
        
    </div>
</div>
@endsection