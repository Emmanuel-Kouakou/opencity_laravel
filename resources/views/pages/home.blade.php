@extends('base')


@section('title')
Home Page | Hello City
@endsection

@section('content')
<h1> Vous vous trouvez sur la page d'accueil.</h1>

<p>Il est actuellement {{ date("h:i A"); }}.</p>

@endsection

@section('footer')
&middot; <a href="/about">About Us</a>
@endsection