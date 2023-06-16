
@extends('base')
@section('name')
    
<div class="container my-4 p-4 object-fit  ">
    <form class="form" action="/abel" method="post">
        @csrf
        
        
        
        <div class="form-element my-4 ">
            <label for="">NAME :</label>
            <input class="form-control" type="text" name="name" placeholder="enter name">
    </div>
    <div class="form-element my-4 ">
        <label for="">ADDRESS :</label>
        <input type="text" class="form-control" name="address" placeholder="enter address" >
    </div>
   <div class="form-element my-4 ">
       <label for="">PHONE NUMBER:</label>
       <input class="form-control"  type="text" name="number" placeholder="enter number" >
    </div>
    
    
    <input type="submit" class="btn btn-success" value="submit">
</form>
</div>

@endsection