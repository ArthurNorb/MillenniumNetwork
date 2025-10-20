<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Millennium Network')</title>

    <link rel="icon" href="{{ asset('images/favicon.svg') }}" type="image/svg+xml">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-zinc-950 text-gray-200 antialiased">

    <nav class="bg-black/80 backdrop-blur-sm sticky top-0 z-50 shadow-lg">
        <div class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between">

                <a href="/" title="Millennium Network">
                    <img src="{{ asset('images/logo.svg') }}" class="h-12" alt="Millennium Network Logo">
                </a>

                <div class="flex items-center space-x-6">
                    {{-- LINK "BUSCAR ATLETAS" ATUALIZADO --}}
                    <a class="hidden sm:block text-gray-300 hover:text-green-400 transition-colors font-semibold"
                        href="{{ route('athlete.index') }}">BUSCAR ATLETAS</a>

                    @auth
                        {{-- Se o usuário ESTIVER LOGADO --}}
                        {{-- LINK "PAINEL" ATUALIZADO PARA "PERFIL" E DIRECIONADO PARA O PERFIL PÚBLICO DO PRÓPRIO USUÁRIO --}}
                        <a href="{{ route('athlete.profile.show', ['user' => Auth::user()]) }}"
                            class="bg-green-500 text-black font-bold py-2 px-6 flex items-center space-x-2 hover:bg-green-400 transition-transform hover:scale-105">
                            <span>PERFIL</span>
                        </a>

                        {{-- Formulário de Logout --}}
                        <form method="POST" action="{{ route('logout') }}" class="hidden sm:block">
                            @csrf
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"
                                class="text-gray-300 hover:text-white transition-colors font-semibold">
                                SAIR
                            </a>
                        </form>
                    @else
                        {{-- Se o usuário for um VISITANTE --}}
                        <a class="hidden sm:block text-gray-300 hover:text-white transition-colors font-semibold"
                            href="{{ route('login') }}">LOGIN</a>

                        <a href="{{ route('register') }}"
                            class="bg-green-500 text-black font-bold py-2 px-6 flex items-center space-x-2 hover:bg-green-400 transition-transform hover:scale-105">
                            <span>CRIE SUA CONTA</span>
                            <svg xmlns="http://www.w.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

</body>

<x-footer />

</html>
