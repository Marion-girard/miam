<?php

namespace App\Http\Controllers;

use App\Models\recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //récupérer les recettes
        $recipe = recipe::all();
        //retourne l'index
        return view('recipe.index', compact('recipe'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //retourne create
        return view('recipe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //enregistre 1 nouvl recette ds la bdd
        $data = $request->validate ([
            'title' =>'required',
            'ingredients' =>'required',
            'step' =>'required',
        ]);

        $recipe = Recipe::create($data);
        return redirect()->route('recipe.show', $recipe->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(recipe $recipe)
    {
        //affiche 1 recette 
        return view('recipe.show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(recipe $recipe)
    {
        //affiche le form pour éditer 1 recette existante
        return view('recipe.edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, recipe $recipe)
    {
        //mets à jour une recette ds la bdd
        $data = $request->validate ([
            'title' =>'required',
            'ingredients' =>'required',
            'step' =>'required',
        ]);

        $recipe->update($data);
        return redirect()->route('recipe.show', $recipe->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(recipe $recipe)
    {
        //supprime 1 recette
        $recipe->delete();
        return redirect()->route('recipe.index');
    }
}
