<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>miam</title>
</head>
<body>
    <header>
        <h1>Ma Popote en cocote</h1>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Recettes</a></li>
                <li><a href="register">Inscription</a></li>
                <li><a href="login">Connexion</a></li>
            </ul>
        </nav>
    </header>

    @yield('contenu')
        <footer>
            <p>Copyright Les gourmands à l'insu de leur plein gré 2023</p>
        </footer>           
</body>