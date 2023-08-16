
Les recette

<?php 
use Illuminate\Support\Facades\DB; ?>
 
 <?php  $titles = DB::table('recipes')->pluck('title');?>
 
 <?php foreach ($titles as $title): ?>
    <?php echo $title;?>
  
    <?php endforeach; ?>

