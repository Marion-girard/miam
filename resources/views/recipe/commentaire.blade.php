<form action="{{ route('commentaire.store', $recipe->id)  }}" method="post">
    @csrf <!-- Ajoutez le token CSRF pour la sécurité -->
    <label> Commentaire: </label>
    <textarea name="contenue"></textarea> <!-- Utilisez <textarea> au lieu de <input> -->
    <button type="submit">Envoyer</button>
</form>


<h2> Commentaire</h2>
<?php  $commentaires = DB::table('commentaires')->where("recipe_id", $recipe->id )->get();?>
@foreach ($commentaires as $commentaire)
@if(isset($_POST['modifier']))
    @if(Auth::user()->id == $commentaire->user_id)
    <form action="{{ route('commentaire.update', $commentaire->id)  }}" method="post">
        @csrf <!-- Ajoutez le token CSRF pour la sécurité -->
        <textarea name="contenue"></textarea> <!-- Utilisez <textarea> au lieu de <input> -->
        <button type="submit">Envoyer</button>
    </form>
        
    @else
        {{ $commentaire->contenue}} 
        <?php $user = DB::table('users')->where( "id", $commentaire->user_id)->first(); ?>
            @if ($user)
                {{$user->name}}     
            @endif
    
    @endif
@else   

 
    {{ $commentaire->contenue}} 
    <?php $user = DB::table('users')->where( "id", $commentaire->user_id)->first(); ?>
        @if ($user)
            {{$user->name}}     
        @endif
    
    @if (Auth::user()->id == $commentaire->user_id)
    <form name="modifier" action="{{ route('edit', $recipe->id)}}" method="POST">
        @csrf
        <button name="modifier" type="submit">{{  __('Modifier') }} </button>
    </form> 

    <form action="" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit">{{ __('Suprime') }}</button>
    </form>
    @endif
    <br>
@endif
        
@endforeach







