

<?php use Illuminate\Support\Facades\DB; ?>
 

<h1>Liste des recettes</h1>

@include('recipe.create')
<?php $recipes = DB::table('recipes')->get(); ?>
@foreach ($recipes as $recipe)
    <a href= >{{ $recipe->title }} </a> - {{ $recipe->description }} <br>    
@endforeach

