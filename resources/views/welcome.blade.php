@extends('layout.app')
@section('title')
    BLACK LION | Premium Clothing Manufacturer
@endsection
@section('content')
    {{-- Hero Section --}}
    <section class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="display-5 fw-bold mb-4">WINTER COLLECTION 2025</h1>
                    <p class="lead mb-4 ">Premium quality garments manufactured with precision</p>
                    <a href="{{ route('products.all') }}" class="btn btn-black">SHOP NOW</a>
                </div>
            </div>
        </div>
    </section>
    {{-- New Arrivals --}}
    @include('wellcome.NewProducts')
    {{-- Our Manufacturing --}}
    @include('wellcome.OurBlacklion')
    
    
  
@endsection
