<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;

    protected $fillable = [
        'moyen_paiement',
        'montant',
        'statut',
     ];

     public function commandes()
     {
         return $this->hasMany(Commande::class);
     }
}
