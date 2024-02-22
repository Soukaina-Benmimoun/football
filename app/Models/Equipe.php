<?php

namespace App\Models;
use App\Models\Joueur;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;
    public function joueurs()
{
    return $this->hasMany(Joueur::class);
}

}
