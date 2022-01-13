@extends("layouts.default")
@section("content")
<div class="container">
    <h1>Lista comics</h1>
    <button><a href="{{route("comics.create")}}">Add new Comics</button>
    <br>
    <ul class="cards">
        @foreach($comics as $comic)
        <li><a href="{{ route('comics.show', $comic->id) }}">
                <div>
                    <img src="{{$comic->thumb}}">
                </div>
                <div>
                    {{$comic->title}}
                </div>
            </a></li>
        @endforeach
    </ul>
</div>
@endsection
