<header class="header-area transparent sticky-header">
    <div class="container-fluid">
        <div class="row no-gutters align-items-center">
            <div class="col-5 col-lg-2">
                <div class="header-logo-area"><a href="/"><img class="logo-main"
                            src="img/logo.png" alt="Logo"> <img class="logo-light"
                            src="img/logo-light.png" alt="Logo"></a>
                </div>
            </div>
            <div class="col-lg-8 d-none d-lg-block">
                <div class="header-navigation-area">
                    <ul class="main-menu nav justify-content-center">
                        <li class="full-width active"><a href="/">Home</a>
                        </li>
                        <li class=""><a href="/howitworks">How it works</a>
                        </li>
                        <li class="full-width"><a href="/services">Services</a>
                        </li>
                        <li class=""><a href="/about">about us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-7 col-lg-2">
                <ul class="navbar-nav ml-auto">
                    @guest
                        <li class="nav-item">
                            <div class="header-action-area text-right"><a href="/login" class="btn-cart"><span class="fas fa-sign-in-alt"> Login</span> </a> <button class="btn-menu d-lg-none"><span></span> <span></span> <span></span></button></div>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <div class=" text-right"><a href="/register"><span> SignUp</span> </a> <button class="btn-menu d-lg-none"><span></span> <span></span> <span></span></button></div>
                            </li>
                            {{-- <li class="nav-item">
                            <a class="nav-link" href="/register">Sign Up</a>
                            </li> --}}
                        @endif
                    @else
                        <li class="has-submenu"><a href="#"> {{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="submenu-nav">
                                <li><a class="dropdown-item" href="/myorders">My Orders</a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</header>
