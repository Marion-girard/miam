@extends('layout')

@section('contenu')

bouh
<h2> Les recettes </h2>
<?php require './Controllers/show_recipe.php';?>
<?php  foreach ($resultdataRecipe as $dataRecipe ):?>
<ul> 
    <li>
        <a href=""><?php echo $dataRecipe['nom'] ?></a>
        
        
    </li>
    <?php  endif;?> 
</ul>
</div>
<?php  endforeach; ?>  
@endsection