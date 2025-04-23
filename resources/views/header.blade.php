<header class="">
    <div class="cf-wrapper">
        <div class="cf-container cf-section ">
            <div class="cf-logo">
                <a href="/">
                    <img class="cf-logo-img" src="images/catch35_logo.png" alt="Logo"></a>
            </div>
            <nav>
                <ul class="cf-menu">
                    <li><a href="/" class="cf-nav-menu-item">Home</a></li>
                    <li><a href="/market" class="cf-nav-menu-item">market</a></li>
                    <li><a href="/member" class="cf-nav-menu-item">Become Member</a></li>
                    <li><a href="{{ url('/table_selection') }}" class="reserve-btn">Reserve</a></li>
                </ul>
            </nav>
            <div class="cf-icons">
                <div class="cf-cart-whishlist">
                    <a href="cart" class="cart-icon"><i class="fas fa-shopping-cart"></i></a>
                    <a href="#" class="cart-icon"><i class="fas fa-light fa-heart"></i></a>
                </div>
                @auth
                    @if (Auth::user()->is_admin == 1)
                        <div class="cf-register">
                            <a href="{{ url('/account_management') }}" class="login-icon">ADMIN</a>
                        </div>
                    @endif
                @endauth
                @if (auth()->check())
                    <div class="cf-register">
                        @if (Route::has('login'))
                            @auth
                                <a button type="button" class="cf-register" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                                    <i class="cf-register"></i>
                                    <span>Log Out</span></button></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form></a>
                            @else
                            @endauth
                        @endif
                    </div>
                @else
                    <div class="cf-register">
                        <a href="/login" class="login-icon">Login</a>
                    </div>
                @endif
            </div>
        </div>
    </div>

</header>
