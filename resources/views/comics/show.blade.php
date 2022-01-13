@extends("layouts.default")



@section("content")
<div class="container">
    <div>
        <img src="{{$comic->thumb}}">
    </div>
    <h1>Titolo {{$comic->title}}</h1>
    
    <h1>Price {{$comic->price}}</h1>


    
    <form action="{{ route("comics.destroy", $comic->id) }}" method="post" class="form">
     @csrf
     @method('delete')
        <div>
            <button class="btn btn-success" type="submit">Elimina</button>
        </div>
    </form>
    <button><a href="{{route("comics.edit", $comic->id)}}">Edit</button>




</div>
@endsection
