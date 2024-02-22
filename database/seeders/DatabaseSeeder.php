<?php

namespace Database\Seeders;
use App\Models\Equipe;
use App\Models\Joueur;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $equipes = Equipe::factory(50)->create();

        // Pour chaque équipe, créer un joueur avec un ID d'équipe aléatoire
        foreach ($equipes as $equipe) {
            Joueur::factory()->count(5)->create([
                'equipe_id' => $equipe->id,
            ]);
        }    
    }
}
