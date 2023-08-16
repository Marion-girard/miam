

<?php use Illuminate\Support\Facades\DB; ?>
@include('recipe.create')

<h1>Liste des recettes</h1>


<?php $recipes = DB::table('recipes')->where('name', 'John'); ?>
@foreach ($recipes as $recipe) 
    <a href="route('recipe.get')" {{ $recipe->id }} >{{ $recipe->title }} </a> - {{ $recipe->description }} <br>   
@endforeach

