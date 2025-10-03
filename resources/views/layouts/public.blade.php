<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Millennium Network')</title>

    <link rel="icon" href="{{ asset('images/favicon.svg') }}" type="image/svg+xml">

    {{-- Tipografia (inspirada no site) --}}
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

    {{-- ===== NAVBAR ATUALIZADA ===== --}}
    <nav class="bg-black/80 backdrop-blur-md sticky top-0 z-50 shadow-lg">
        <div class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between">

                <a href="/" title="Millennium Network">
                    <img src="{{ asset('images/logo.svg') }}" class="h-12" alt="Millennium Network Logo">
                </a>

                {{-- Links de Navegação Funcionais para o Protótipo --}}
                <div class="flex items-center space-x-6">
                    <a class="hidden sm:block text-gray-300 hover:text-green-400 transition-colors font-semibold"
                        href="#">BUSCAR ATLETAS</a>
                    <a class="hidden sm:block text-gray-300 hover:text-green-400 transition-colors font-semibold"
                        href="/login">LOGIN</a>

                    {{-- Botão de Ação (CTA) --}}
                    <a href="#"
                        class="bg-green-500 text-black font-bold py-2 px-6 flex items-center space-x-2 hover:bg-green-400 transition-transform hover:scale-105">
                        <span>ÁREA DO ATLETA</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>

            </div>
        </div>
    </nav>

    {{-- ===== CONTEÚDO DA PÁGINA ===== --}}
    <main>
        @yield('content')
    </main>

</body>

<x-footer />

</html>
