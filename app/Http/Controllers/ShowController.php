<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\RecipeController;

class ShowController extends Controller
{
    public function show(){
        $recipeAll= recipe:all ;
        return "recipe.index";
    }
}
