@extends("default")

@section("page_title", "Dettagli utente #" . $comic->id)

@section("content")
<div class="container">
  <h1>title {{ $comic->title }}</h1>
  <h3>price: {{$comic->price}} </h3>

</div>
@endsection