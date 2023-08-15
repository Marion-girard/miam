

<?php use Illuminate\Support\Facades\DB; ?>
 

<h1>Liste des recettes</h1>


<?php $recipes = DB::table('recipe')->get(); ?>
@foreach ($recipes as $recipe)
    {{ $recipe->title }} - {{ $recipe->description }}<br>
@endforeach