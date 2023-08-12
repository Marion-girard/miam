
@extends('layout')

@section('contenu')
    <form action="/register" method="post">
        {{ csrf_field() }}
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="user" placeholder="Email">
        <input type="password" name="password" placeholder="Mot de passe">
        <input type="password" name="password_confirmation" placeholder="Mot de passe (confirmation)">
        <input type="submit" value="M'inscrire">
    </form>
@endsection
