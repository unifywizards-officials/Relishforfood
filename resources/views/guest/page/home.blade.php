@extends('layouts.guest.master')

@section('page_level_style')
 

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



<style>
    :root {
        --base-color: #e99022;
        --medium-gray: #7b7a7a;
        --dark-gray: #1d1d1d;
        --charcoal-blue: #232323;

    }

    .text-gradient-base-color {
        background-image: linear-gradient(to right, #e97522 0%, #1ea3b1 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .pt-30px {
        padding-top: 30px !important;
    }

    .cart-container {
        display: none;
    }

    h3,
    .h3 {
        line-height: 2.813rem;
    }

    .right-minus-130px {
        right: -89px;
        letter-spacing: 14px;
    }

    /*margin*/
    .ms-100px {
        margin-left: 100px;
    }

    .ls-minus-4px {
        letter-spacing: 1px !important;
    }

    .ms-80px {
        margin-left: 80px;
    }

    .mb-minus-50px {
        margin-bottom: -50px;
    }

    /* left right top bottom */
    .left-minus-45 {
        left: -45%;
    }

    .d-flexx {
        display: flex !important;
    }

    @media (max-width: 767px) {

        /* Adjust 767px to the breakpoint you prefer */
        .d-flexx {
            display: block !important;
            /* Or 'none' if you want it hidden */
        }

        .mobb-hidee {
            display: none;
        }
    }

    .bottom-minus-200px {
        bottom: -200px;
    }

    /* text gradient color */

    .bg-linen {
        background: #f6f4f3;
    }

    .bg-gradient-orange-transparent {
        background: linear-gradient(to right, rgba(233, 117, 34, 1.0) 10%, rgba(255, 255, 255, 0.0) 95%);
    }

    .bg-gradient-blue-transparent {
        background: linear-gradient(to right, rgba(30, 163, 177, 1.0) 10%, rgba(255, 255, 255, 0.0) 95%);
    }

    /* blog only text */

    /* z-index */
    .z-index-99 {
        z-index: 99;
    }

    @media (max-width: 1199px) {
        .left-minus-45 {
            left: -78%;
        }

        .lg-ms-70px {
            margin-left: 70px;
        }

        .lg-bg-transparent {
            background-color: transparent;
        }

    }

    .swiper {
        width: 100%;
        height: 100%;
    }

    .z-index-99 {
        z-index: 99;
    }

    .swiper-slide {
        text-align: center;
        font-size: 18px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-horizontal>.swiper-pagination-bullets,
    .swiper-pagination-bullets.swiper-pagination-horizontal,
    .swiper-pagination-custom,
    .swiper-pagination-fraction {
        left: 62%;
    }

    .modal-body {
        font-size: 14px;

    }

    .modal-title {
        color: #fefefe;
        font-size: 21px;

    }

    .btn-close .modal {
        color: white;
        background-color: black;
    }

    .modal-content {
        background-color: #013145;
        color: #fefefe;
        border-radius: 10px;
        height: 420px;
    }

    .modal-content img {
        width: 100%;
        /* Ensures the image takes up the full width of the column */
        height: 420px;
        border-radius: 10px 0 0 10px;
        /* Keeps the aspect ratio intact */
    }

    .modal-body p {
        margin-bottom: 10px;
        line-height: 25px;
    }

    .modall {
        height: 420px;

        overflow-y: scroll;
    }

    .modall::-webkit-scrollbar {
        display: none;
    }

    .modall {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }

    /* Responsive adjustments */
    @media (max-width: 767.98px) {
        .modal-dialog {
            max-width: 100%;
            margin: 0.5rem;
        }

        .modal-content {
            margin: 5%;
            max-height: 400px;
            overflow: auto;
        }

        .modal-content img {
            border-radius: 10px 10px 0 0;
            height: 200px;
        }

        .modal-body {
            font-size: 12px;
            /* Slightly smaller font size on smaller screens */
        }

        .modal-title {
            font-size: 18px;
            /* Slightly smaller font size on smaller screens */
        }

        .modall {
            width: 100%;
            overflow: hidden;
        }

        .fw-600 {
            font-size: 14px;
        }

        .btn.btn-link {
            letter-spacing: 1px;
        }
    }

    @media screen and (min-width: 769px) {
        .bg-circle {
            top: 100px;
            padding: 10px 10px !important;
            margin-bottom: 126px;
        }
    }

    .pp {
        color: #fff000;
        font-weight: 600;
    }

    .btn-close {
        --bs-btn-close-color: #ffffff;
        --bs-btn-close-bg: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ffffff'><path d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/></svg>");
    }
</style>
@endsection

@section('content')
<section class="p-0 md-h-700px bg-dark-gray sm-h-600px ipad-top-space-margin cover-background"
    data-parallax-background-ratio="0.8" style="background-image: url('guest/images/demo-restaurant-home-banner-bg.jpg')">
    <div class="opacity-light bg-dark-gray"></div>
    <div class="container h-100">
        <div class="row align-items-center h-100 justify-content-center">
            <div class="col-12 position-relative text-center">
                <div class="background-repeat bg-circle bg-base-color border-radius-100 w-700px h-700px lg-w-550px lg-h-550px sm-w-450px sm-h-450px xs-w-320px xs-h-320px mx-auto position-relative d-flex justify-content-center align-items-center"
                    style="background-image: url('guest/images/demo-restaurant-home-banner-pattern.png')"
                    data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 100, &quot;staggervalue&quot;: 100, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <div>
                        <p
                            class="text-black alt-font fs-26 xs-fs-17 xs-lh-26 ls-1px text-uppercase mb-25px sm-mb-15px mt-10px">
                            Experience the taste of New Zealand</p>
                        <div class="alt-font fs-110 lh-100 xs-fs-80 xs-lh-70 mb-30px xs-mb-15px fancy-text-style-4">
                            <span
                                class="text-outline text-outline text-outline-width-1px sm-text-outline-width-1px text-outline-color-white text-outline-base-color-background">Great
                                dining</span> <span
                                data-fancy-text="{ &quot;effect&quot;: &quot;rotate&quot;, &quot;string&quot;: [&quot;experience&quot;, &quot;restaurant&quot;] }"
                                class="text-white ls-minus-2px"></span>
                        </div>
                        <a href="{{ route('about') }}"
                            class="btn btn-extra-large btn-switch-text btn-black btn-round-edge btn-box-shadow mb-10px">
                            <span>
                                <span class="btn-double-text" data-text="Authentic experience">Authentic
                                    experience</span>
                                <span><i class="feather icon-feather-arrow-right"></i></span>
                            </span>
                        </a>
                        <img src="{{ asset('guest/images/bbg-loader.png') }}" alt=""
                            class="position-absolute right-minus-50px bottom-50px lg-bottom-10px lg-w-180px sm-w-150px animation-float d-none d-sm-inline-block">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="position-relative overflow-hidden z-index-0">
    <div
        class="position-absolute left-0px w-100 text-center top-minus-90px lg-top-minus-60px xs-top-minus-20px opacity-2 ls-minus-10px lg-ls-minus-1px fs-350 lg-fs-250 xs-fs-200 text-nowrap alt-font text-uppercase">
        experience</div>
    <div class="position-absolute left-minus-50px mt-15 d-none d-xl-inline-block" data-parallax-liquid="true"
        data-parallax-transition="2" data-parallax-position="top">
        <img src="{{ asset('guest/images/demo-restaurant-home-02.jpg') }}" alt=""
            data-bottom-top="transform: rotate(-30deg)" data-top-bottom="transform:rotate(10deg)">
    </div>
    <div class="position-absolute z-index-minus-1 right-minus-50px xxl-right-minus-100px xl-right-minus-50px xl-w-220px d-none d-xl-inline-block"
        data-parallax-liquid="true" data-parallax-transition="2" data-parallax-position="bottom">
        <img src="{{ asset('guest/images/demo-restaurant-home-03.jpg') }}" alt=""
            data-bottom-top="transform: rotate(-30deg)" data-top-bottom="transform:rotate(10deg)">
    </div>
    <div class="container">
        <div class="row align-items-center mb-4 lg-mb-6 lg-mt-5">
            <div class="col-xl-7 col-lg-6 text-center position-relative md-mb-50px xs-mb-30px"
                data-anime="{ &quot;rotateZ&quot;: [-15, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1500, &quot;delay&quot;: 300, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <img src="{{ asset('guest/images/demo-restaurant-home-04.png') }}" alt="">
            </div>
            <div class="col-xl-5 col-lg-6"
                data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <span class="fs-15 fw-600 text-red text-uppercase mb-25px d-block"><span
                        class="w-70px h-2px bg-red d-inline-block align-middle me-15px"></span>since 1980's</span>
                <h1 class="alt-font text-dark-gray mb-15px">WELCOME TO RELISH FOR FOOD</h1>
                <p class="w-90">Experience the best in corporate catering with “RELISH for FOOD,” a branch of
                    Wellington’s iconic Relish Café. Located in the Capital on the Quay, we cater to top private and
                    public sector offices. Our food, renowned for its quality, presentation, and value, reflects the
                    high standards of Wellington CBD’s discerning professionals. Try us for your next event and
                    taste the excellence that defines RELISH </p>
                <div class="d-inline-block mt-10px xs-mt-0">
                    <a href="{{ route('restaurant') }}"
                        class="btn btn-dark-gray btn-large btn-switch-text btn-round-edge btn-box-shadow me-30px xs-me-15px xs-mb-10px">
                        <span>
                            <span class="btn-double-text" data-text="About restaurant">About restaurant</span>
                        </span>
                    </a>
                    <div class="alt-font fs-24 d-inline-block align-middle lh-0 text-dark-gray xs-mb-10px"><i
                            class="feather icon-feather-phone-outgoing me-10px text-base-color"></i><a
                            href="tel:044738808">Contact US</a></div>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-xl-3 row-cols-lg-3 row-cols-md-2 justify-content-center"
            data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">


            <div class="col icon-with-text-style-08 md-mb-50px sm-mb-30px">
                <div class="feature-box feature-box-left-icon-middle">
                    <div
                        class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded bg-white box-shadow-medium-bottom me-25px">
                        <i class="bi bi-box-seam d-inline-block icon-medium text-dark-gray"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-inline-block alt-font fs-26 text-dark-gray">fast delivery</span>
                        <p class="lh-22">Within 30 minutes</p>
                    </div>
                </div>
            </div>


            <div class="col icon-with-text-style-08 md-mb-50px sm-mb-30px">
                <div class="feature-box feature-box-left-icon-middle">
                    <div
                        class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded bg-white box-shadow-medium-bottom me-25px">
                        <i class="bi bi-award d-inline-block icon-medium text-dark-gray"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-inline-block alt-font fs-26 text-dark-gray">absolute dining</span>
                        <p class="lh-22">Best for Corporate & Functions Catering</p>
                    </div>
                </div>
            </div>


            <div class="col icon-with-text-style-08">
                <div class="feature-box feature-box-left-icon-middle">
                    <div
                        class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded bg-white box-shadow-medium-bottom me-25px">
                        <i class="bi bi-bag-check d-inline-block icon-medium text-dark-gray"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-inline-block alt-font fs-26 text-dark-gray">pickup delivery</span>
                        <p class="lh-22">Grab your food order</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="stack-box py-0 z-index-99">
    <div class="stack-box-contain ">
        <!-- start stack item -->
        <div class="stack-item stack-item-01 bg-white lg-pt-8 lg-pb-8 md-pb-0">
            <div class="stack-item-wrapper">
                <div class="container-fluid">
                    <div class="row align-items-center full-screen md-h-auto">
                        <div class="col-lg-6 cover-background overflow-visible h-100 md-h-500px" style="background-image: url({{ asset('guest/images/cafe-1.jpg') }})">
                            <div class="position-absolute right-minus-130px top-60px md-top-auto md-bottom-minus-50px fs-170 lg-fs-120 lg-right-minus-80px md-right-0px md-left-0px text-center text-lg-start alt-font z-index-9 fw-600 text-dark-gray opacity-3">01</div>
                            <div class="position-absolute right-0px bottom-minus-1px">
                                <div class="vertical-title-center">
                                    <div class="title fw-700 fs-19 alt-font text-uppercase text-dark-gray bg-white ls-minus-4px pt-30px pb-30px ps-10px pe-10px">
                                        <span class="d-inline-block">Our Speciality</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ps-12 pe-14 xxl-ps-10 xxl-pe-10 xl-pe-8 lg-ps-6 lg-pe-4 md-p-50px sm-ps-30px sm-pe-30px position-relative align-self-center text-md-start text-center">
                            <div class="mb-15px">
                                <span class="w-25px h-1px d-inline-block bg-base-color me-5px align-middle"></span>
                                <span class="text-gradient-base-color fs-15 alt-font fw-700 ls-minus-4px text-uppercase d-inline-block align-middle">Cafe Experience</span>
                            </div>
                            <h2 class="text-dark-gray alt-font fw-600 ls-minus-4px mb-25px">Best Cafe in Wellington </h2>
                            <p class="w-95 md-w-100 mb-35px">We offer great taste with superior quality. If you simply search ‘best cafe Wellington’ on Google, you will come across Relish in the top searches.

                                Delectable cuisines are waiting to explode your taste buds. Feel the blast of flavors in your mouth and enjoy the most exquisite dishes made only for you. We believe love is the most important ingredient for cooking food and we put bundles of love in our dishes. This makes us the best cafe in Wellington. </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end stack item -->
        <!-- start stack item -->
        <div class="stack-item stack-item-02 bg-linen md-pt-0 md-pb-0">
            <div class="stack-item-wrapper">
                <div class="container-fluid">
                    <div class="row align-items-center full-screen md-h-auto">
                        <div class="col-lg-6 cover-background overflow-visible h-100 md-h-500px" style="background-image: url({{ asset('guest/images/cafe-4.png') }})">
                            <div class="position-absolute right-minus-130px top-60px md-top-auto md-bottom-minus-50px fs-170 lg-fs-120 lg-right-minus-80px md-right-0px md-left-0px text-center text-lg-start alt-font z-index-9 fw-600 text-dark-gray opacity-3">02</div>
                            <div class="position-absolute right-0px bottom-minus-1px">
                                <div class="vertical-title-center">
                                    <div class="title fw-700 fs-19 alt-font text-uppercase text-dark-gray bg-linen ls-minus-4px pt-30px pb-30px ps-10px pe-10px">
                                        <span class="d-inline-block">Our Speciality</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ps-12 pe-14 xxl-ps-10 xxl-pe-10 xl-pe-8 lg-ps-6 lg-pe-4 md-p-50px sm-ps-30px sm-pe-30px position-relative align-self-center text-md-start text-center">
                            <div class="mb-15px">
                                <span class="w-25px h-1px d-inline-block bg-base-color me-5px align-middle"></span>
                                <span class="text-gradient-base-color fs-15 alt-font fw-700 ls-minus-4px text-uppercase d-inline-block align-middle">Lifetime Experience</span>
                            </div>
                            <h2 class="text-dark-gray alt-font fw-600 ls-minus-4px mb-25px">Flavorful Experience of a Lifetime </h2>
                            <p class="w-95 md-w-100 mb-35px">We offer a blend of wonderful flavors which gives you a tasty dining experience, so you create moments to remember for a lifetime. We offer a very lively space for your family and friends so you can dine in comfort. This makes us the best restaurant in Wellington. </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end stack item -->
        <!-- start stack item -->
        <div class="stack-item stack-item-03 bg-white lg-pt-8 md-pb-0 md-pt-0">
            <div class="stack-item-wrapper">
                <div class="container-fluid">
                    <div class="row align-items-center full-screen md-h-auto">
                        <div class="col-lg-6 cover-background overflow-visible h-100 md-h-500px" style="background-image:url({{ asset('guest/images/cafe-5.png') }})">
                            <div class="position-absolute right-minus-130px top-60px md-top-auto md-bottom-minus-50px fs-170 lg-fs-120 lg-right-minus-80px md-right-0px md-left-0px text-center text-lg-start alt-font z-index-9 fw-600 text-dark-gray opacity-3">03</div>
                            <div class="position-absolute right-0px bottom-minus-1px">
                                <div class="vertical-title-center">
                                    <div class="title fw-700 fs-19 alt-font text-uppercase text-dark-gray bg-white ls-minus-4px pt-30px pb-30px ps-10px pe-10px">
                                        <span class="d-inline-block">Our Speciality</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 ps-12 pe-14 xxl-ps-10 xxl-pe-10 xl-pe-8 lg-ps-6 lg-pe-4 md-p-50px sm-ps-30px sm-pe-30px sm-pb-0 position-relative align-self-center text-md-start text-center">
                            <div class="mb-15px">
                                <span class="w-25px h-1px d-inline-block bg-base-color me-5px align-middle"></span>
                                <span class="text-gradient-base-color fs-15 alt-font fw-700 ls-minus-4px text-uppercase d-inline-block align-middle">Family & Friends Gathering</span>
                            </div>
                            <h2 class="text-dark-gray alt-font fw-600 ls-minus-4px mb-25px">Best for Family & Friends Gathering </h2>
                            <p class="w-95 md-w-100 mb-35px">With a perfect ambience for gatherings and the best quality food, we give you a delectable experience which will make your tummy full and your heart happy. Our ultimate goal is to give you a world-class experience of flavorful dishes made by experienced chefs, making us the best restaurant in Wellington. </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end stack item -->
    </div>
</section>


<section class="cover-background" style="background-image: url('guest/images/demo-restaurant-home-05.jpg')">
    <div class="container">
        <div class="row justify-content-center mb-1">
            <div class="col-lg-7 text-center"
                data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <span class="fs-15 fw-600 text-red text-uppercase mb-10px d-block"><span
                        class="w-5px h-2px bg-red d-inline-block align-middle me-5px"></span>Choose delicious<span
                        class="w-5px h-2px bg-red d-inline-block align-middle ms-5px"></span></span>
                <!-- <h2 class="alt-font text-white">Popular menu</h2> -->
            </div>
        </div>
        <div class="row mb-6 xs-mb-8">
            <div class="col tab-style-02 fs-600">
                <ul class="nav nav-tabs fs-18 fw-500 justify-content-center text-center mb-4 sm-mb-0"
                    data-anime='{"el": "childs", "rotateX": [30, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad"}'>
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            @foreach ($menusWithActiveItems as $menu)
                            <li class="nav-item swiper-slide">
                                <a class="nav-linkk  {{ $loop->first ? 'active' : '' }} d-flex flex-column align-items-center"
                                    data-bs-toggle="tab" href="#tab_menu_{{ $menu->id }}">
                                    <img src="{{ asset($menu->image) }}" height="43" width="46"
                                        class="icon-large mb-2 svg-icon" alt="{{ $menu->image_alt }}">
                                    {{ $menu->name }}
                                </a>
                            </li>
                            @endforeach
                        </div>
                    </div>
                </ul>
                <div class="tab-content">
                    @foreach ($menusWithActiveItems as $menu)
                    <div class="tab-pane fade {{ $loop->first ? 'in active show' : '' }}"
                        id="tab_menu_{{ $menu->id }}">
                        <div class="row justify-content-center">
                            @foreach ($menu->menuItems->chunk(2) as $chunk)
                            @foreach ($chunk as $key => $item)
                            @if ($loop->remaining == 1 && $loop->last)
                            {{-- This is the last item of an odd number of items, place it on the left --}}
                            <div class="col-lg-12 sm-mb-20px">
                                <ul class="pricing-table-style-12 pe-15px md-pe-0">
                                    <li class="last-paragraph-no-margin d-flex align-items-start mb-4">
                                        <img src="{{ asset($item->image) }}" class="rounded"
                                            alt="{{ $item->image_alt }}"
                                            style="width: 120px; height: auto;">
                                        <div class="ms-30px xs-ms-3 flex-grow-1">
                                            <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                <span
                                                    class="fw-600 text-white">{{ $item->name }}</span>
                                                <div class="ms-auto fw-600 text-white">
                                                    @if (is_numeric($item->price))
                                                    ${{ number_format((float) $item->price, 2) }}
                                                    @else
                                                    ${{ number_format((float) $item->price, 2) }}
                                                    @endif
                                                </div>
                                            </div>
                                            <p class="color-grey">


                                                {{ Str::limit(strip_tags(html_entity_decode($item->description)), 70) }}
                                                <button type="button"
                                                    class="btn btn-link text-white p-0 ms-1"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#menuItemModal{{ $item->id }}">
                                                    Read More
                                                </button>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                                <!-- Modal -->
                                <div class="modal fade" id="menuItemModal{{ $item->id }}"
                                    tabindex="-1"
                                    aria-labelledby="menuItemModalLabel{{ $item->id }}"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content box-shadow-quadruple-large">
                                            <div class="row g-0">
                                                <!-- Image Column -->
                                                <div class="col-12 col-md-6">
                                                    <img src="{{ asset($item->image) }}"
                                                        alt="{{ $item->image_alt }}" class="img-fluid">
                                                </div>
                                                <!-- Content Column -->
                                                <div class="col-12 col-md-6 modall">
                                                    <div class="modal-header"
                                                        style="border-bottom: 1px solid #767ea2;">
                                                        <h5 class="modal-title text-dark-gray"
                                                            id="menuItemModalLabel{{ $item->id }}">
                                                            {{ $item->name }}
                                                        </h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>{!! $item->description !!}</p>
                                                        @if ($item->additions)
                                                        <p><span class="pp">Add :</span> <br>
                                                            {{ $item->additions }}
                                                        </p>
                                                        @endif
                                                        <p>{{ $item->modifications }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="col-lg-12 sm-mb-20px">
                                <ul
                                    class="pricing-table-style-12 {{ $key == 0 ? 'ps-15px md-ps-0' : 'ps-15px md-ps-0' }}">
                                    <li class="last-paragraph-no-margin d-flex align-items-start mb-4">
                                        <img src="{{ asset($item->image) }}" class="rounded"
                                            alt="{{ $item->image_alt }}"
                                            style="width: 120px; height: auto;">
                                        <div class="ms-30px xs-ms-3 flex-grow-1">
                                            <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                <span
                                                    class="fw-600 text-white">{{ $item->name }}</span>
                                                <div class="ms-auto fw-600 text-white mobb-hidee">
                                                    @if (is_numeric($item->price))
                                                    ${{ number_format((float) $item->price, 2) }}
                                                    @else
                                                    ${{ number_format((float) $item->price, 2) }}
                                                    @endif
                                                </div>
                                            </div>
                                            <p class="color-grey d-flex justify-content-between align-items-center w-100 m-0">
                                            <div class="d-flex justify-content-between w-100">
                                                <div class="d-flexx justify-content-start flex-grow-1">


                                                    {{ Str::limit(strip_tags(html_entity_decode($item->description)), 70) }}
                                                    <button type="button" class="btn btn-link text-white p-0 ms-1" data-bs-toggle="modal"
                                                        data-bs-target="#menuItemModal{{ $item->id }}">
                                                        Read More
                                                    </button>
                                                </div>
                                                <div class="d-flex justify-content-end">
                                                    <div class="cart-container" id="cart-item-{{ $item->id }}">
                                                        <button class="btn btn-primary add-to-cart-btn" data-id="{{ $item->id }}" data-item="{{ $item->name }}" data-type="menu" data-price="{{ $item->price }}" data-image="{{ asset($item->image) }}" id="add-to-cart-btn-{{ $item->id }}">Add to Cart</button>
                                                        <div class="quantity-container" style="display: none;" id="quantity-container-{{ $item->id }}">
                                                            <button class="btn btn-secondary decrease-btn" data-id="{{ $item->id }}" id="decrease-btn-{{ $item->id }}" data-type="menu" data-price="{{ $item->price }}" data-image="{{ asset($item->image) }}">-</button>
                                                            <span id="quantity-value-{{ $item->id }}">1</span>
                                                            <button class="btn btn-secondary increase-btn" data-id="{{ $item->id }}" id="increase-btn-{{ $item->id }}" data-type="menu" data-price="{{ $item->price }}" data-image="{{ asset($item->image) }}">+</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                                <!-- Modal -->
                                <div class="modal fade" id="menuItemModal{{ $item->id }}"
                                    tabindex="-1"
                                    aria-labelledby="menuItemModalLabel{{ $item->id }}"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content box-shadow-quadruple-large">
                                            <div class="row g-0">
                                                <!-- Image Column -->
                                                <div class="col-12 col-md-6">
                                                    <img src="{{ asset($item->image) }}"
                                                        alt="{{ $item->image_alt }}"
                                                        class="img-fluid">
                                                </div>
                                                <!-- Content Column -->
                                                <div class="col-12 col-md-6 modall">
                                                    <div class="modal-header"
                                                        style="border-bottom: 1px solid #767ea2;">
                                                        <h5 class="modal-title text-dark-gray"
                                                            id="menuItemModalLabel{{ $item->id }}">
                                                            {{ $item->name }}
                                                        </h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <p>{!! $item->description !!}</p>

                                                        @if ($item->additions)
                                                        <p><span class="pp">Add :</span> <br>
                                                            {{ $item->additions }}
                                                        </p>
                                                        @endif
                                                        <p>{{ $item->modifications }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center"
            data-anime="{ &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
            <div class="col-12 text-center last-paragraph-no-margin">
                <div
                    class="d-inline-block align-middle bg-red fw-500 text-white border-radius-30px ps-20px pe-20px fs-14 me-10px sm-m-10px">
                    Masterchef
                </div>
                <div class="d-inline-block align-middle text-white fs-18 fw-500">Unique and delicious dishes
                    from the worlds <span class="text-decoration-line-bottom-medium fw-600">best masterchefs.</span>
                </div>
            </div>
        </div>
    </div>
    <hr class="mt-4">
</section>




<section class="overflow-hidden overlap-height position-relative">
    <div class="container-fluid overlap-gap-section">
        <div class="row justify-content-center mb-2">
            <div class="col-lg-7 text-center"
                data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <span class="fs-15 fw-600 text-red text-uppercase mb-10px d-block"><span
                        class="w-5px h-2px bg-red d-inline-block align-middle me-5px"></span>Specials choice<span
                        class="w-5px h-2px bg-red d-inline-block align-middle ms-5px"></span></span>
                <h2 class="alt-font text-dark-gray">Popular dishes</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 position-relative feather-shadow sm-feather-shadow-none">
                <div class="outside-box-right-15 outside-box-left-15 sm-outside-box-right-0 sm-outside-box-left-0"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <div class="swiper swiper-dark-pagination swiper-line-pagination-style-01 magic-cursor"
                        data-slider-options="{ &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 30, &quot;loop&quot;: true, &quot;autoplay&quot;: { &quot;delay&quot;: 2500, &quot;disableOnInteraction&quot;: false },  &quot;pagination&quot;: { &quot;el&quot;: &quot;.slider-four-slide-pagination-1&quot;, &quot;clickable&quot;: true }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;breakpoints&quot;: { &quot;1200&quot;: { &quot;slidesPerView&quot;: 5 }, &quot;992&quot;: { &quot;slidesPerView&quot;: 3 }, &quot;768&quot;: { &quot;slidesPerView&quot;: 3 }, &quot;576&quot;: { &quot;slidesPerView&quot;: 2 } }, &quot;effect&quot;: &quot;slide&quot; }">
                        <div class="swiper-wrapper">
                            @foreach ($popular_dishes as $popular_dishes)
                            <div class="swiper-slide">
                                <div class="services-box-style-01 hover-box last-paragraph-no-margin">
                                    <div class="position-relative box-image border-radius-6px">
                                        <img class="w-100 border-radius-6px"
                                            src="{{ asset($popular_dishes->image) }}"
                                            alt="{{ $popular_dishes->image_alt }}">
                                        <div class="box-overlay bg-dark-gray"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="bg-very-light-gray position-relative big-section">
    <div class="container-fluid overlap-section">
        <div class="row position-relative mb-4"
            data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
            <div class="col swiper swiper-width-auto text-center"
                data-slider-options="{ &quot;slidesPerView&quot;: &quot;auto&quot;, &quot;spaceBetween&quot;:50, &quot;speed&quot;: 10000, &quot;loop&quot;: true, &quot;pagination&quot;: { &quot;el&quot;: &quot;.slider-four-slide-pagination-2&quot;, &quot;clickable&quot;: false }, &quot;allowTouchMove&quot;: false, &quot;autoplay&quot;: { &quot;delay&quot;:0, &quot;disableOnInteraction&quot;: false }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.slider-four-slide-next-2&quot;, &quot;prevEl&quot;: &quot;.slider-four-slide-prev-2&quot; }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;effect&quot;: &quot;slide&quot; }">
                <div class="swiper-wrapper marquee-slide">
                    <div class="swiper-slide">
                        <div class="fs-150 ls-minus-2px alt-font text-outline text-outline-color-base-color">
                            Delicious</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="fs-150 ls-minus-2px alt-font text-black">Awesome</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="fs-150 ls-minus-2px alt-font text-outline text-outline-color-base-color">
                            Experience</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="fs-150 ls-minus-2px alt-font text-black">Cuisine</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="fs-150 ls-minus-2px alt-font text-outline text-outline-color-base-color">
                            Delicious</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="fs-150 ls-minus-2px alt-font text-black">Awesome</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="fs-150 ls-minus-2px alt-font text-outline text-outline-color-base-color">
                            Experience</div>
                    </div>
                    <div class="swiper-slide">
                        <div class="fs-150 ls-minus-2px alt-font text-black">Cuisine</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="position-absolute left-150px xxl-left-50px mt-7 d-none d-xxl-inline-block" data-parallax-liquid="true"
        data-parallax-transition="1" data-parallax-position="top">
        <img src="{{ asset('guest/images/demo-restaurant-home-07.png') }}" alt="">
    </div>
    <div class="position-absolute right-150px xxl-right-50px d-none d-xxl-inline-block" data-parallax-liquid="true"
        data-parallax-transition="1" data-parallax-position="bottom">
        <img src="{{ asset('guest/images/demo-restaurant-home-08.png') }}" alt="">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-10"
                data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <div class="swiper slider-custom-image swiper-pagination-bottom magic-cursor testimonials-style-03"
                    data-slider-options="{ &quot;loop&quot;: true, &quot;pagination&quot;: { &quot;el&quot;: &quot;.slider-custom-image-pagination&quot;, &quot;type&quot;: &quot;bullets&quot;, &quot;clickable&quot;: true }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.swiper-button-next-nav&quot;, &quot;prevEl&quot;: &quot;.swiper-button-previous-nav&quot;, &quot;effect&quot;: &quot;fade&quot; } }"
                    data-thumbs="[&quot;guest/images/avtar-33.jpg&quot;,&quot;guest/images/avtar-34.jpg&quot;,&quot;guest/images/avtar-35.jpg&quot;]">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"
                            data-bullet-thumb="background-image: url(guest/images/avtar-27.jpg)">
                            <div class="d-flex flex-column">
                                <div class="mb-28 align-self-center text-center w-100">
                                    <img src="{{ asset('guest/images/demo-restaurant-home-quotes-icon.jpg') }}"
                                        class="mb-30px rounded" alt="User Icon">
                                    <h4 class="alt-font lh-38 text-white mb-10px">
                                        Thank you for the excellent feed! Everyone loved it, and the timing was
                                        perfect.
                                    </h4>
                                    <span class="fs-20 fw-500 text-base-color d-block">Brett</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide"
                            data-bullet-thumb="background-image: url(guest/images/avtar-27.jpg)">
                            <div class="d-flex flex-column">
                                <div class="mb-28 align-self-center text-center w-100">
                                    <img src="{{ asset('guest/images/demo-restaurant-home-quotes-icon.jpg') }}"
                                        class="mb-30px rounded" alt="User Icon">
                                    <h4 class="alt-font lh-42 text-white mb-10px">
                                        Fabulous food on Wednesday! Everyone raved about it. Hot and delivered on
                                        time.
                                    </h4>
                                    <span class="fs-20 fw-500 text-base-color d-block">Andrea</span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide"
                            data-bullet-thumb="background-image: url(guest/images/avtar-27.jpg)">
                            <div class="d-flex flex-column">
                                <div class="mb-28 align-self-center text-center w-100">
                                    <img src="{{ asset('guest/images/demo-restaurant-home-quotes-icon.jpg') }}"
                                        class="mb-30px rounded" alt="User Icon">
                                    <h4 class="alt-font lh-42 text-white mb-10px">
                                        The Friday food was a huge hit. Only issue was it was gone too quickly!
                                    </h4>
                                    <span class="fs-20 fw-500 text-base-color d-block">Kate</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="slider-custom-image-pagination swiper-pagination text-center pb-20px xs-pb-0px md-bottom-0px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="row justify-content-center overlap-section mb-6 g-0">
            <div class="col-auto text-center last-paragraph-no-margin bg-white pt-20px pb-20px ps-6 pe-6 border-radius-100px"
                data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <div
                    class="text-center bg-golden-yellow text-white fs-16 lh-36 border-radius-30px d-inline-block ps-20px pe-20px align-middle me-10px">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <div class="d-inline-block fs-18 text-dark-gray align-middle fw-500"><span
                        class="text-decoration-line-bottom-medium fw-600">2500+ happy food lovers</span> visited
                    our authentic restaurant.</div>
            </div>
        </div>
        <div class="row justify-content-center mb-4">
            <div class="col-lg-7 text-center"
                data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <span class="fs-15 fw-600 text-red text-uppercase mb-10px d-block"><span
                        class="w-5px h-2px bg-red d-inline-block align-middle me-5px"></span>From our blog<span
                        class="w-5px h-2px bg-red d-inline-block align-middle ms-5px"></span></span>
                <h2 class="alt-font text-dark-gray mb-0">Recent articles</h2>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                    <li class="grid-sizer"></li>

                    @foreach ($recent_blog as $recent_blog)
                    <!-- start blog item -->
                    <li class="grid-item">
                        <div class="card border-0 border-radius-4px box-shadow-extra-large box-shadow-extra-large-hover">
                            <div class="blog-image">
                                <a href="{{ route('blog.detail', [$recent_blog->slug]) }}" class="d-block"><img src="{{ asset($recent_blog->image) }}" alt="{{ $recent_blog->image_alt }}" /></a>
                                @php
                                $categories = $recent_blog->blog_category->pluck('category_name.category_name')->toArray();
                                $categoryList = implode(', ', $categories);
                                @endphp
                                <div class="blog-categories">
                                    <a href="{{ route('blog.detail', [$recent_blog->slug]) }}" class="categories-btn bg-white text-dark-gray text-dark-gray-hover text-uppercase alt-font fw-700">{{ $categoryList }}</a>
                                </div>
                            </div>
                            <div class="card-body p-4">
                                <a href="{{ route('blog.detail', [$recent_blog->slug]) }}" class="card-title mb-15px fw-600 fs-17 lh-26 text-dark-gray text-dark-gray-hover d-inline-block">{{ $recent_blog->heading }}</a>
                                <p>{{ Str::limit($recent_blog->short_description, 100) }}</p>
                                <div class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase">
                                    <div class="me-auto">
                                        <span class="blog-date fw-500 d-inline-block">{{ \Carbon\Carbon::parse($recent_blog->publish_date)->format('d F Y') }}</span>
                                        <div class="d-inline-block author-name">By <a href="{{ route('blog.detail', [$recent_blog->slug]) }}" class="text-dark-gray text-dark-gray-hover text-decoration-line-bottom fw-600">Admin</a></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>



</section>



@endsection

@section('page_level_script')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 10,
        spaceBetween: 30,
        freeMode: true,

        breakpoints: {
            240: {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 1,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 7,
                spaceBetween: 30,
            },
        },
    });
</script>

<script>
    $(document).ready(function() {

    });
</script>

@endsection