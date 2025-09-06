 @extends('layout.app')
 @section('title')
     ABOUT US - BLACK LION
 @endsection
@section('content')
    <!-- Hero Section -->
    <section class="bl-hero-about d-flex align-items-center">
        <div class="container text-white">
            <h1 class="display-4 fw-bold mb-3">OUR STORY</h1>
            <p class="lead">Crafting premium garments since 1997</p>
        </div>
    </section>

    <!-- About Content -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="bl-section-title">WHO WE ARE</h2>
                    <p class="lead">Black Lion is a premier clothing manufacturer dedicated to quality craftsmanship and innovative design.</p>
                    <p>Founded in 1997, we've grown from a small workshop to a global manufacturing partner for some of the world's most respected fashion brands. Our commitment to ethical production and cutting-edge technology sets us apart in the industry.</p>
                    <p>Every garment we produce reflects our core values of quality, sustainability, and attention to detail. We believe fashion should be both beautiful and responsibly made.</p>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80" alt="Our Factory" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="bl-stat-number">15+</div>
                    <div class="bl-stat-label">Years Experience</div>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="bl-stat-number">100+</div>
                    <div class="bl-stat-label">Skilled Employees</div>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <div class="bl-stat-number">40k+</div>
                    <div class="bl-stat-label">Garments Monthly</div>
                </div>
                <div class="col-md-3">
                    <div class="bl-stat-number">10+</div>
                    <div class="bl-stat-label">Countries Served</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="bl-section-title text-center">OUR JOURNEY</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="bl-timeline">
                        <!-- Timeline Item 1 -->
                        <div class="bl-timeline-item">
                            <div class="bl-timeline-dot"></div>
                            <h4>1997</h4>
                            <p>Founded in a small workshop with just 10 employees, focusing on premium men's pantes.</p>
                        </div>
                        <!-- Timeline Item 2 -->
                        <div class="bl-timeline-item">
                            <div class="bl-timeline-dot"></div>
                            <h4>2012</h4>
                            <p>Expanded operations to include kids's wear and moved to our first dedicated facility.</p>
                        </div>
                        <!-- Timeline Item 3 -->
                        <div class="bl-timeline-item">
                            <div class="bl-timeline-dot"></div>
                            <h4>2015</h4>
                            <p>Received ISO 9001 certification for quality management systems.</p>
                        </div>
                        <!-- Timeline Item 4 -->
                        <div class="bl-timeline-item">
                            <div class="bl-timeline-dot"></div>
                            <h4>2018</h4>
                            <p>Launched our sustainable production line using organic and recycled materials.</p>
                        </div>
                        <!-- Timeline Item 5 -->
                        <div class="bl-timeline-item">
                            <div class="bl-timeline-dot"></div>
                            <h4>2023</h4>
                            <p>Opened our state-of-the-art 10,000 sq ft facility with fully automated cutting technology.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="bl-section-title text-center">OUR VALUES</h2>
            <div class="row">
                <!-- Value 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 bg-transparent">
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <i class="fas fa-medal fa-3x text-dark"></i>
                            </div>
                            <h5>Quality</h5>
                            <p>We never compromise on materials or craftsmanship. Every stitch meets our exacting standards.</p>
                        </div>
                    </div>
                </div>
                <!-- Value 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 bg-transparent">
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <i class="fas fa-leaf fa-3x text-dark"></i>
                            </div>
                            <h5>Sustainability</h5>
                            <p>Ethical production and eco-friendly materials are at the heart of our operations.</p>
                        </div>
                    </div>
                </div>
                <!-- Value 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-0 bg-transparent">
                        <div class="card-body text-center">
                            <div class="mb-3">
                                <i class="fas fa-lightbulb fa-3x text-dark"></i>
                            </div>
                            <h5>Innovation</h5>
                            <p>We continuously invest in new technologies to improve quality and efficiency.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team CTA -->
    <section class="py-5 text-center bg-dark text-white">
        <div class="container">
            <h2 class="mb-4">MEET OUR TEAM</h2>
            <p class="lead mb-5">Behind every garment is a team of passionate professionals dedicated to excellence.</p>
            <a href="{{ route('contact') }}" class="btn btn-outline-light px-4">CONTACT US</a>
        </div>
    </section>
@endsection
 