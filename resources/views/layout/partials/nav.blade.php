<header>
    <nav class="pl-2 pr-5 navbar fixed-top navbar-expand-md collapse-sm navbar-light main-navbar" style="display: flex; justify-content: space-around">



        <div class="">

            <!-- Image and text -->
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('/assets/helpee_full.png') }}" width="160" height="60" class="d-inline-block align-top" alt="">
                </a>
            </nav>

            <div class="d-block d-sm-block d-md-none">
                <a href="{{ URL('/cart') }}" class="cart-collapsed"><img src="{{ asset('/bootstrap-icons-1.7.0/cart-fill.svg') }}" alt="Shopping Cart" width="32" height="32"><span class='badge badge-warning' id='lblCartCount'> </span></a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

        </div>
        <div class="collapse dropmenu mx-auto" id="navbarNavAltMarkup">

            <div class="b p-4 m-auto">

                <div class="col-8  mx-auto">

                    <form action="" method="GET" class="search-form">

                        <input class="form-control mr-sm-2 navsearch" type="text" name="query" value="{{ request()->input('query') }}" id="query" placeholder="Search products" aria-label="Search">
                    </form>
                </div>
                <div class="col-8 mx-auto">
                    <span class="text-muted">
                        <button class="navbutton btn my-2  my-sm-0" type="submit">
                            <a href="{{URL('/cart')}}" class="text-decoration-none text-reset">
                                <img src="{{ asset('/bootstrap-icons-1.7.0/cart-fill.svg') }}" class="d-inline-block align-text-middle" width="30"><b> Cart </b>
                            </a>
                        </button>
                    </span>
                </div>

                <div class="col-8 mx-auto">
                    <span class="text-muted">
                        <button class="btn dropdown-toggle btn-sm" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('/bootstrap-icons-1.7.0/person-circle.svg') }}" width=32 alt="Profile"> Profile
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark listor pull-left" aria-labelledby="navbarDarkDropdownMenuLink">
                            @auth
                            @if (\Auth::user()->is_admin)
                            <li>
                                <form action="{{ URL('/admin') }}" method="GET" class="dropdown-item">
                                    <input type="submit" class="dropdown-item" style="font-weight: bold" value="Admin page">
                                </form>
                            </li>
                            @endif
                            <li>
                                <form action="{{ URL('/profile') }}" method="GET" class="dropdown-item">
                                    <input type="submit" class="dropdown-item" style="font-weight: bold" value="User settings">
                                </form>
                            </li>
                            <li>
                                <form action="{{ URL('/logout') }}" method="POST" class="dropdown-item">
                                    {{ csrf_field() }}
                                    <input type="submit" class="dropdown-item" style="font-weight: bold" value="Sign Out">
                                </form>
                            </li>
                            @endauth
                            @guest
                            <li>
                                <form action="{{ URL('/login') }}" method="GET" class="dropdown-item">
                                    <input type="submit" class="dropdown-item" style="font-weight: bold" value="Login">
                                </form>
                            </li>
                            <li>
                                <form action="{{ URL('/register') }}" method="GET" class="dropdown-item">
                                    <input type="submit" class="dropdown-item" style="font-weight: bold" value="Register">
                                </form>
                            </li>
                            @endguest
                        </ul>
                    </span>
                </div>
                <div class="col-8 mx-auto">
                    <span class="text-muted">
                        <button class="navbutton btn my-2  my-sm-0" type="submit">
                            <a href="{{URL('/wishlist')}}" class="text-decoration-none text-reset">
                                <img src="{{ asset('/bootstrap-icons-1.7.0/heart-fill.svg') }}" class="d-inline-block align-text-middle" width="30">Wishlist
                            </a>
                        </button>
                    </span>
                </div>
            </div>

        </div>



        <div class="d-sm-none d-md-block d-none d-sm-block d-flex align-items-center">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Domov</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Príručka</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Študuj</a>
                </li>
              

            </ul>
           

        </div>
        <a class="nav-link" href="#"> <img src="{{ asset('/assets/livechat_button.png') }}"></img></a>

        </div>


    </nav>
</header>