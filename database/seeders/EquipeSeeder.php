<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Equipe;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Utilisez la factory pour créer  10 équipes
        Equipe::factory()->count(50)->create();
    }
}
