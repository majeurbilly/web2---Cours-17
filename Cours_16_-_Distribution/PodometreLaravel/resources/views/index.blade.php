@extends('layouts.app')

@section('contenu')
       <h1>Etat du podomètre</h1>
       <h3>Valeur courante: <span class="text-primary">{{ $podometre }}</span></h3>
       <hr/>
       <a href="incrementer" class="btn btn-primary">Incrémenter</a>
       <a href="decrementer" class="btn btn-danger">Décrémenter</a>
       <a href="raz" class="btn btn-warning">Remettre à zéro</a>
@endsection