@extends('layouts.navbar')


@section('content')
<h1 class="text-info">Create product</h1>

<form action="{{route('products.store')}} " method="POST" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <label for="name">Product name</label>
        <input type="text" name="name" class="form-control" >
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
        <textarea name="description"  rows="3" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <input type="submit" value="Create">
    </div>
    
</form>

@endsection