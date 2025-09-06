@extends('layout.app')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-5">All Products</h2>

    <div class="row g-4">
        @foreach ($products as $product)
           <div class="col-lg-3 col-md-4 col-12 mb-4">
    <div class="card border-0 rounded-0 h-100">
        @if($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" 
                 class="card-img-top product-img rounded-0" 
                 alt="{{ $product->name }}">
        @else
            <img src="https://via.placeholder.com/400x500" 
                 class="card-img-top rounded-0" 
                 alt="No Image">
        @endif

        <div class="card-body text-center p-2">
            <h6 class="card-title mb-1 fw-normal text-uppercase">{{ $product->name }}</h6>
            <p class="fw-bold mb-2">${{ $product->price }}</p>
            <a href="{{ route('products.show', $product->id) }}" 
               class="btn btn-outline-dark btn-sm rounded-0 px-4">
               View
            </a>
        </div>
    </div>
</div>

        @endforeach
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-5">
        {{ $products->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
