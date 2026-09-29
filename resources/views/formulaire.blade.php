@extends('template')
 
@section('contenu')
    <form action="{{ url('events') }}" method="POST">
        @csrf
        <label for="renseignements">Entrez votre nom : </label>
        <input type="text" name="nom" id="nom">
        <input type="submit" value="Envoyer !">
    </form>
@endsection