


    <h1>Liste des recettes</h1>

    @foreach($recipe as $singleRecipe)
    <div>
        <h2><a href="{{ route('recipe.show', $singleRecipe->id) }}">{{ $singleRecipe->title }}</a></h2>
        <p>{{ Str::limit($singleRecipe->description, 100) }}</p>
    </div>
@endforeach
