
<style> 

.border-black {
    border: 1px solid black;
}
.center-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;

    justify-content: center;
}
</style>

<?php use Illuminate\Support\Facades\DB; ?>
@include('recipe.create')
<div class="container">
<h1>Liste des recettes</h1>
    <div class="row text-center ">

        <?php $recipes = DB::table('recipes')->where("user_id", Auth::user()->id )->get(); ?>
        @foreach ($recipes as $recipe) 
        <div class="col-md-4 mb-4  ">
            <div class="border-black p-3 center-content">
                <h2 class="font-weight-bold"> <a href="{{ route('recipe.get', $recipe->id) }}"> {{ $recipe->title }} </a> </h2>
                <p>   {{ $recipe->description }}  <a href="{{ route('recipes.edit', $recipe->id)}}">
                    {{ __('Modifier') }}
                </a> <p>  
                    
            </div>
        </div>        
        @endforeach
    </div>
</div>
