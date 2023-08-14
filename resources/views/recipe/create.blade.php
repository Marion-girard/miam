@extends('layouts.app')

@section('content')
    <h1>{{ isset($recipe) ? 'Modifier la recette' : 'Ajouter une recette' }}</h1>

    <form action="{{ isset($recipe) ? route('recipes.update', $recipe->id) : route('recipes.store') }}" method="POST">
        @csrf
        @if(isset($recipe))
            @method('PUT')
        @endif
        
        <div>
            <label>Titre:</label>
            <input type="text" name="title" value="{{ isset($recipe) ? $recipe->title : '' }}">
        </div>
        <div>
            <label>Description:</label>
            <textarea name="description">{{ isset($recipe) ? $recipe->description : '' }}</textarea>
        </div>
        <div>
            <label>Ingrédients:</label>
            <textarea name="ingredients">{{ isset($recipe) ? $recipe->ingredients : '' }}</textarea>
        </div>
        <div>
            <label>Instructions:</label>
            <textarea name="instructions">{{ isset($recipe) ? $recipe->instructions : '' }}</textarea>
        </div>
        <div>
            <button type="submit">{{ isset($recipe) ? 'Mettre à jour' : 'Ajouter' }}</button>
        </div>
    </form>
@endsection
