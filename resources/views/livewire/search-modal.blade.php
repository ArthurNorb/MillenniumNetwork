{{-- resources/views/livewire/search-modal.blade.php --}}
<div> {{-- Elemento raiz obrigatório --}}
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

        {{-- COLUNA DE FILTROS --}}
        <aside class="md:col-span-1">
            <h3 class="text-lg font-semibold text-white mb-4 border-b border-zinc-700 pb-2">Filtros</h3>
            <div class="space-y-4">
                {{-- Filtro de Posição (Placeholder) --}}
                <div>
                    <label for="modal-position" class="block text-sm font-medium text-gray-300 mb-1">Posição</label>
                    <select id="modal-position" name="position" class="w-full bg-gray-900 border-0 border-b-2 border-zinc-700 text-gray-200 focus:border-green-500 focus:ring-0">
                        <option value="">Qualquer</option>
                        {{-- Opções virão da lógica --}}
                    </select>
                </div>

                {{-- Filtro de Idade (Placeholder) --}}
                <div>
                    <label for="modal-maxAge" class="block text-sm font-medium text-gray-300 mb-1">Idade Máxima</label>
                    <input type="number" id="modal-maxAge" name="maxAge" class="w-full bg-transparent border-0 border-b-2 border-zinc-700 text-gray-200 focus:border-green-500 focus:ring-0" placeholder="Ex: 21">
                </div>

                {{-- Filtro de Passaporte EU (Placeholder) --}}
                <div class="flex items-center pt-2">
                    <input id="modal-passport" name="passport" type="checkbox" class="h-4 w-4 text-green-600 bg-gray-700 border-gray-600 focus:ring-green-500">
                    <label for="modal-passport" class="ml-2 block text-sm text-gray-300">Passaporte Europeu</label>
                </div>

                {{-- Botão Limpar Filtros (Placeholder) --}}
                <button type="button" class="w-full text-sm text-gray-400 hover:text-white underline pt-4">
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

            {{-- Grid de Resultados (Placeholder) --}}
            <div wire:loading.remove>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    {{-- Cards dos atletas virão aqui --}}
                    <div class="bg-zinc-800 border border-zinc-700 p-4 text-center">
                        <p class="text-gray-400">Resultado 1</p>
                    </div>
                     <div class="bg-zinc-800 border border-zinc-700 p-4 text-center">
                        <p class="text-gray-400">Resultado 2</p>
                    </div>
                </div>
                {{-- Paginação virá aqui --}}
            </div>
        </main>

    </div>
</div>