@extends('layouts.public')

@section('title', 'Millennium Network - A Plataforma para Atletas de Futebol')

@section('content')

    <section class="relative h-screen flex items-center justify-center text-center overflow-hidden">
        <div class="absolute z-0 top-0 left-0 w-full h-full overflow-hidden">
            <iframe class="absolute top-1/2 left-1/2 min-w-full min-h-full w-auto h-auto -translate-x-1/2 -translate-y-1/2 scale-[2.5] opacity-20"
                    src="https://www.youtube.com/embed/L3374C3OyrY?&autoplay=1&mute=1&loop=1&playlist=L3374C3OyrY&controls=0&showinfo=0&autohide=1&modestbranding=1"
                    title="YouTube video player"
                    frameborder="0">
            </iframe>
        </div>

        <div class="relative z-10 p-6">
            <h1 class="text-5xl md:text-7xl font-extrabold text-white leading-tight mb-4 animate-fade-in-down">
                Onde Carreiras Começam e Lendas Nascem
            </h1>
            <p class="text-lg md:text-xl text-gray-300 max-w-3xl mx-auto mb-8 animate-fade-in-up">
                A Millennium Network é a sua conexão direta com mentores, recrutadores e o próximo nível do futebol profissional.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('register') }}" class="w-full sm:w-auto bg-green-500 text-black font-bold py-3 px-8 flex items-center justify-center space-x-2 hover:bg-green-400 transition-transform hover:scale-105 rounded-lg shadow-lg">
                    <span>CRIAR MINHA CONTA</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                </a>
                <a href="#" class="w-full sm:w-auto bg-zinc-800 text-white font-bold py-3 px-8 flex items-center justify-center space-x-2 hover:bg-zinc-700 transition-transform hover:scale-105 rounded-lg shadow-lg">
                    <span>SOU RECRUTADOR</span>
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-zinc-950">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-white mb-4">Tudo que Você Precisa para Evoluir</h2>
            <p class="text-gray-400 mb-12 max-w-2xl mx-auto">Ferramentas e conexões para transformar potencial em realidade.</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-zinc-900 p-8 rounded-lg border border-zinc-800">
                    <h3 class="text-2xl font-bold text-green-400 mb-3">Perfis Visíveis</h3>
                    <p class="text-gray-300">Crie um perfil profissional completo com vídeos, estatísticas e histórico. Seja encontrado por olheiros de todo o mundo.</p>
                </div>
                <div class="bg-zinc-900 p-8 rounded-lg border border-zinc-800">
                    <h3 class="text-2xl font-bold text-green-400 mb-3">Mentorias 1-a-1</h3>
                    <p class="text-gray-300">Agende sessões online com mentores experientes, ex-jogadores e profissionais da área para acelerar seu desenvolvimento.</p>
                </div>
                <div class="bg-zinc-900 p-8 rounded-lg border border-zinc-800">
                    <h3 class="text-2xl font-bold text-green-400 mb-3">Lives e Conteúdo</h3>
                    <p class="text-gray-300">Acesse uma biblioteca de lives, workshops e análises táticas para aprimorar seu conhecimento dentro e fora de campo.</p>
                </div>
            </div>
        </div>
    </section>

@endsection