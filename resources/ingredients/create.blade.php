@extends('layouts.app')

@section('content')
    <h2>Ajout d'un nouvel ingrédient</h2>

    <form action="{{ route('ingredients.store') }}" method="post">
        @@csrf

        <div class="form-group"
        <label for="nom">Nom</label>