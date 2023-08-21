


    <h1>{{'Modifier la recette'}}</h1>
  
    <form action="{{ route('recipe.update', $recipe->id)  }}" method="POST">
        @csrf
       
            @method('post')
        
        
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

