
<h2> Les recettes </h2>
<?php require './Controllers/show_message.php';?>
<?php  foreach ($resultdataRecipe as $dataRecipe ):?>
<ul> 
    <li>
        <a href="afficheRecipeid=<?php $dataRecipe['id'] ?>"><?php echo $dataRecipe['nom'] ?></a>
        
        
    </li>
    <?php  endif;?> 
</ul>
</div>
<?php  endforeach; ?>  