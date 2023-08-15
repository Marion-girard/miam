



    <h1>{{ isset($recipe) ? 'Modifier la recette' : 'Ajouter une recette' }}</h1>

    <form action="/recipe" method="post">
        @csrf

        
        <div>
            <label>Titre:</label>
            <input type="text" name="title">
        </div>
        <div>
            <label>Description:</label>
            <textarea name="description"></textarea>
        </div>
        <div>
            <label>Ingrédients:</label>
            <textarea name="ingredients"></textarea>
        </div>
        <div>
            <label>Instructions:</label>
            <textarea name="instructions"></textarea>
        </div>
        <div>
            <button type="submit">{{  'Ajouter' }}</button>
        </div>
    </form>

