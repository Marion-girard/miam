@extends('layouts.app')

@section('content')
    <h1>Liste des recettes</h1>

    @foreach($recipe as $recipe)
        <div>
            <h2><a href="{{ route('recipes.show', $recipe->id) }}">{{ $recipe->title }}</a></h2>
            <p>{{ Str::limit($recipe->description, 100) }}</p>
        </div>
    @endforeach
@endsection