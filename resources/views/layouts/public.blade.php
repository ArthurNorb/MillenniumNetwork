<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> {{-- Use lang helper --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('app.name', 'Millennium Network'))</title> {{-- Use config() helper --}}

    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml"> {{-- Use favicon.svg --}}

    {{-- Tipografia Poppins --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"> {{-- Added 500 weight --}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

{{-- ADICIONE x-data AQUI --}}

<body x-data="{ searchOpen: false }" class="bg-zinc-950 text-gray-200 antialiased">

    {{-- Navbar Dinâmica --}}
    <x-public-nav />

    {{-- Conteúdo da Página --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <x-footer />

    {{-- ===== MODAL DE BUSCA ===== --}}
    <div x-show="searchOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click.away="searchOpen = false"
        {{-- Fecha ao clicar fora --}} @keydown.escape.window="searchOpen = false" {{-- Fecha ao pressionar Esc --}}
        class="fixed inset-0 bg-black/80 z-[100] flex items-start justify-center p-4 pt-16 sm:pt-24"
        style="display: none;"> {{-- Começa escondido --}}

        {{-- Container do Modal --}}
        <div class="bg-zinc-950 border border-zinc-800 w-full max-w-4xl max-h-[80vh] overflow-y-auto p-6 relative">
            {{-- Botão de Fechar --}}
            <button @click="searchOpen = false" class="absolute top-4 right-4 text-gray-500 hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <h2 class="text-2xl font-bold text-white mb-6">Buscar Atletas</h2>

            {{-- Área onde o componente Livewire será carregado --}}
            <div id="search-modal-content">
                {{-- O Livewire será injetado aqui dinamicamente --}}
                @livewire('search-modal', [], key('search-modal'))
            </div>
        </div>
    </div>

</body>

</html>