@extends('base')

@section('content')

<img src="{{ asset('img/drapeau.jpg'); }}" alt="drapeau">

<h1> Vous vous trouvez sur la page d'accueil.</h1>

<p>Il est actuellement {{ date("h:i A"); }}.</p>

@endsection