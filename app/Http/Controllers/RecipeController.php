<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recipes = Recipe::all();
        return view('recipe.index', compact('recipes'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $recipes = Recipe::all();
        return view('recipe.index', compact('recipes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'ingredients' => 'required',
            'instructions' => 'required',
        ]);

        $user = Auth::user(); // Récupérer l'utilisateur actuellement connecté

        $data['user_id'] = $user->id; // Ajouter l'ID de l'utilisateur à $data
        $data['user_name'] = $user->name;
        Recipe::create($data);

        return redirect()->route('recipe.create');


        /*$user = Auth::user();

        $data['user_id'] = $user->id;
        Recipe::create($data);

        return redirect()->route('recipe.index'); */ // redirige vers la liste après la création
    }

    
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $recipe = Recipe::find($id);

    
        if (!$recipe) {
            return redirect()->route('recipe.index')->with('error', 'Recette non trouvée.');
        }
    
        return view('recipe.show', compact('recipe'));
    }
    

    public function getrecipebyId($id) 
    {
        $recipe = Recipe::find($id);
        if ($recipe) {
            return view('recipe.show', compact('recipe'));
        }
        
        // Si la recette n'est pas trouvée, redirige vers la liste.
        return redirect()->route('recipe.index');
    }
    
    public function test() {
        return ('recette remplie');
    }
    
    


       /* public function getUserbyId($id) {
            $recipe = DB::table('users')->find($id);
            if ($recipe) {
                return view('recipe.index', ['user' => $recipe]);
            }

            $user = Auth::user(); // Récupérer l'utilisateur actuellement connecté

            $data['user_id'] = $user->id; // Ajouter l'ID de l'utilisateur à $data
        if (!$recipe) {
            return redirect()->route('recipe.index')->with('error', 'Recette non trouvée.');
        }
        
        return view('recipe.show', compact('recipe'));
    }*/
    

    /*public function getrecipebyId($id) 
    {
        $recipe = Recipe::find($id);
        if ($recipe) {
            return view('recipe.show', compact('recipe'));
        }
        
        // Si la recette n'est pas trouvée, redirige vers la liste.
        //return redirect()->route('recipe.index');
    }*/
    
    
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $recipe = Recipe::find($id);
        //affiche le form pour éditer 1 recette existante
        return view('recipe.edit',  compact('recipe')/*, [
            'recipe' => $request->recipe(), 
        ]*/);
    }
   public function update ($id, Request $request)
    {
        
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'ingredients' => 'required',
            'instructions' => 'required',
        ]);
        
        $recipe = Recipe::find($id);
        $recipe->title = $data['title'];
        $recipe->description = $data['description'];
        $recipe->ingredients = $data['ingredients'];
        $recipe->instructions = $data['instructions'];
        $recipe->save();
        return  view('recipe.index');
    }

    /**
     * Update the specified resource in storage.
     */
    /* public function update(Request $request, Recipe $recipe)
    {
        $data = $request->validate([
            'title' => 'required',
            'ingredients' => 'required',
            'instructions' => 'required',
        ]);

        $recipe->update($data);

        return redirect()->route('recipe.show', $recipe->id);
    }

    }*/

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
        $recipe = Recipe::findOrFail($id);
        $recipe->delete();
        
       return view('recipe.index');
    }
}