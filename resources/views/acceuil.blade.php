
Les recettes
<div>
<?php 
use Illuminate\Support\Facades\DB; ?>
 
 <?php  $recipes = DB::table('recipes')->get();?>
 
 <?php // $user_id = DB::table('recipes')->pluck('user_id');?>
 
 
 @foreach ($recipes as $recipe)
 <a href="{{ route('recipe.get', $recipe->id) }}">{{ $recipe->title}} </a>
 <?php $user = DB::table('users')->where( "id", $recipe->user_id)->first(); ?>
        @if ($user)
          {{$user->name}}
    
        @endif
    <br>
@endforeach
</div>


