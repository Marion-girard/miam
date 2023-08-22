<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\AcceuilController;
use App\Http\Controllers\CommentaireController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Routes sans authentification
Route::get('/', function () {
    return view('layout');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/recette', [AcceuilController::class, 'recette']);

// Routes nécessitant une authentification
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/create-post', [RecipeController::class, 'create'])->name('recipe.create');
    Route::post('/recipe', [RecipeController::class, 'store'])->name('recipe.store');

    Route::get('/recipe/{id}', [RecipeController::class, 'show'])->name('recipe.get');
    Route::get('/recipeEdit/{id}', [RecipeController::class, 'edit'])->name('recipes.edit');
    Route::post('/recipe/{id}', [RecipeController::class, 'update'])->name('recipe.update');
    Route::delete('/recipe/{id}', [RecipeController::class, 'destroy'])->name('recipe.destroy');
});


// Auth routes
require __DIR__.'/auth.php';
 

Route::get('/Accueil', [AcceuilController::class, 'showrecette'])->name('accueil');
//Route::post('/Commentaire', [CommentaireController::class, 'test'])->middleware(['auth', 'verified'])->name('commentaire.store');
Route::post('/commentaire/{id}', [CommentaireController::class, 'store'])->middleware(['auth', 'verified'])->name('commentaire.store');