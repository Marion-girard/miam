<!DOCTYPE html>
<html>
<head>
    <title>Liste des articles</title>
</head>
<body>

<div class="container">
    <h1>Liste des articles</h1>
    
    <a href="{{ route('articles.create') }}">Ajouter un nouvel article</a>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Contenu</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->title }}</td>
                <td>{{ Str::limit($article->content, 50) }}</td>
                <td>
                    <a href="{{ route('articles.edit', $article->id) }}">Modifier</a>
                    |
                    <form action="{{ route('articles.destroy', $article->id) }}" method="post" onsubmit="return confirm('Êtes-vous sûr?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
