
@extends('base')
@section('name')
    
<div class="container">

    <div class="card my-4">
        <div class="card-header text-center text-bg-primary">

            <p class="h1"> DETAIL  PAGE </p>
        </div>
        <div class="card-body">

            <p>{{ $data->name }}</p>
            <p>{{ $data->address }}</p>
            <p>{{ $data->number }}</p>
        </div>
        <div class="card-footer d-flex ">

            <a class="btn btn-success mx-3" href="/abel/{{ $data->id }}/edit">Update</a>
            <a class="btn btn-secondary mx-3" href="/abel"> BACK</a>
            <form action="/abel/{{ $data->id }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">DELETE</button>
            </form>
           
        </div>
    </div>
    
</div>

@endsection