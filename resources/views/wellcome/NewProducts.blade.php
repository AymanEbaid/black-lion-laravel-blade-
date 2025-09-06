<!-- New Arrivals -->
<section class="py-5 bg-light">
    <div class="container">
        <!-- Section Title -->
        <h2 class="text-center fw-bold mb-5" style="letter-spacing: 1px;">NEW ARRIVALS</h2>

        <!-- موبايل: منتج واحد لكل Slide -->
        <div id="newArrivalsCarouselMobile" class="carousel slide d-lg-none" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($products as $index => $product)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <div class="row justify-content-center">
                            <div class="col-10">
                                <div class="card border-0 shadow-sm hover-shadow mb-4">
                                    @if($product->image)
                                        <img src="{{ asset('storage/' . $product->image) }}" 
                                             class="card-img-top img-fluid" 
                                             alt="{{ $product->name }}" 
                                             style="height: 250px; object-fit: cover;" 
                                             loading="lazy">
                                    @else
                                        <img src="https://via.placeholder.com/300x400" 
                                             class="card-img-top img-fluid" 
                                             alt="Product Image" 
                                             style="height: 250px; object-fit: cover;" 
                                             loading="lazy">
                                    @endif

                                    <div class="card-body text-center">
                                        <h6 class="card-title mb-1 fw-semibold">{{ $product->name }}</h6>
                                        <p class="small text-muted mb-2">{{ $product->category ?? 'Collection' }}</p>
                                        <p class="fw-bold mb-0">{{ $product->price }} EGP</p>
                                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-outline-dark mt-2">View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#newArrivalsCarouselMobile" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle p-3"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#newArrivalsCarouselMobile" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle p-3"></span>
            </button>
        </div>

        <!-- ديسكتوب: 4 منتجات لكل Slide -->
        <div id="newArrivalsCarouselDesktop" class="carousel slide d-none d-lg-block" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($products->chunk(4) as $chunkIndex => $chunk)
                    <div class="carousel-item {{ $chunkIndex == 0 ? 'active' : '' }}">
                        <div class="row gx-4 justify-content-center">
                            @foreach ($chunk as $product)
                                <div class="col-lg-3">
                                    <div class="card border-0 shadow-sm hover-shadow mb-4">
                                        @if($product->image)
                                            <img src="{{ asset('storage/' . $product->image) }}" 
                                                 class="card-img-top img-fluid" 
                                                 alt="{{ $product->name }}" 
                                                 style="height: 300px; object-fit: cover;" 
                                                 loading="lazy">
                                        @else
                                            <img src="https://via.placeholder.com/300x400" 
                                                 class="card-img-top img-fluid" 
                                                 alt="Product Image" 
                                                 style="height: 300px; object-fit: cover;" 
                                                 loading="lazy">
                                        @endif

                                        <div class="card-body text-center">
                                            <h6 class="card-title mb-1 fw-semibold">{{ $product->name }}</h6>
                                            <p class="small text-muted mb-2">{{ $product->category ?? 'Collection' }}</p>
                                            <p class="fw-bold mb-0">{{ $product->price }} EGP</p>
                                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-outline-dark mt-2">View</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#newArrivalsCarouselDesktop" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle p-3"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#newArrivalsCarouselDesktop" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle p-3"></span>
            </button>
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('products.all') }}" class="btn btn-outline-dark fw-semibold">VIEW ALL</a>
        </div>
    </div>
</section>

<style>
    .hover-shadow:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15) !important;
        transition: all 0.3s ease;
    }

    /* إبعاد الأسهم عن المنتجات في الديسكتوب */
    @media (min-width: 992px) {
        #newArrivalsCarouselDesktop .carousel-control-prev {
            left: -80px;
        }
        #newArrivalsCarouselDesktop .carousel-control-next {
            right: -80px;
        }
    }
</style>
