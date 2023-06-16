
@extends('base')
@section('name')
   <div class="container">
    <h1 class="my-5 h1 text-center text-bg-secondary">TODO APPLICATION  WITH LARAVEL</h1>
       <a class="btn btn-primary my-4"  href="/abel/create">ADD TO DO </a>
       <table class="table  table-bordered  my-4">
       <tr>

           <thead class="text-center">
               <th>NAME</th>
               <th> ADDRESS</th>
               <th>PHONE NUMBER </th>
           </thead>
       </tr>

        <tbody class="text-center">
            
          
            @foreach ($data as $item)
            <tr>

                <td> {{ $item->name }}  </td>
                
                <td>{{ $item->address }} </td>
                <td> {{ $item->number }}</td>
                <td> <a href="/abel/{{ $item->id }}" class="btn btn-success">View</a> </td>
            </tr>

@endforeach
        </tbody>
       </table>
</div> 
@endsection