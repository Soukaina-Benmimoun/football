<?php

namespace App\Models;
use App\Models\Equipe;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    use HasFactory;
    public function equipe()
    {
        return $this->belongsTo(Equipe::class);
    }
    
}
