<form action="{{ route('commentaire.store', $recipe->id)  }}" method="post">
    @csrf <!-- Ajoutez le token CSRF pour la sécurité -->
    <label> Commentaire: </label>
    <textarea name="contenue"></textarea> <!-- Utilisez <textarea> au lieu de <input> -->
    <button type="submit">Envoyer</button>
</form>


<h2> Commentaire</h2>
<?php  $commentaires = DB::table('commentaires')->where("recipe_id", $recipe->id )->get();?>
@foreach ($commentaires as $commentaire)
    {{ $commentaire->contenue}} 
    <?php $user = DB::table('users')->where( "id", $commentaire->user_id)->first(); ?>
        @if ($user)
            {{$user->name}}     
        @endif
    
    @if (Auth::user()->id == $commentaire->user_id)
     {{  __('Modifier') }}
     <form action="" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit">{{ __('Suprime') }}</button>
    </form>
    @endif
    <br>
        
@endforeach

 




