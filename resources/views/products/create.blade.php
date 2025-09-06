@extends('layout.app')

@section('content')
    <div class="container create-product">


        <h2>Add New Product</h2>
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="name" name="name" required />
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea cols="3" class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Product Image</label>
                <input type="file" class="form-control" id="image" name="image" />
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>
            <a class="btn btn-secondary" href="{{ route('products.index') }}">Back</a>
        </form>
    </div>
@endsection
