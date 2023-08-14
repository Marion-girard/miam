<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description', 
        'ingredients',
        'instructions',
        'user_id'
    ];

    public function user()
    {   //une recette appartient à un utilisateur
        return $this->belongsTo(User::class); 
    }
    public function ingredients()
    {
        return $this->belongsToMany(Ingredients::class, 'recipe_ingredient');
    }
    public function intructions()
    {
        return $this->hasMany(Instructions::class);
    }
}

