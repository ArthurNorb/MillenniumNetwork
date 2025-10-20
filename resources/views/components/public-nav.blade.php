{{-- resources/views/components/public-nav.blade.php --}}
<nav class="bg-black/80 backdrop-blur-md sticky top-0 z-50 shadow-lg">
    <div class="container mx-auto px-6 py-3">
        <div class="flex items-center justify-between">

            <a href="/" title="Millennium Network">
                <img src="{{ asset('images/logo.svg') }}" class="h-12" alt="Millennium Network Logo">
            </a>

            {{-- Links da Direita --}}
            <div class="flex items-center space-x-4 sm:space-x-6">

                {{-- Botão de Busca --}}
                <button @click="searchOpen = true" title="Buscar Atletas"
                    class="text-gray-300 hover:text-green-400 transition-colors p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
                
                {{-- Link ATLETAS --}}
                <a class="hidden sm:block text-gray-300 hover:text-green-400 transition-colors font-semibold"
                    href="{{ route('athlete.index') }}">ATLETAS</a>

                {{-- Lógica de Autenticação --}}
                @auth
                    {{-- Link PERFIL --}}
                    <a href="{{ route('athlete.show', ['athlete' => Auth::user()]) }}"
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
                    {{-- Link LOGIN --}}
                    <a class="hidden sm:block text-gray-300 hover:text-white transition-colors font-semibold"
                        href="{{ route('login') }}">LOGIN</a>

                    {{-- Botão CRIE SUA CONTA --}}
                    <a href="{{ route('register') }}"
                        class="bg-green-500 text-black font-bold py-2 px-6 flex items-center space-x-2 hover:bg-green-400 transition-transform hover:scale-105">
                        <span>CRIE SUA CONTA</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
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
