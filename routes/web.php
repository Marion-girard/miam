<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\AcceuilController;


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


Route::get('/', function () {
    return view('layout');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
 

Route::get('/recette', [AcceuilController::class, 'recette']);


// Route::get('/recipe', [RecipeController::class, 'index'])->name('recipe.index'); // Afficher la liste des recettes
Route::get('/recipe', [RecipeController::class, 'create'])->name('recipe.create'); // Afficher le formulaire de création

Route::post('/recipe', [RecipeController::class, 'store'])->name('recipe.store');
Route::get('/recipe/{id}', [RecipeController::class, 'getrecipebyId'])->name('recipe.get');