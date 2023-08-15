@section('content')
    <h1>Liste des recettes</h1>

    @foreach($recipes as $recipe)
        <div>
            <h2><a href="{{ route('recipes.show', $recipe->id) }}">{{ $recipe->title }}</a></h2>
        </div>
    @endforeach
@endsection