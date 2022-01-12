@extends("default")



@section("content")

<div class="container">

  
  <a class="btn btn-link" href="{{ route('comics.create') }}">Aggiungi...</a>

  <br>
  <ul>
    @foreach($comics as $comic)
      <li><a href="{{ route('comics.show', $comics->id) }}">{{ $comic["title"] }} ({{ $comic->price }})</a></li>
    @endforeach
  </ul>
</div>
@endsection