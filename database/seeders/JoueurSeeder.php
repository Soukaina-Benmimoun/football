<?php

namespace Database\Seeders;

use App\Models\Joueur;
use Illuminate\Database\Seeder;

class JoueurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Joueur::factory()->count(100)->create();
    }
}