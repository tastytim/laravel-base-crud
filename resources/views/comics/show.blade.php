@extends("layouts.default")



@section("content")
<div class="container">
  <h1>Titolo {{$comic->title}}</h1>
  <h1>Titolo {{$comic->description}}</h1>
  <h1>Titolo {{$comic->price}}</h1>

</div>
@endsection