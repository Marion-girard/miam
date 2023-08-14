
<h2> Les recettes </h2>
                <?php require './Controllers/show_recipe.php';?>
                <?php  foreach ($resultdataRecipe as $dataRecipe ):?>
                <ul> 
                    <li>
                        <a href=""><?php echo $dataRecipe['nom'] ?></a>
                        
                        
                    </li>
                    
                </ul>
                </div>
                <?php  endforeach; ?>  