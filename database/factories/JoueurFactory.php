<?php

namespace Database\Factories;

use App\Models\Equipe;
use App\Models\Joueur;
use Illuminate\Database\Eloquent\Factories\Factory;

class JoueurFactory extends Factory
{
    protected $model = Joueur::class;

    public function definition()
    {

        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'numero' => $this->faker->numberBetween(1,   99),
            'post' => $this->faker->randomElement(['Gardien', 'Défenseur', 'Milieu', 'Attaquant']),
            'age' => $this->faker->numberBetween(18,   40),
            'nationalite' => $this->faker->randomElement(['allemand', 'belge', 'espagnol', 'Argentine',"français", "grec"]),
            'gols' => $this->faker->numberBetween(0,   50),
            'assists' => $this->faker->numberBetween(0,   50),
            'equipe_id' => \App\Models\Equipe::factory(),
        ];
    }
}