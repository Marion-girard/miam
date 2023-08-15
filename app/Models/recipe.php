<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description', 
        'ingredients',
        'instructions',
        'create_at',
        'update_at',
        'user_id'
    ];

    public function user()
    {   //une recette appartient à un utilisateur
        return $this->belongsTo(User::class); 
    }
}

