<?php if(isset($_POST['bouton'])) {
    echo '<form id="bouton" name="bouton" method="post" action="test.php">
    <p><input type="submit" name="bouton"></p>
    </form> <?php ';
    } else { echo "bouton non cliqué"; } ?>
    
    <form id="bouton" name="bouton" method="post" action="{{ route('test')}}">
        @csrf
    <p><input type="submit" name="bouton"></p>
    </form>
    
