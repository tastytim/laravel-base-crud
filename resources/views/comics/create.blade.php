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
                <label for="field_description" class="form-label">Desc</label>
                <input type="text" class="form-control" name="description" id="field_description">
            </div>
            <div>
                <label for="field_price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="field_price">
            </div>
            <div>
                <label for="field_thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" name="thumb" id="field_thumb">
            </div>
            <div>
                <label for="field_series" class="form-label">Series</label>
                <input type="text" class="form-control" name="series" id="field_series">
            </div>
            <div>
                <label for="field_sale_date" class="form-label">Sale-date</label>
                <input type="text" class="form-control" name="sale_date" id="field_sale_date">
            </div>
            <div>
                <label for="field_type" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" id="field__type">
            </div>





        </div>

        <div>
            <button class="btn btn-success" type="submit">Crea</button>
        </div>

    </form>

</div>
@endsection
