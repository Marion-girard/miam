

@section('content')
    <h1>{{ $recipe->title }}</h1>
    <p>{{ $recipe->description }}</p>
    <p><b>Ingrédients:</b> {{ $recipe->ingredients }}</p>
    <p><b>Instructions:</b> {{ $recipe->instructions }}</p>
    
@endsection