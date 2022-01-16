@extends('products.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Packs</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('packs.create') }}"> Create New Pack</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Image</th>



            <th width="280px">Action</th>
        </tr>
        @foreach ($packs as $pack)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $pack->name }}</td>
            <td>{{ $pack->description }}</td>
            <td>{{ $pack->price }}</td>
            <td>{{ $pack->image }}</td>


            <td>
                <form action="{{ route('packs.destroy',$pack->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('packs.show',$pack->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('packs.edit',$pack->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
      
@endsection