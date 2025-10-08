<?php

namespace App\Http\Controllers;

use App\Models\AthleteProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AthleteProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Mostra o formulário para criar um novo perfil.
     */
    public function create()
    {
        if (Auth::user()->athleteProfile) {
            return redirect()->route('dashboard');
        }
        return view('athlete.profile.create');
    }

    /**
     * Salva o novo perfil no banco de dados.
     */
    public function store(Request $request)
    {
        // 1. Validar os dados que vêm do formulário
        $validated = $request->validate([
            'position' => ['required', 'string', 'max:255'],
            'dominant_foot' => ['required', 'string', Rule::in(['Direito', 'Esquerdo', 'Ambidestro'])],
            'height_cm' => ['nullable', 'integer', 'min:100', 'max:250'],
            'weight_kg' => ['nullable', 'integer', 'min:30', 'max:200'],
            'current_club' => ['nullable', 'string', 'max:255'],
            'bio' => ['nullable', 'string', 'max:1000'],
        ]);

        // 2. Criar uma nova instância do perfil do atleta
        $profile = new AthleteProfile();

        // 3. Atribuir cada valor individualmente
        $profile->user_id = Auth::id(); // Associa o perfil ao usuário logado
        $profile->position = $validated['position'];
        $profile->dominant_foot = $validated['dominant_foot'];
        $profile->height_cm = $validated['height_cm'] ?? null;
        $profile->weight_kg = $validated['weight_kg'] ?? null;
        $profile->current_club = $validated['current_club'] ?? null;
        $profile->bio = $validated['bio'] ?? null;

        // 4. Salvar o novo perfil no banco de dados
        $profile->save();

        // 5. Redirecionar para o dashboard com uma mensagem de sucesso
        return redirect('/')->with('status', 'Perfil criado com sucesso! Bem-vindo à Millennium Network.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $user->load('athleteProfile');
        return view('athlete.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
