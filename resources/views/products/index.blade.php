@extends('layouts.navbar')


@section('content')

    @if (count($products) > 0)

        <table class="table table-bordered table-hover text-center">
            <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">price </th>
                    <th scope="col">Description</th>
                    <th scope="col">image</th>
                    <th scope="col">Edit</th>                    
                    <th scope="col">Delete</th>

                </tr>
            </thead>
            @foreach ($products as $product)
            <tbody>

                <tr>
                    <td> {{$product->name}} </td>
                    <td> {{$product->price}} </td>
                    <td> {{$product->description}} </td>
                    <td> <img width="50" height="50" src="{{$product->image}}" alt=""> </td>
                    <td><a href="{{route('products.edit' , $product->id )}} " class="btn btn-xs btn-primary">edit</a></td>
                    <td>
                        <form action="{{route('products.destroy' , $product->id)}} " method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete" class="btn btn-danger btn-xs">
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach

        </table>
    @else
    <h1 class="text-center">There are no products available</h1>
    @endif

@endsection