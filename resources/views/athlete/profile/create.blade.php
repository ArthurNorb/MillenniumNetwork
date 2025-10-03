@extends('layouts.public')

@section('title', 'Complete seu Perfil')

@section('content')
    <div class="py-12">
        <div class="w-full max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center mb-10">
                <h1 class="text-3xl font-bold text-white">Quase lá, {{ Auth::user()->name }}!</h1>
                <p class="text-gray-400 mt-2">Preencha os campos abaixo para que os recrutadores possam te encontrar.</p>
            </div>

            <div class="bg-zinc-900/50 border border-zinc-800 shadow-xl rounded-lg p-8">
                <x-validation-errors class="mb-4" />

                <form action="{{ route('athlete.profile.store') }}" method="POST">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6">
                        <div>
                            <x-label for="position" value="{{ __('Posição Principal') }}" />
                            <x-input id="position" class="block mt-2 w-full" type="text" name="position" :value="old('position')" required placeholder="Ex: Atacante" />
                        </div>

                        <div>
                            <x-label for="dominant_foot" value="{{ __('Pé Dominante') }}" />
                            <x-select id="dominant_foot" name="dominant_foot" class="mt-2" required>
                                <option class="bg-gray-900 text-gray-200" value="Direito">{{ __('Direito') }}</option>
                                <option class="bg-gray-900 text-gray-200" value="Esquerdo">{{ __('Esquerdo') }}</option>
                                <option class="bg-gray-900 text-gray-200" value="Ambidestro">{{ __('Ambidestro') }}</option>
                            </x-select>
                        </div>

                        <div>
                            <x-label for="height_cm" value="{{ __('Altura (cm)') }}" />
                            <x-input id="height_cm" class="block mt-2 w-full" type="number" name="height_cm" :value="old('height_cm')" placeholder="Ex: 180" />
                        </div>

                        <div>
                            <x-label for="weight_kg" value="{{ __('Peso (kg)') }}" />
                            <x-input id="weight_kg" class="block mt-2 w-full" type="number" name="weight_kg" :value="old('weight_kg')" placeholder="Ex: 75" />
                        </div>
                        
                        <div class="md:col-span-2">
                            <x-label for="current_club" value="{{ __('Clube Atual (opcional)') }}" />
                            <x-input id="current_club" class="block mt-2 w-full" type="text" name="current_club" :value="old('current_club')" placeholder="Ex: Millennium FC" />
                        </div>

                        <div class="md:col-span-2">
                            <x-label for="bio" value="{{ __('Fale sobre você (opcional)') }}" />
                            <textarea id="bio" name="bio" class="w-full bg-transparent border-0 border-b-2 border-zinc-700 text-gray-200 placeholder-zinc-500 focus:border-green-500 focus:ring-0 transition duration-300 ease-in-out mt-2 block rounded-md" rows="4">{{ old('bio') }}</textarea>
                        </div>
                    </div>

                    <div class="flex items-center justify-end mt-8">
                        <x-button>
                            {{ __('Salvar e Acessar Plataforma') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection