@extends("layouts.default")


@section("content")
<div class="container">

    <form action="{{ route("comics.store") }}" method="post">
     @csrf

        <div class="mb-3">
            <div>
                <label for="field_name" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="field_title">
            </div>
            <div>
                <label for="field_email" class="form-label">Desc</label>
                <input type="text" class="form-control" name="description" id="field_description">
            </div>
            <div>
                <label for="field_email" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="field_price">
            </div>





        </div>

        <div>
            <button class="btn btn-success" type="submit">Crea</button>
        </div>

    </form>

</div>
@endsection
