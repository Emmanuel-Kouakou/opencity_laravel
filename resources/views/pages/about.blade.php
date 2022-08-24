@extends('base')


@section('title', 'About Us Page | '. Config('app.title'))


@section('content')

<p>Page A propos &hearts; !</p>

<p><a href="{{ route('app_home'); }}">Revenir à la page d'accueil.</a></p>

@endsection