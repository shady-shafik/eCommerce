@extends('layouts.navbar')


@section('content')
    
    <h1 class="text-info">Edit product</h1>

<div class="row">        

    <div class=" col-md-3">
        <img class="mw-100" src="{{$product->image}} ">
    </div>

    <div class="col-md-9">
        <form action="{{route('products.update' , $product->id)}} " method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="form-group">
            <label for="name">Product name</label>
            <input type="text" name="name" class="form-control" value="{{$product->name}} " >
        </div>
    
        <div class="form-group">
            <label for="image">Image</label><br>
            <input type="file" name="image" >
        </div>
    
        <div class="form-group">
            <label for="price">Product price</label>
            <input type="number" name="price" class="form-control" >
        </div>
    
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description"  rows="3" class="form-control">{{$product->description}} </textarea>
        </div>
    
        <div class="form-group">
            <input type="submit" value="Edit" class="btn btn-primary">
        </div>
        
    </form>
    </div>
</div>

@endsection