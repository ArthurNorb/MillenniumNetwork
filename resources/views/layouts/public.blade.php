<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Millennium Network')</title>

    {{-- Tipografia (inspirada no site) --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Adiciona a fonte Poppins como padrão */
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="bg-zinc-950 text-gray-200 antialiased">

    {{-- ===== NAVBAR (Inspirada no Showcase/Camp) ===== --}}
    <nav class="bg-black/80 backdrop-blur-md sticky top-0 z-50 shadow-lg">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                {{-- Logo SVG (extraído do código que você enviou) --}}
                <a href="/" title="Millennium Network">
                    <svg class="h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 608 156" fill="none">
                        <defs><linearGradient id="logoGradient" x1="0" y1="78" x2="608" y2="78" gradientUnits="userSpaceOnUse"><stop stop-color="#D91136"></stop><stop offset="0.33" stop-color="#F2274C"></stop><stop offset="0.66" stop-color="#BF0426"></stop></linearGradient></defs>
                        <path d="M10.4096 0H23.3686L43.2318 56.8691L79.3469 0H91.9871L81.5775 73.4472H69.6808L76.5851 24.4474L45.1438 73.4472H36.2213L18.9073 24.3425L11.8967 73.4472H0L10.4096 0Z" fill="url(#logoGradient)"></path><path d="M97.2617 0H109.796L99.3861 73.4472H86.852L97.2617 0Z" fill="url(#logoGradient)"></path><path d="M115.132 0H127.667L118.85 61.8006H161.763L160.064 73.4472H104.723L115.132 0Z" fill="url(#logoGradient)"></path><path d="M175.741 0H188.275L179.458 61.8006H222.371L220.672 73.4472H165.331L175.741 0Z" fill="url(#logoGradient)"></path><path d="M236.349 0H291.583L289.884 11.6466H247.183L244.74 29.3789H285.741L284.042 41.0255H243.04L240.066 61.8006H282.767L281.174 73.4472H225.939L236.349 0Z" fill="url(#logoGradient)"></path><path d="M296.853 0H307.794L342.422 53.0918L349.963 0H362.179L351.769 73.4472H341.041L306.2 20.5652L298.659 73.4472H286.443L296.853 0Z" fill="url(#logoGradient)"></path><path d="M367.523 0H378.464L413.092 53.0918L420.633 0H432.849L422.439 73.4472H411.711L376.87 20.5652L369.329 73.4472H357.113L367.523 0Z" fill="url(#logoGradient)"></path><path d="M438.193 0H450.727L440.317 73.4472H427.783L438.193 0Z" fill="url(#logoGradient)"></path><path d="M477.945 74.7063C458.967 74.7063 449.478 66.3823 449.478 49.7342C449.478 48.4751 449.62 46.3766 449.903 43.4388L456.064 0H468.598L462.437 43.7535C462.154 45.5023 462.012 47.321 462.012 49.2096C462.012 54.0361 463.393 57.5686 466.155 59.807C468.987 62.0454 473.519 63.1646 479.751 63.1646C487.045 63.1646 492.391 61.6607 495.79 58.6528C499.26 55.645 501.491 50.6786 502.482 43.7535L508.643 0H521.071L514.91 43.6486C513.423 54.0711 509.493 61.8705 503.119 67.0468C496.746 72.1531 488.355 74.7063 477.945 74.7063Z" fill="url(#logoGradient)"></path><path d="M526.422 0H539.381L559.245 56.8691L595.36 0H608L597.59 73.4472H585.694L592.598 24.4474L561.157 73.4472H552.234L534.92 24.3425L527.91 73.4472H516.013L526.422 0Z" fill="url(#logoGradient)"></path>
                    </svg>
                </a>
                
                {{-- Botão de Ação (CTA) --}}
                <a href="#" class="bg-green-500 text-black font-bold py-2 px-6 flex items-center space-x-2 hover:bg-green-400 transition-transform hover:scale-105">
                    <span>ÁREA DO ATLETA</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                </a>
            </div>
        </div>
    </nav>

    {{-- ===== CONTEÚDO DA PÁGINA ===== --}}
    <main>
        @yield('content')
    </main>

</body>
</html>