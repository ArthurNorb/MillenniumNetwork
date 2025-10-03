<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de {{ $user->name }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans">

    <div class="container mx-auto p-4 sm:p-8">

        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
            <div class="p-6">
                <div class="flex flex-col sm:flex-row items-start sm:items-center">
                    <img class="h-24 w-24 rounded-full object-cover mr-6 border-4 border-gray-200" src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}">

                    <div class="mt-4 sm:mt-0">
                        <h1 class="text-3xl font-bold text-gray-900">{{ $user->name }}</h1>
                        <p class="text-xl text-indigo-600 font-semibold">{{ $user->athleteProfile?->position ?? 'Posição não informada' }}</p>
                    </div>
                </div>

                <div class="mt-6 grid grid-cols-2 sm:grid-cols-4 gap-4 border-t border-gray-200 pt-4">
                    <div class="text-center">
                        <p class="text-sm text-gray-500">Altura</p>
                        <p class="text-lg font-semibold">{{ $user->athleteProfile?->height_cm ? $user->athleteProfile->height_cm . ' cm' : 'N/A' }}</p>
                    </div>
                    <div class="text-center">
                        <p class="text-sm text-gray-500">Peso</p>
                        <p class="text-lg font-semibold">{{ $user->athleteProfile?->weight_kg ? $user->athleteProfile->weight_kg . ' kg' : 'N/A' }}</p>
                    </div>
                    <div class="text-center">
                        <p class="text-sm text-gray-500">Pé Dominante</p>
                        <p class="text-lg font-semibold">{{ $user->athleteProfile?->dominant_foot ?? 'N/A' }}</p>
                    </div>
                    <div class="text-center">
                        <p class="text-sm text-gray-500">Passaporte EU</p>
                        <p class="text-lg font-semibold">{{ $user->athleteProfile?->passport_eu_bool ? 'Sim' : 'Não' }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8">
            {{-- Aqui adicionaremos as seções de Biografia, Vídeos e Atualizações --}}
        </div>

    </div>

</body>
</html>