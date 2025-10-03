<x-guest-layout>
    <div class="w-full max-w-5xl mx-auto p-4 sm:p-6 lg:p-8">
        <div
            class="grid md:grid-cols-2 gap-8 bg-zinc-900/50 border border-zinc-800 shadow-2xl rounded-lg overflow-hidden">

            <div class="p-8 flex flex-col justify-center items-center md:items-start text-center md:text-left">
                <a href="/" class="mb-6">
                    <img src="{{ asset('images/logo.svg') }}" class="h-16" alt="Millennium Network Logo">
                </a>
                <h1 class="text-3xl font-bold text-white mb-2">Crie sua Conta</h1>
                <p class="text-gray-300">Faça parte da rede que acelera a carreira de atletas de futebol.</p>
            </div>

            <div class="p-8 bg-zinc-950">
                <x-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div>
                        <x-label for="role" value="{{ __('Tipo de Conta') }}" />
                        <x-select id="role" name="role" required>
                            <option class="bg-zinc-900 text-gray-200" value="athlete">{{ __('Atleta') }}</option>
                            <option class="bg-zinc-900 text-gray-200" value="mentor">{{ __('Mentor') }}</option>
                            <option class="bg-zinc-900 text-gray-200" value="recruiter">{{ __('Recrutador') }}</option>
                        </x-select>
                    </div>

                    <div class="mt-4">
                        <x-label for="name" value="{{ __('Nome Completo') }}" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="old('name')" required autofocus autocomplete="name" />
                    </div>

                    <div class="mt-4">
                        <x-label for="email" value="{{ __('Email') }}" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                            :value="old('email')" required autocomplete="username" />
                    </div>

                    <div class="mt-4">
                        <x-label for="password" value="{{ __('Senha') }}" />
                        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                            autocomplete="new-password" />
                    </div>

                    <div class="mt-4">
                        <x-label for="password_confirmation" value="{{ __('Confirmar Senha') }}" />
                        <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                            name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <a class="underline text-sm text-gray-400 hover:text-green-400 rounded-md focus:outline-none"
                            href="{{ route('login') }}">
                            {{ __('Já tem uma conta?') }}
                        </a>

                        <x-button>
                            {{ __('Registrar') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
