<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantite',
        'prix_total',
     ];

     public function commande()
    {
        return $this->belongsTo(Commande::class);
    }

    public function produits()
    {
        return $this->belongsToMany(Produit::class);
    }
}
