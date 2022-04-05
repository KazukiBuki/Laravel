@extends('main')
@section('content')
<form action="/store" method="post" enctype="multipart/form-data">
    @csrf
    @include('_partials/errors')
    <div class="form-group">
        <input type="text" class="form-control" name="title" placeholder="Pavadinimas">
    </div>
    <div class="form-group">
        <textarea name="content" class="form-control" id="" cols="38" rows="10" palceholder="Turinys"></textarea>
    </div>
    <div class="form-group">
        <label>Prideti nuotrauka</label>
        <input type="file" name="image">
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Saugoti</button>
    </div>
</form>
@endsection