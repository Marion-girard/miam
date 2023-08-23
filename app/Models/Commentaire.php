<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'contenue',
        'user_id',
        'recipe_id'
    ];

    public function user()
    {   //une recette appartient à un utilisateur
        return $this->belongsTo(User::class); 
    }

    public function recipe()
    {
        return $this->belongsTo(Recipe::class);
    }
}
