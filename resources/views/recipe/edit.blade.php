


    <h1>{{'Modifier la recette'}}</h1>

    <form action="{{ route('recipes.update', $recipe->id) : route('recipe.store') }}" method="POST">
        @csrf
       
            @method('PUT')
        
        
        <div> 
            <label>Titre:</label>
            <input type="text" name="title" value="{{ old('title', $recipe->title ) }}">
        </div>
        <div>
            <label>Description:</label>
            <textarea name="description">{{  $recipe->description  }}</textarea>
        </div>
        <div>
            <label>Ingrédients:</label>
            <textarea name="ingredients">{{ $recipe->ingredients }}</textarea>
        </div>
        <div>
            <label>Instructions:</label>
            <textarea name="instructions">{{  $recipe->instructions }}</textarea>
        </div>
        <div>
            <button type="submit">{{  'Mettre à jour'  }}</button>
        </div>
    </form>

