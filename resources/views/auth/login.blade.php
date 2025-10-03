<x-guest-layout>
    <div class="w-full max-w-5xl mx-auto p-4 sm:p-6 lg:p-8">
        <div class="grid md:grid-cols-2 gap-8 bg-zinc-900/50 border border-zinc-800 shadow-2xl rounded-lg overflow-hidden">

            <div class="p-8 flex flex-col justify-center items-center md:items-start text-center md:text-left">
                <a href="/" class="mb-6">
                    <img src="{{ asset('images/logo.svg') }}" class="h-16" alt="Millennium Network Logo">
                </a>
                <h1 class="text-3xl font-bold text-white mb-2">Bem-vindo de volta!</h1>
                <p class="text-gray-300">Acesse sua conta para continuar sua jornada no futebol de alto nível.</p>
            </div>

            <div class="p-8 bg-zinc-950">
                <x-validation-errors class="mb-4" />

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div>
                        <x-label for="email" value="{{ __('Email') }}" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    </div>

                    <div class="mt-4">
                        <x-label for="password" value="{{ __('Senha') }}" />
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    </div>

                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-checkbox id="remember_me" name="remember" />
                            <span class="ms-2 text-sm text-gray-400">{{ __('Lembrar de mim') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <a class="underline text-sm text-gray-400 hover:text-green-400 rounded-md focus:outline-none" href="{{ route('register') }}">
                            {{ __('Não tem uma conta?') }}
                        </a>

                        <x-button>
                            {{ __('Entrar') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>