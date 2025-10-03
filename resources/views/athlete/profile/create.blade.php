{{-- resources/views/athlete/profile/create.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Complete seu Perfil de Atleta') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                    
                    <x-validation-errors class="mb-4" />

                    <form action="{{ route('athlete.profile.store') }}" method="POST">
                        @csrf

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <x-label for="position" value="{{ __('Posição Principal') }}" />
                                <x-input id="position" class="block mt-1 w-full" type="text" name="position" :value="old('position')" required placeholder="Ex: Atacante" />
                            </div>

                            <div>
                                <x-label for="dominant_foot" value="{{ __('Pé Dominante') }}" />
                                <select name="dominant_foot" id="dominant_foot" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>
                                    <option value="Direito">{{ __('Direito') }}</option>
                                    <option value="Esquerdo">{{ __('Esquerdo') }}</option>
                                    <option value="Ambidestro">{{ __('Ambidestro') }}</option>
                                </select>
                            </div>

                            <div>
                                <x-label for="height_cm" value="{{ __('Altura (cm)') }}" />
                                <x-input id="height_cm" class="block mt-1 w-full" type="number" name="height_cm" :value="old('height_cm')" placeholder="Ex: 180" />
                            </div>

                            <div>
                                <x-label for="weight_kg" value="{{ __('Peso (kg)') }}" />
                                <x-input id="weight_kg" class="block mt-1 w-full" type="number" name="weight_kg" :value="old('weight_kg')" placeholder="Ex: 75" />
                            </div>
                            
                            <div class="md:col-span-2">
                                <x-label for="current_club" value="{{ __('Clube Atual (se houver)') }}" />
                                <x-input id="current_club" class="block mt-1 w-full" type="text" name="current_club" :value="old('current_club')" placeholder="Ex: Millennium FC" />
                            </div>

                            <div class="md:col-span-2">
                                <x-label for="bio" value="{{ __('Fale sobre você') }}" />
                                <textarea id="bio" name="bio" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" rows="4">{{ old('bio') }}</textarea>
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <x-button>
                                {{ __('Salvar Perfil') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>