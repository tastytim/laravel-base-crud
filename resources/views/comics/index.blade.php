@extends("layouts.default")

@section("content")

<div class="container">
  <h1>Lista comics</h1>
  
  {{-- <a class="btn btn-link" href="{{ route('comics.create') }}">Aggiungi...</a> --}}

  <br>
  <ul>
    {{-- @foreach($comics as $comic)
      <li><a href="{{ route('comics.show', $comics->id) }}">{{ $comic["title"] }} ({{ $comic->price }})</a></li>
    @endforeach --}}
  </ul>
</div>
@endsection