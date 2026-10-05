@extends('layouts.guest.master')

@section('page_level_style')
@endsection

@section('content')
    <section class="ipad-top-space-margin page-title-big-typography cover-background p-0 md-background-position-left-center"
        style="background-image: url(guest/images/demo-restaurant-about-title-bg.jpg)">
        <div class="container">
            <div class="row align-items-center justify-content-center small-screen">
                <div class="col-lg-6 col-md-8 position-relative text-center page-title-extra-large"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h1 class="alt-font text-dark-gray text-uppercase ls-minus-1px mb-0">Photo gallery</h1>
                    <h2 class="m-auto text-red fw-600 text-uppercase mb-0"><span
                            class="h-2px w-5px bg-red d-inline-block align-middle me-5px"></span>Luxury restaurant<span
                            class="h-2px w-5px bg-red d-inline-block align-middle ms-5px"></span></h2>
                </div>
            </div>
        </div>
    </section>


    <section class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <ul class="portfolio-filter nav nav-tabs justify-content-center border-0 fw-500 pb-4">
                        <li class="nav active"><a data-filter="*" href="#">All</a></li>
                        <li class="nav"><a data-filter=".Savory" href="#">Savory</a></li>
                        <li class="nav"><a data-filter=".Cake" href="#">Cake</a></li>
                        <li class="nav"><a data-filter=".Breakfast" href="#">Breakfast</a></li>
                        <li class="nav"><a data-filter=".Platter" href="#">Platter</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 filter-content">
                    <ul
                        class="portfolio-simple portfolio-wrapper grid-loading grid grid-3col xxl-grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                        <li class="grid-sizer"></li>
                        <li class="grid-item Cake transition-inner-all">
                            <div class="portfolio-box">
                                <div class="portfolio-image bg-dark-gray border-radius-6px">
                                    <img src="{{ asset('guest/images/demo-restaurant-cake.jpg') }}" alt="">
                                    <div class="portfolio-hover d-flex justify-content-center flex-column p-35px">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href="{{ asset('guest/images/demo-restaurant-cake.jpg') }}"
                                                data-group="portfolio-items"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px rounded-circle box-shadow-large move-bottom-top">
                                                <i class="feather icon-feather-search fw-600" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid-item Cake transition-inner-all">
                            <div class="portfolio-box">
                                <div class="portfolio-image bg-dark-gray border-radius-6px">
                                    <img src="{{ asset('guest/images/demo-restaurant-pastry.jpg') }}" alt="">
                                    <div class="portfolio-hover d-flex justify-content-center flex-column p-35px">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href="{{ asset('guest/images/demo-restaurant-pastry.jpg') }}"
                                                data-group="portfolio-items"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px rounded-circle box-shadow-large move-bottom-top">
                                                <i class="feather icon-feather-search fw-600" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid-item Cake transition-inner-all">
                            <div class="portfolio-box">
                                <div class="portfolio-image bg-dark-gray border-radius-6px">
                                    <img src="{{ asset('guest/images/demo-restaurant-tart.jpg') }}" alt="">
                                    <div class="portfolio-hover d-flex justify-content-center flex-column p-35px">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href="{{ asset('guest/images/demo-restaurant-tart.jpg') }}"
                                                data-group="portfolio-items"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px rounded-circle box-shadow-large move-bottom-top">
                                                <i class="feather icon-feather-search fw-600" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid-item Savory transition-inner-all">
                            <div class="portfolio-box">
                                <div class="portfolio-image bg-dark-gray border-radius-6px">
                                    <img src="{{ asset('guest/images/demo-restaurant-sushi.jpg') }}" alt="">
                                    <div class="portfolio-hover d-flex justify-content-center flex-column p-35px">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href="{{ asset('guest/images/demo-restaurant-sushi.jpg') }}"
                                                data-group="portfolio-items"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px rounded-circle box-shadow-large move-bottom-top">
                                                <i class="feather icon-feather-search fw-600" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid-item Savory transition-inner-all">
                            <div class="portfolio-box">
                                <div class="portfolio-image bg-dark-gray border-radius-6px">
                                    <img src="{{ asset('guest/images/demo-restaurant-kebab.jpg') }}" alt="">
                                    <div class="portfolio-hover d-flex justify-content-center flex-column p-35px">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href="{{ asset('guest/images/demo-restaurant-kebab.jpg') }}"
                                                data-group="portfolio-items"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px rounded-circle box-shadow-large move-bottom-top">
                                                <i class=" feather icon-feather-search fw-600" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid-item Savory transition-inner-all">
                            <div class="portfolio-box">
                                <div class="portfolio-image bg-dark-gray border-radius-6px">
                                    <img src="{{ asset('guest/images/demo-restaurant-scone.jpg') }}" alt="">
                                    <div class="portfolio-hover d-flex justify-content-center flex-column p-35px">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href="{{ asset('guest/images/demo-restaurant-scone.jpg') }}"
                                                data-group="portfolio-items"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px rounded-circle box-shadow-large move-bottom-top">
                                                <i class=" feather icon-feather-search fw-600" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid-item Breakfast transition-inner-all">
                            <div class="portfolio-box">
                                <div class="portfolio-image bg-dark-gray border-radius-6px">
                                    <img src="{{ asset('guest/images/demo-restaurant-egg-omlette.jpg') }}"
                                        alt="">
                                    <div class="portfolio-hover d-flex justify-content-center flex-column p-35px">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href="{{ asset('guest/images/demo-restaurant-egg-omlette.jpg') }}"
                                                data-group="portfolio-items"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px rounded-circle box-shadow-large move-bottom-top"
                                                ti>
                                                <i class="feather icon-feather-search fw-600" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid-item Breakfast transition-inner-all">
                            <div class="portfolio-box">
                                <div class="portfolio-image bg-dark-gray border-radius-6px">
                                    <img src="{{ asset('guest/images/demo-restaurant-eggg.jpg') }}" alt="">
                                    <div class="portfolio-hover d-flex justify-content-center flex-column p-35px">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href="{{ asset('guest/images/demo-restaurant-eggg.jpg') }}"
                                                data-group="portfolio-items"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px rounded-circle box-shadow-large move-bottom-top"
                                                ti>
                                                <i class="feather icon-feather-search fw-600" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid-item Breakfast transition-inner-all">
                            <div class="portfolio-box">
                                <div class="portfolio-image bg-dark-gray border-radius-6px">
                                    <img src="{{ asset('guest/images/demo-restaurant-egg.jpg') }}" alt="">
                                    <div class="portfolio-hover d-flex justify-content-center flex-column p-35px">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href="{{ asset('guest/images/demo-restaurant-egg.jpg') }}"
                                                data-group="portfolio-items"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px rounded-circle box-shadow-large move-bottom-top"
                                                ti>
                                                <i class="feather icon-feather-search fw-600" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid-item Platter transition-inner-all">
                            <div class="portfolio-box">
                                <div class="portfolio-image bg-dark-gray border-radius-6px">
                                    <img src="{{ asset('guest/images/fruits-1.jpg') }}" alt="">
                                    <div class="portfolio-hover d-flex justify-content-center flex-column p-35px">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href="{{ asset('guest/images/fruits-1.jpg') }}"
                                                data-group="portfolio-items"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px rounded-circle box-shadow-large move-bottom-top">
                                                <i class="feather icon-feather-search fw-600" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid-item Platter transition-inner-all">
                            <div class="portfolio-box">
                                <div class="portfolio-image bg-dark-gray border-radius-6px">
                                    <img src="{{ asset('guest/images/fruits-3.jpg') }}" alt="">
                                    <div class="portfolio-hover d-flex justify-content-center flex-column p-35px">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href="{{ asset('guest/images/fruits-3.jpg') }}"
                                                data-group="portfolio-items"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px rounded-circle box-shadow-large move-bottom-top">
                                                <i class="feather icon-feather-search fw-600" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid-item Platter transition-inner-all">
                            <div class="portfolio-box">
                                <div class="portfolio-image bg-dark-gray border-radius-6px">
                                    <img src="{{ asset('guest/images/fruits-2.jpg') }}" alt="">
                                    <div class="portfolio-hover d-flex justify-content-center flex-column p-35px">
                                        <div
                                            class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                            <a href="{{ asset('guest/images/fruits-2.jpg') }}"
                                                data-group="portfolio-items"
                                                class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px rounded-circle box-shadow-large move-bottom-top">
                                                <i class="feather icon-feather-search fw-600" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('page_level_script')
@endsection
