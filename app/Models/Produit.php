<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'photo',
        'nom',
        'ingredients',
        'description',
        'taille',
        'prix',
     ];

     public function detailCommandes()
    {
        return $this->belongsToMany(Detail_commande::class);
    }
}
