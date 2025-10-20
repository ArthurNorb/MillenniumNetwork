<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\AthleteProfile;
use Illuminate\Support\Facades\Hash; // Importar Hash
use Carbon\Carbon; // Para datas

class AthleteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Limpa a tabela antes de popular (opcional, bom para testes repetidos)
        // User::where('role', 'athlete')->each(function ($user) {
        //     $user->athleteProfile()->delete();
        //     $user->delete();
        // });

        // Lista de posições possíveis
        $positions = ['Goleiro', 'Zagueiro', 'Lateral Direito', 'Lateral Esquerdo', 'Volante', 'Meio-Campo', 'Ponta Direita', 'Ponta Esquerda', 'Atacante'];
        $dominantFeet = ['Direito', 'Esquerdo', 'Ambidestro'];

        // Criar 20 atletas fictícios
        for ($i = 0; $i < 20; $i++) {
            // Cria o usuário primeiro
            $user = User::factory()->create([
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'password' => Hash::make('password'), // Senha padrão para todos
                'role' => 'athlete', // Define o papel como atleta
                'email_verified_at' => now(), // Marca o email como verificado
            ]);

            // Cria o perfil associado, usando dados do Faker
            AthleteProfile::create([
                'user_id' => $user->id,
                'birth_date' => Carbon::instance(fake()->dateTimeBetween('-30 years', '-16 years')), // Gera data de nascimento entre 16 e 30 anos atrás
                'position' => fake()->randomElement($positions),
                'height_cm' => fake()->numberBetween(165, 200), // Altura entre 165cm e 200cm
                'weight_kg' => fake()->numberBetween(60, 95), // Peso entre 60kg e 95kg
                'dominant_foot' => fake()->randomElement($dominantFeet),
                'passport_eu_bool' => fake()->boolean(25), // 25% de chance de ter passaporte europeu
                'bio' => fake()->paragraph(3), // Gera uma pequena biografia
                'current_club' => fake()->boolean(70) ? fake()->company() . ' FC' : null, // 70% de chance de ter um clube atual
            ]);
        }

        // Exibe uma mensagem no console
        $this->command->info('AthleteSeeder executado com sucesso! 20 atletas criados.');
    }
}