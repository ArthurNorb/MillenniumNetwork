<?php

namespace App\Http\Controllers;

use App\Models\User; // Importar o model User
use Illuminate\Http\Request;

class PublicAthleteProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Busca todos os usuários que são atletas e que já completaram o perfil
        $athletes = User::where('role', 'athlete')
                        ->whereHas('athleteProfile')
                        ->with('athleteProfile') // Carrega o perfil para evitar queries extras
                        ->latest() // Ordena pelos mais recentes
                        ->paginate(12); // Paginação para não sobrecarregar a página

        return view('pages.athlete.index', compact('athletes'));
    }
    
    /**
     * Display the specified resource.
     */
    public function show(User $athlete)
    {
        if ($athlete->role !== 'athlete' || !$athlete->athleteProfile) {
            abort(404);
        }
        
        $athlete->load([
            'athleteProfile', 
            'videos', 
            'athleteUpdates' => function ($query) {
                $query->latest(); // Ordena as atualizações pela mais recente
            }
        ]);

        $athlete->load('athleteProfile', 'videos');
        return view('pages.athlete.show', compact('athlete'));
    }
}