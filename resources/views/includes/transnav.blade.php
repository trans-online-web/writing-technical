<header class="header-area transparent sticky-header">
    <div class="container-fluid">
        <div class="row no-gutters align-items-center">
            <div class="col-2 col-lg-2">
                <div class="header-logo-area"><a href="/"><img class="logo-main"
                            src="img/logo.png" alt="Logo"> <img class="logo-light"
                            src="img/logo-light.png" alt="Logo"></a>
                </div>
            </div>
            <div class="col-lg-6 d-none d-lg-block">
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

                        <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="/sample">Samples</a></li>
                        <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-4 d-none d-lg-block">
                <div class="header-navigation-area">
                    <ul class="main-menu nav justify-content-center">
                        @guest
                            <li class=""><a href="/login">Login</a></li>
                            @if (Route::has('register'))
                                <li class=""><a href="/register">SignUp</a></li>
                            @endif
                        @else
                            <li class="">
                                <a href="/task" class=" ">Submit An Order</a>
                            </li>
                            <li class="has-submenu"><a href="#"> {{ Auth::user()->name }} <span class="caret"></span></a>
                                <ul class="submenu-nav">
                                    <li><a class="dropdown-item" href="/myorders">My Orders</a></li>
                                    <a class="dropdown-item" href="/mydashboard">My Dashboard</a>
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
    </div>
</header>
