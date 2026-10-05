<header>

    <nav class="navbar navbar-expand-lg header-transparent header-light bg-transparent header-reverse"
        data-header-hover="light">
        <div class="container-fluid">
            <div class="col-auto col-lg-2 me-lg-0 me-auto">
                <a class="navbar-brand" href="{{ route('homepage') }}">
                    <img src="{{ asset('guest/images/demo-restaurant-logo-black.png') }}"
                        data-at2x="{{ asset('guest/images/demo-restaurant-logo-black@2x.png') }}" alt=""
                        class="default-logo">
                    <img src="{{ asset('guest/images/demo-restaurant-logo-black.png') }}"
                        data-at2x="{{ asset('guest/images/demo-restaurant-logo-black@2x.png') }}" alt=""
                        class="alt-logo">
                    <img src="{{ asset('guest/images/demo-restaurant-logo-black.png') }}"
                        data-at2x="{{ asset('guest/images/demo-restaurant-logo-black@2x.png') }}" alt=""
                        class="mobile-logo">
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

                                    <a href="{{ route('book.catering.service') }}">
                                        <i class="fa fa-concierge-bell"></i>
                                        <!-- Font Awesome concierge bell icon -->
                                        <div class="submenu-icon-content">
                                            <span>Book a Catering Service</span>
                                            <p>Elevate your event with our exceptional catering options</p>
                                        </div>
                                    </a>

                                    
                                    
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
                                        <i class="fa fa-concierge-bell"></i>
                                        <div class="submenu-icon-content">
                                            <span>Order Now</span>
                                            <p>We only Accept Take Away</p>
                                        </div>
                                    </a>
                                </li>



                            </ul>
                        </li>
                        <li class="nav-item"><a href="{{ route('catering_menu') }}" class="nav-link">Catering Menu</a>
                        </li>
                        <li class="nav-item"><a href="{{ route('gallery') }}" class="nav-link">Gallery</a>
                        </li>
                        <li class="nav-item"><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>






                        <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-auto col-lg-4 text-end d-none d-sm-flex">
                <div class="header-icon">
                    <div class="header-button">
                        <a href="{{ route('order-now') }}"
                            class="btn btn-dark-gray btn-small btn-box-shadow left-icon btn-switch-text btn-rounded border-1">
                            <span>
                                <span><i class="feather icon-feather-calendar"></i></span>
                                <span class="btn-double-text" data-text="Order Now">Order Now</span>
                            </span>
                        </a> 
                    </div>
                </div>

                <div class="header-icon">
                    <div class="header-button">
                        <a href="{{ route('book.catering.service') }}"
                            class="btn btn-dark-gray btn-small btn-box-shadow left-icon btn-switch-text btn-rounded border-1">
                            <span>
                                <span><i class="feather icon-feather-calendar"></i></span>
                                <span class="btn-double-text" data-text="Book a Catering Service">Book a Catering
                                    Service</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

</header>
