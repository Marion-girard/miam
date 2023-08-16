
<h1>Liste des recettes</h1>

@foreach ($recipes as $recipe) 
    <a href="{{ route('recipe.get', $recipe->id) }}">{{ $recipe->title }}</a> - {{ $recipe->description }} <br>   
@endforeach