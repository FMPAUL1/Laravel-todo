@extends('base')
@section('name')
    






<div class="container mx-4 my-4">
    <h1 class="text-center">UPLOAD PAGE </h1>


    <form action="/abel/{{ $data->id}}" class="form my-4" method="post">
        @csrf
    @method("PATCH")
<div class="form-element my-4">
    <label  class="label" for="">NAME</label>
    <input class="form-control" type="text" name="name" value="{{ $data->name }}" id="name">
</div>
<div class="form-element my-4">
    <label  class="label" for="">ADDRESS</label>
    <input class="form-control" type="text" name="address" value="{{ $data->address }}" name="address">
</div>
<div class="form-element my-4">
    <label  class="label" for="">PHONE NUMBER</label>
    <input class="form-control" type="text" name="number" value="{{ $data->number }}" name="number">
</div>
    

<input type="submit" class="btn btn-secondary" value="submit">
</form>
</div>
@endsection