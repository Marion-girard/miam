


<h1>{{ $recipe->title }}</h1>
<p><b>Description:</b> {{ $recipe->description }}</p>
<p><b>Ingrédients:</b> {{ $recipe->ingredients }}</p>
<p><b>Instructions:</b> {{ $recipe->instructions }}</p>

<form action="{{ route('commentaire.store',  ['id' => $recipe->id])  }}" method="post">
    @csrf <!-- Ajoutez le token CSRF pour la sécurité -->
    <label> Commentaire: </label>
    <textarea name="commentaire"></textarea> <!-- Utilisez <textarea> au lieu de <input> -->
    <button type="submit">Envoyer</button>
</form>