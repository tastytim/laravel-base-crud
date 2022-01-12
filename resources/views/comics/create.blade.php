@extends("default")


@section("content")
<div class="container">

  <form action="{{ route("comics.store") }}" method="post">

    <div class="mb-3">
      <label for="field_name" class="form-label">Title</label>
      <input type="text" class="form-control {{ $errors->has("name") ? 'is-invalid' : '' }}" name="name" id="field_name">

      <label for="field_email" class="form-label">Price</label>
      <input type="text" class="form-control {{ $errors->has("email") ? 'is-invalid' : '' }}" name="email" id="field_email">
      
    </div>

    <div>
      <button class="btn btn-success" type="submit">Crea</button>
    </div>

  </form>

</div>
@endsection