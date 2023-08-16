<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>miam</title>
</head>
<style>
    body {
      background-image: url('./image/imagedecuisine.jpg');
      background-size: cover;
      background-position: center;
    }
    .content {
      background-color: rgba(244, 244, 244, 0.8);
      padding: 20px;
      border-radius: 10px;
    }

    /*.custom-background {
      background-color: #e11212; /* Couleur de fond personnalisée 
      padding: 20px;
    }*/
  </style>
<body >

    <header>
        <div  class="container d-flex justify-content-center align-items-center min-vh-100 custom-background">
            <div class="content text-center">
        <h1>Ma Popote en cocote</h1>
        
            <nav class="nav"> 
            
                    <a href="#" class="nav-link">Home</a>
                    <a href="#" class="nav-link">Recettes</a>
                    <a href="register" class="nav-link">Inscription</a>
                    <a href="login" class="nav-link">Connexion</a>
                
            </nav>
            </div>
        </div>
    </header>
    
    @include('acceuil')
    <footer>
        <p>Copyright Les gourmands à l'insu de leur plein gré 2023</p>
    </footer>           
</body>
<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>