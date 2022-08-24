@extends('base')




@section('content')
<h1> Vous vous trouvez sur la page d'accueil.</h1>

<p>Il est actuellement {{ date("h:i A"); }}.</p>

@endsection

@section('footer')
&middot; <a href="{{ route('app_about'); }}">About Us</a>
@endsection