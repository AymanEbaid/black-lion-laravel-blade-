<nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
    <div class="container">
        <a class="navbar-brand fw-bold fs-2" href="{{ route('home') }}">
            <img style="height: 40px" src="{{asset('/image/logo.png')}}" alt="">
            BLACK LION
        </a>
        <div class="d-flex order-lg-2 ms-auto">
            <a href="#" class="mx-3 text-dark"><i class="fas fa-search"></i></a>

            @auth
                <div class="dropdown mx-3">
                    <a class="text-dark dropdown-toggle text-decoration-none d-flex align-items-center" href="#"
                        role="button" id="userMenu" data-bs-toggle="dropdown" aria-expanded="false">
                        @if (auth()->user()->role === 'admin')
                            <i class="fas fa-user-shield me-2"></i>
                        @else
                            <i class="fas fa-user me-2"></i>
                        @endif
                        <span>{{ explode(' ', Auth::user()->name)[0] }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenu">
                        <li>
                            <a href="{{ route('profile.edit') }}" class="dropdown-item">
                                <i class="fas fa-user-cog me-2"></i> Profile
                            </a>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="fas fa-sign-out-alt me-2"></i> Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <a href="{{ route('login') }}" class="mx-3 text-dark">
                    <i class="fas fa-right-to-bracket me-1"></i> LOGIN
                </a>
            @endauth

            <a href="{{ route('products.all') }}" class="mx-3 text-dark"><i class="fas fa-shopping-bag"></i></a>
        </div>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item px-2">
                    <a class="nav-link" href="{{ route('home') }}">HOME</a>
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="{{ route('products.all') }}">NEW</a>
                </li>
               
                <li class="nav-item px-2 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="menDropdown" data-bs-toggle="dropdown">
                        MEN
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('products.all') }}">All Men's</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('products.all') }}">T-Shirts</a></li>
                        <li><a class="dropdown-item" href="{{ route('products.all') }}">Shirts</a></li>
                        <li><a class="dropdown-item" href="{{ route('products.all') }}">Pants</a></li>
                        <li><a class="dropdown-item" href="{{ route('products.all') }}">Jackets</a></li>
                    </ul>
                </li>
             
                <li class="nav-item px-2">
                    <a class="nav-link" href="{{ route('about') }}">ABOUT</a>
                </li>
                   <li class="nav-item px-2">
                    <a class="nav-link" href="{{ route('contact') }}">CONTACT</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{-- category navigation --}}
@auth
    @if (auth()->user()->role === 'admin')
        <div class="category-nav py-2 bg-white">
            <div class="container">
                <div class="d-flex justify-content-center">
                    <div class="dropdown">
                        <a class="text-dark text-decoration-none dropdown-toggle" href="#" role="button"
                            id="adminMenu" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-cogs me-2"></i> Admin Panel
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="adminMenu">
                            <li>
                                <a href="{{ route('products.create') }}" class="dropdown-item">
                                    <i class="fas fa-plus-circle me-2"></i> Add Products
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('products.index') }}" class="dropdown-item">
                                    <i class="fas fa-list me-2"></i> Product List
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('users.index') }}" class="dropdown-item">
                                    <i class="fas fa-user me-2"></i>
                                    USERS
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('dashboard') }}" class="dropdown-item">
                                    <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                                </a>
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="fas fa-sign-out-alt me-2"></i> Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endauth
