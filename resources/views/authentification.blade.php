@extends('layout')

@section('title')
    Authentification
@endsection

@section('content')
    <h1>Page d'authentification </h1>
    <form method="POST" type="/authentification">
        @csrf
        <label>Pseudo</label><input type="text" name="pseudo">
        <label>Mot de passe</label><input type="password" name ="mdp">
        <input type="submit">
    </form>
    <?php
        if (isset($_POST["pseudo"])) {
    echo "Yes, mail is set";    
}?>
@endsection