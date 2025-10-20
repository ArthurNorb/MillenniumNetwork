<div> {{-- Elemento raiz obrigatório --}}
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

        {{-- COLUNA DE FILTROS --}}
        <aside class="md:col-span-1">
            <h3 class="text-lg font-semibold text-white mb-4 border-b border-zinc-700 pb-2">Filtros</h3>
            <div class="space-y-4">
                {{-- Filtro de Posição --}}
                <div>
                    <label for="modal-position" class="block text-sm font-medium text-gray-300 mb-1">Posição</label>
                    {{-- Ligado à propriedade $position, atualiza ao vivo --}}
                    <select wire:model.live="position" id="modal-position"
                        class="w-full bg-gray-900 border-0 border-b-2 border-zinc-700 text-gray-200 focus:border-green-500 focus:ring-0">
                        <option value="">Qualquer</option>
                        {{-- Popula as opções --}}
                        @foreach ($positions as $pos)
                            <option value="{{ $pos }}">{{ $pos }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- Filtro de Idade --}}
                <div>
                    <label for="modal-maxAge" class="block text-sm font-medium text-gray-300 mb-1">Idade Máxima</label>
                    {{-- Ligado à propriedade $maxAge, atualiza após desfocar --}}
                    <input wire:model.blur="maxAge" type="number" id="modal-maxAge"
                        class="w-full bg-transparent border-0 border-b-2 border-zinc-700 text-gray-200 focus:border-green-500 focus:ring-0"
                        placeholder="Ex: 21">
                </div>

                {{-- Filtro de Passaporte EU --}}
                <div class="flex items-center pt-2">
                    {{-- Ligado à propriedade $hasEuPassport, atualiza ao vivo --}}
                    <input wire:model.live="hasEuPassport" id="modal-passport" type="checkbox"
                        class="h-4 w-4 text-green-600 bg-gray-700 border-gray-600 focus:ring-green-500">
                    <label for="modal-passport" class="ml-2 block text-sm text-gray-300">Passaporte Europeu</label>
                </div>

                {{-- Botão Limpar Filtros --}}
                <button wire:click="clearFilters" type="button"
                    class="w-full text-sm text-gray-400 hover:text-white underline pt-4">
                    Limpar Filtros
                </button>
            </div>
        </aside>

        {{-- ÁREA DE RESULTADOS --}}
        <main class="md:col-span-3">
            {{-- Indicador de Carregamento --}}
            <div wire:loading class="text-center text-gray-500 py-6">
                A procurar...
            </div>

            {{-- Grid de Resultados --}}
            <div wire:loading.remove>
                @if ($athletes->count() > 0)
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        @foreach ($athletes as $athlete)
                            {{-- Card do Atleta (Adaptado de pages/athlete/index.blade.php) --}}
                            <a href="{{ route('athlete.show', $athlete) }}"
                                class="block bg-zinc-800 border border-zinc-700 group transition-colors hover:border-green-500">
                                <div class="flex items-center p-4 gap-4">
                                    <img class="h-16 w-16 object-cover flex-shrink-0"
                                        src="{{ $athlete->profile_photo_url }}" alt="{{ $athlete->name }}">
                                    <div class="flex-grow overflow-hidden">
                                        <h3 class="text-base font-bold text-white truncate">{{ $athlete->name }}</h3>
                                        <p class="text-sm text-green-400 font-semibold">
                                            {{ $athlete->athleteProfile->position }}</p>
                                        {{-- Adicionar ícone de passaporte se tiver --}}
                                        @if ($athlete->athleteProfile->passport_eu_bool)
                                            <span class="text-xs text-blue-400 mt-1 inline-block"
                                                title="Passaporte Europeu">🇪🇺 EU Passport</span>
                                        @endif
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>

                    {{-- Links de Paginação --}}
                    <div class="mt-8">
                        {{ $athletes->links() }}
                    </div>
                @else
                    {{-- Mensagem se não encontrar resultados --}}
                    <p class="text-center text-gray-500 py-6">Nenhum atleta encontrado com estes filtros.</p>
                @endif
            </div>
        </main>

    </div>
</div>
