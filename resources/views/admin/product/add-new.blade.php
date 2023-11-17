@extends('admin.layouts.app')

@section('content')
    <h2>Add New Product</h2>

    <form method="post" action="{{ route('products.store') }}">
        @csrf
        <label for="name">Product Name:</label>
        <input type="text" name="name" required>
        
        <label for="price">Price:</label>
        <input type="number" name="price" required>
        
        <label for="description">Description:</label>
        <textarea name="description"></textarea>
        
        <button type="submit">Add Product</button>
    </form>
@endsection
