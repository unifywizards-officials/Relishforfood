<style>
    #navbarDropdownMenuLink {
        display: none;
    }
</style>

<header>

    <nav class="navbar navbar-expand-lg header-transparent bg-transparent header-reverse" data-header-hover="light">
        <div class="container-fluid">
            <div class="col-auto col-lg-2 me-lg-0 me-auto">
                <a class="navbar-brand" href="{{ route('homepage') }}">
                    <img src="{{ asset('guest/images/logo 6.png') }}" data-at2x="{{ asset('guest/images/logo 6.png') }}"
                        alt="" class="default-logo">
                    <img src="{{ asset('guest/images/demo-restaurant-logo-black.png') }}"
                        data-at2x="{{ asset('guest/images/demo-restaurant-logo-black.png') }}" alt=""
                        class="alt-logo">
                    <img src="{{ asset('guest/images/demo-restaurant-logo-black.png') }}"
                        data-at2x="{{ asset('guest/images/demo-restaurant-logo-black.png') }}" alt=""
                        class="mobile-logo">
                </a>
            </div>

            <!-- <div class="d-lg-none ms-auto me-3">
                <a href="#" class="text-dark position-relative" id="mobile-bell-icon">
                    <i class="fa fa-bell fs-4"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 10px;" id="mobile-bell-count">
                        0
                    </span>
                </a>
            </div> -->


            <div class="d-lg-none ms-auto me-3">
                <a href="{{ route('view-cart') }}" class="text-dark position-relative" id="mobile-cart-icon">
                    <i class="fa fa-shopping-cart fs-4"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                        style="font-size: 10px;" id="mobile-cart-count" style="display: none;">
                        0
                    </span>
                </a>
            </div>

            <div class="col-auto menu-order position-static">
                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav alt-font ls-1px">
                        <li class="nav-item"><a href="{{ route('homepage') }}" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
                        <li class="nav-item dropdown dropdown-with-icon">
                            <a href="{{ route('menu') }}" class="nav-link">Menu</a>

                            <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a href="{{ route('menu') }}">
                                        <i class="bi bi-cup-straw"></i> <!-- Bootstrap Icons drink or food icon -->
                                        <div class="submenu-icon-content">
                                            <span>Explore Our Menu</span>
                                            <p>Discover a variety of delicious options for your next event</p>
                                        </div>
                                    </a>
                                </li>
                                <li>

                                    <!-- <a href="{{ route('book.catering.service') }}">
                                        <i class="fa fa-concierge-bell"></i>
                                       
                                        <div class="submenu-icon-content">
                                            <span>Book a Catering Service</span>
                                            <p>Elevate your event with our exceptional catering options</p>
                                        </div>
                                    </a> -->
                                </li>

                                <li>
                                    <!-- <a href="{{ route('book.table') }}">
                                        <i class="fa fa-table"></i>
                                      
                                        <div class="submenu-icon-content">
                                            <span>Book a Table</span>
                                            <p>
                                                Reserve your table to enjoy a memorable dining experience with us
                                            </p>
                                        </div>
                                    </a> -->

                                    <a href="{{ route('order-now') }}">
                                        <i class="fa fa-table"></i>
                                        <!-- Font Awesome table icon -->
                                        <div class="submenu-icon-content">
                                            <span>Order Now</span>

                                        </div>
                                    </a>
                                </li>



                            </ul>
                        </li>
                        <li class="nav-item"><a href="{{ route('catering_menu') }}" class="nav-link">Catering Menu</a>
                        <li class="nav-item"><a href="{{ route('gallery') }}" class="nav-link">Gallery</a>
                        </li>
                        <li class="nav-item"><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>

                        <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a>
                        </li>

                    </ul>
                </div>
            </div>


            <div class="col-auto col-lg-3 text-end d-none d-sm-flex">
                <div class="header-icon">
                    <div class="header-button">
                        <a href="{{ route('view-cart') }}" class="btn btn-dark-gray btn-small btn-box-shadow left-icon btn-switch-text btn-rounded border-1">
                            <!-- Cart Item Badge -->
                            <div class="cart-item-badge">
                                <span class="badge bg-danger" style="display: none;">0</span>
                            </div>
                            <span>
                                <span><i class="feather icon-feather-shopping-cart"></i></span>
                                <span>Menu Cart</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </nav>

</header>