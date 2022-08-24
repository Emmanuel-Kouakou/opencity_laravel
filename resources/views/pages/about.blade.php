@extends('base')


@section('title', 'About Us Page | '. Config('app.title'))


@section('content')

<img src="{{ asset('img/logo_ivoir.jpg'); }}" alt="Logo" class="mt-12 rounded shadow-md h-40">

<h2 class="mt-5 mb-5 text-gray-700">Page A propos <span class="text-pink-500">&hearts;</span> !</h2>

<p><a class="text-indigo-500 hover:text-indigo-600 underline" href="{{ route('app_home'); }}">Revenir à la page d'accueil.</a></p>

@endsection