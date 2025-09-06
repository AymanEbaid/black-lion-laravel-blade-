@extends('layout.app')

@section('title', $product->name . ' - BLACK LION')

@section('content')
<div class="container py-5">
    <div class="row g-5">
        <!-- Product Image -->
        <div class="col-md-6">
            @if ($product->image)
                <img src="{{ Storage::url($product->image) }}" 
                     class="img-fluid w-100 rounded-0 shadow-sm product-detail-img" 
                     alt="{{ $product->name }}">
            @else
                <img src="https://via.placeholder.com/600x800" 
                     class="img-fluid w-100 rounded-0 shadow-sm" 
                     alt="No Image Available">
            @endif
        </div>

        <!-- Product Details -->
        <div class="col-md-6 d-flex flex-column justify-content-center">
            <h2 class="fw-bold text-uppercase mb-3">{{ $product->name }}</h2>

            @if($product->description)
                <p class="text-muted mb-3">{{ $product->description }}</p>
            @endif

            <div class="d-flex align-items-center mb-3">
                <span class="fw-bold fs-4 me-3">{{ number_format($product->price, 2) }}EGP</span>
                <span class="badge rounded-0 px-3 py-2 
                    {{ $product->stock > 0 ? 'bg-dark' : 'bg-secondary' }}">
                    {{ $product->stock > 0 ? 'In Stock' : 'Out of Stock' }}
                </span>
            </div>

            <!-- Actions -->
            <div class="d-flex gap-3 mt-4">
                <a href="{{ route('products.all') }}" class="btn btn-outline-dark rounded-0 px-4 py-2">
                    Back to Shop
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
