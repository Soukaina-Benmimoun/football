<?php

namespace Database\Factories;

use App\Models\Equipe;
use Illuminate\Database\Eloquent\Factories\Factory;

class EquipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Equipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $pays = [
            'France',
            'Brésil',
            'Russie',
            'Canada',
            'Espagnole'
        ];
        $equipes = [
            'France' => ['Paris Saint-Germain', 'Olympique Lyonnais', 'AS Monaco', 'Olympique de Marseille','AS Saint-Étienne', 'Bordeaux',  'Toulouse FC'],
            'Brésil' => ['São Paulo FC', 'Flamengo', 'Fluminense', 'Palmeiras', 'Corinthians', 'Santos', 'Grêmio'],
            'Russie' => ['CSKA Moscou', 'Spartak Moscou', 'Zenit Saint-Pétersbourg', 'Lokomotiv Moscou', 'Dynamo Moscou', 'Rubin Kazan', 'Anzhi Makhachkala'],
            'Canada' => ['Toronto FC', 'Vancouver Whitecaps FC', 'Montreal Impact', 'Edmonton FC', 'CF Montréal', 'York9 FC', 'Pacific FC'],
            'Espagnole'=>['Real Madrid','Barcelona','Atlético Madrid','Sevilla FC','Valencia CF', 'Athletic Bilbao','Real Betis'],
        ];
        $paysAleatoire = $this->faker->randomElement($pays);
        $equipeAleatoire = $this->faker->randomElement($equipes[$paysAleatoire]);
        return [
            'nom' =>$equipeAleatoire,
            'entraineur' => $this->faker->name,
            'classement' => $this->faker->numberBetween(1, 50),
            'pays' => $paysAleatoire,
            'division' => $this->faker->randomElement(['Premier League', 'La Liga', 'Bundesliga', 'Serie A', 'Ligue  1']),
        ];
    }
}