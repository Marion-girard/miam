<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentaireController extends Controller
{
    public function store(Request $request,  $id)
    {
        $data = $request->validate([
            'contenue' => 'required',
        ]);

        $user = Auth::user(); // Récupérer l'utilisateur actuellement connecté
        
        $data['user_id'] = $user->id; // Ajouter l'ID de l'utilisateur à $data
        $data['recipe_id'] = $id;
        Commentaire::create($data);

        return redirect()->route('recipe.create');


        /*$user = Auth::user();

        $data['user_id'] = $user->id;
        Recipe::create($data);

        return redirect()->route('recipe.index'); */ // redirige vers la liste après la création
    }

    public function test() {
        return ('commentaire remplie');
    }
}
