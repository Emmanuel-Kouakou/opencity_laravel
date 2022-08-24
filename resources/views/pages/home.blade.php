@extends('base')

@section('content')

<img src="{{ asset('img/drapeau.jpg'); }}" alt="drapeau" class="mt-12 rounded shadow-md h-40">

<h1 class="mt-5 mb-5 text-3xl sm-text-5xl font-semibold text-indigo-600"> Vous vous trouvez sur la page d'accueil.</h1>

<p class="text-lg text-gray-800">Il est actuellement {{ date("h:i A"); }}.</p>

@endsection