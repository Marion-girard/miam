<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentaireController extends Controller
{
    public function store($id, Request $request )
    {
        $data = $request->validate([
            'contenue' => 'required',
        ]);

        $user = Auth::user(); // Récupérer l'utilisateur actuellement connecté
        $recipe = Recipe::find($id);
        $data['user_id'] = $user->id; // Ajouter l'ID de l'utilisateur à $data
        $data['recipe_id'] = $recipe->id;

        Commentaire::create($data);

        dump($data);
       // return redirect()->route('commentaire.test');


        /*$user = Auth::user();

        $data['user_id'] = $user->id;
        Recipe::create($data);

        return redirect()->route('recipe.index'); */ // redirige vers la liste après la création
    }

    public function test($id) {

        request()->validate([
            'contenue' => [],
        ]);
        $recipe = Recipe::find($id);
        
        return (dump($recipe->id) . request('contenue'));
    }

    public function show($recipe_id)
    {
        $commentaire = Commentaire::find($recipe_id);
    
        if (!$commentaire) {
            return redirect()->route('recipe.index')->with('error', 'Recette non trouvée.');
        }
    
        return view('recipe.show', compact('commentaire'));
    }

    
}
