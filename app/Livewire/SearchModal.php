<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\AthleteProfile; // Importar AthleteProfile
use Livewire\Component;
use Livewire\WithPagination; // Para paginação
use Carbon\Carbon; // Para calcular idade

class SearchModal extends Component
{
    use WithPagination;

    // Propriedades ligadas aos filtros do formulário
    public string $position = '';
    public ?int $maxAge = null; // Idade máxima
    public bool $hasEuPassport = false;

    // Propriedades para popular o select de posições
    public $positions = [];

    // Método executado quando o componente é inicializado
    public function mount()
    {
        // Pega todas as posições únicas do banco para o <select>
        $this->positions = AthleteProfile::whereNotNull('position')
            ->distinct()
            ->orderBy('position')
            ->pluck('position')
            ->toArray();
    }

    // Método para limpar todos os filtros
    public function clearFilters()
    {
        $this->reset(['position', 'maxAge', 'hasEuPassport']);
        // Reseta a paginação ao limpar filtros
        $this->resetPage();
    }

    // Método executado sempre que uma propriedade pública é atualizada
    // Usado aqui para resetar a paginação quando um filtro muda
    public function updated($property)
    {
        if (in_array($property, ['position', 'maxAge', 'hasEuPassport'])) {
            $this->resetPage();
        }
    }

    public function render()
    {
        // Começa a query buscando usuários atletas com perfil
        $query = User::where('role', 'athlete')->whereHas('athleteProfile');

        // Aplica os filtros na query do AthleteProfile
        $query->whereHas('athleteProfile', function ($profileQuery) {
            // Filtro por Posição
            if (!empty($this->position)) {
                $profileQuery->where('position', $this->position);
            }

            // Filtro por Passaporte Europeu
            if ($this->hasEuPassport) {
                // Assumindo que a coluna se chama passport_eu_bool como na migration
                $profileQuery->where('passport_eu_bool', true);
            }

            // Filtro por Idade Máxima
            // IMPORTANTE: Isto assume que existe uma coluna 'birth_date' na tabela athlete_profiles.
            // Se não existir, precisará adicionar via migration.
            if (!empty($this->maxAge)) {
                $minBirthDate = Carbon::now()->subYears($this->maxAge + 1)->addDay()->toDateString();
                // Adiciona condição where para birth_date. Cuidado se a coluna não existir!
                $profileQuery->whereDate('birth_date', '>=', $minBirthDate);
            }
        });

        // Executa a query com paginação
        $athletes = $query->with('athleteProfile')->paginate(6); // 6 atletas por página no modal

        return view('livewire.search-modal', [
            'athletes' => $athletes,
        ]);
    }
}
