@extends('layouts.guest.master')
@section('page_level_style')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<style>
    .fs-38 {
        font-size: 38px !important;
    }

    .small-screen {
        height: 300px !important;
        margin-top: 50px;
    }

    .padd-restaurant {
        padding: 10px 50px 50px 50px !important;
    }

    .paddd-restaurant {
        padding: 50px !important;
    }

    .padssd-restaurant {
        padding: 0px 50px 50px 50px !important;
    }

    .ls-minus-122px {
        letter-spacing: -1px !important;
        line-height: 40px !important;
    }

    /* Mobile (Portrait) */
    @media only screen and (max-width: 480px) {
        .small-screen {

            margin-top: 0px;
        }

        .padd-restaurant {
            padding: 0px !important;
        }

        .padd-restaurantt {
            padding: 0px !important;
        }

        .mt-344 {
            margin-top: 45px !important;
        }

        .paddd-restaurant {
            padding: 0px !important;
        }

        .mobb-padd-none {
            padding-bottom: 0 !important;
        }

        .padssd-restaurant {
            padding: 0px !important;

        }

        .mob-hide {
            display: none;
        }

        .mob-title-headinng {
            font-size: 27px !important;
            font-weight: 500 !important;
            text-align: center !important;
        }

        .mobb-title-headinngg{
          text-align: center !important;
        }
    }
</style>



<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
{
  "@context": "https://schema.org",
  "@type": "Restaurant",
  "name": "Relish For Food",
  "url": "https://relishforfood.co.nz/restaurant",
  "servesCuisine": "Restaurant",
  "address": {
    "@type": "PostalAddress",
    "addressCountry": "NZ"
  }
},
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "url": "https://relishforfood.co.nz/restaurant",
  "name": "Restaurant",
  "isPartOf": {
    "@type": "WebSite",
    "url": "https://relishforfood.co.nz/"
  }
} 
 

  ]
}
</script>

@endsection

@section('content')
<section class="ipad-top-space-margin page-title-big-typography cover-background p-0 md-background-position-left-center"
    style="background-image: url(guest/images/demo-restaurant-about-title-bg.jpg)">
    <div class="container">
        <div class="row align-items-center justify-content-center small-screen">
            <div class="col-lg-6 col-md-8 position-relative text-center page-title-extra-large"
                data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <h1 class="alt-font fw-400 text-dark-gray text-uppercase ls-minus-122px mb-0 fs-38">Wellington Restaurant Where Flavors Flourish! </h1>
                <h2 class="m-auto text-red fw-600 text-uppercase mb-0"><span
                        class="h-2px w-5px bg-red d-inline-block align-middle me-5px"></span>Experience Culinary Excellence <span
                        class="h-2px w-5px bg-red d-inline-block align-middle ms-5px"></span></h2>
            </div>
        </div>
    </div>
</section>
<section class="background-position-center background-repeat padd-restaurant" style="background-image: url('{{ asset('guest/images/vertical-center-line-bg.svg') }}');">
    <div class="container">
        <div class="row">
            <div class="col-md-9 last-paragraph-no-margin">
                <p class="ls-05px">Welcome to our Wellington restaurant, where flavors, stories, and the spirit of New Zealand come together on every plate. At Relish Cafe, the Wellington restaurant, dining is not just about food; it’s about warmth, connection, and a celebration of culture. We focus on seasonal produce, carefully crafted menus, and an atmosphere that makes every guest feel at home. </p>
                <p class="ls-05px">From the very first bite, you’ll discover that our restaurant is more than just a place to eat. It’s a space where friends gather, travelers discover authentic dining, and locals return for the comfort of flavors that feel both familiar and exciting.</p>
            </div>
            <div class="col-md-3 text-center align-self-end d-none d-md-inline-block">
                <img src="{{ asset('guest/images/restaurant-amenities.jpg') }}" alt="Restaurant Amenities" class="position-relative bottom-minus-60px md-bottom-minus-20px" alt="" data-bottom-top="transform: rotate(120deg);" data-top-bottom="transform: rotate(0);" />
            </div>
        </div>
    </div>
</section>
<section class="background-position-center background-repeat pt-0 mobb-padd-none " style="background-image: url('{{ asset('guest/images/vertical-center-line-bg.svg') }}">
    <div class="container">
        <div class="outside-box-left-5 outside-box-right-5 lg-outside-box-left-0 lg-outside-box-right-0 mb-7 xs-mb-40px">
            <div class="row row-cols-1 row-cols-md-4 row-cols-sm-2 mt-6">
                <div class="col mt-5 md-mt-6 xs-mt-0 xs-mb-30px">
                    <img src="{{ asset('guest/images/restaurant-pg-1.png') }}" class="border-radius-6px w-100" data-bottom-top="transform: translate3d(0px, 50px, 0px)" data-top-bottom="transform: translate3d(0px, -50px, 0px)" alt="">
                </div>
                <div class="col mt-2 md-mt-0 xs-mb-30px">
                    <img src="{{ asset('guest/images/restaurant-pg-2.png') }}" class="border-radius-6px w-100 mob-hide" data-bottom-top="transform: translate3d(0px, -50px, 0px)" data-top-bottom="transform: translate3d(0px, 50px, 0px)" alt="">
                </div>
                <div class="col xs-mb-30px">
                    <img src="{{ asset('guest/images/restaurant-pg-3.png') }}" class="border-radius-6px w-100" data-bottom-top="transform: translate3d(0px, 50px, 0px)" data-top-bottom="transform: translate3d(0px, -50px, 0px)" alt="">
                </div>
                <div class="col mt-8 md-mt-5 xs-mt-0">
                    <img src="{{ asset('guest/images/restaurant-pg-4.png') }}" class="border-radius-6px w-100 mob-hide" data-bottom-top="transform: translate3d(0px, -50px, 0px)" data-top-bottom="transform: translate3d(0px, 50px, 0px)" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row position-relative">
            <div class="col swiper feather-shadow text-cente" data-slider-options='{ "slidesPerView": "auto", "spaceBetween":0, "centeredSlides": true, "speed": 10000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":1, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                <div class="swiper-wrapper swiper-width-auto marquee-slide">
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <div class="fs-28 sm-fs-22 alt-font ls-minus-05px text-dark-gray">
                            <span class="w-10px h-10px border border-radius-100 border-color-base-color d-inline-block ms-50px me-50px md-ms-30px md-me-30px"></span>
                            Fresh, handcrafted food made daily in Wellington CBD
                        </div>
                    </div>
                    <!-- end client item -->

                    <!-- start client item -->
                    <div class="swiper-slide">
                        <div class="fs-28 sm-fs-22 alt-font ls-minus-05px text-dark-gray">
                            <span class="w-10px h-10px border border-radius-100 border-color-base-color d-inline-block ms-50px me-50px md-ms-30px md-me-30px"></span>
                            Premium ingredients, exceptional taste — every time
                        </div>
                    </div>
                    <!-- end client item -->

                    <!-- start client item -->
                    <div class="swiper-slide">
                        <div class="fs-28 sm-fs-22 alt-font ls-minus-05px text-dark-gray">
                            <span class="w-10px h-10px border border-radius-100 border-color-base-color d-inline-block ms-50px me-50px md-ms-30px md-me-30px"></span>
                            Corporate catering crafted to impress
                        </div>
                    </div>
                    <!-- end client item -->

                    <!-- start client item -->
                    <div class="swiper-slide">
                        <div class="fs-28 sm-fs-22 alt-font ls-minus-05px text-dark-gray">
                            <span class="w-10px h-10px border border-radius-100 border-color-base-color d-inline-block ms-50px me-50px md-ms-30px md-me-30px"></span>
                            Reliable delivery for meetings and events
                        </div>
                    </div>
                    <!-- end client item -->

                    <!-- start client item -->
                    <div class="swiper-slide">
                        <div class="fs-28 sm-fs-22 alt-font ls-minus-05px text-dark-gray">
                            <span class="w-10px h-10px border border-radius-100 border-color-base-color d-inline-block ms-50px me-50px md-ms-30px md-me-30px"></span>
                            Your trusted café & catering partner in Wellington
                        </div>
                    </div>
                    <!-- end client item -->

                    <!-- start client item -->
                    <div class="swiper-slide">
                        <div class="fs-28 sm-fs-22 alt-font ls-minus-05px text-dark-gray">
                            <span class="w-10px h-10px border border-radius-100 border-color-base-color d-inline-block ms-50px me-50px md-ms-30px md-me-30px"></span>
                            Quality you can taste, service you can trust
                        </div>
                    </div>
                    <!-- end client item -->
                </div>

            </div>
        </div>
    </div>
</section>
<section class="position-relative z-index-1 background-position-left-top background-no-repeat overflow-hidden paddd-restaurant">
    <!--<div class="position-absolute right-0px bottom-minus-90px z-index-minus-1 d-none d-md-inline-block" data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)">-->
    <!--    <img src="{{ asset('guest/images/demo-elearning-04.png') }}')" alt="">-->
    <!--</div>-->

    <div class="container-fluid">
        <div class="row position-relative">
            <div class="col swiper swiper-width-auto feather-shadow text-center" data-slider-options='{ "slidesPerView": "auto", "spaceBetween":80, "centeredSlides": true, "speed": 30000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                <div class="swiper-wrapper marquee-slide">
                    <!-- start slider item -->
                    <div class="swiper-slide">
                        <div class="fs-190 ls-minus-1px pt-10px pb-10px alt-font fw-600 opacity-1">Relish For Food</div>
                    </div>
                    <!-- end slider item -->
                    <!-- start slider item -->
                    <div class="swiper-slide">
                        <div class="fs-190 ls-minus-1px pt-10px pb-10px alt-font fw-600 opacity-1">Relish For Food</div>
                    </div>
                    <!-- end slider item -->
                    <!-- start slider item -->
                    <div class="swiper-slide">
                        <div class="fs-190 ls-minus-1px pt-10px pb-10px alt-font fw-600 opacity-1">Relish For Food</div>
                    </div>
                    <!-- end slider item -->
                </div>
            </div>
            <div class="col-12 position-absolute top-0 h-100 d-flex justify-content-center align-items-center left-0px z-index-1 text-center">
                <h2 class="alt-font text-dark-gray fs-45 fw-600 ls-minus-0px xs-ls-minus-0px mb-0 mt-40px xs-mt-15px mob-title-headinng">Craving the Perfect Restaurant in Wellington, New Zealand? </h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-end">

            <div class="col-lg-12 offset-xl-1 last-paragraph-no-margin" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <p> If you’re looking for a restaurant in Wellington, New Zealand, ours is designed to give you an experience that blends modern dining with traditional charm. Relish Cafe, the restaurant in Wellington, New Zealand, is famous for creativity, and we’ve embraced that spirit by crafting dishes that are fresh, flavorful, and uniquely Kiwi.Step inside, and you’ll find a space that feels alive with conversation and laughter. Whether it’s a long lunch, an intimate dinner, or a special celebration, our restaurant brings people together with food that feels both thoughtful and approachable. </p>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center mt-4 mb-4 sm-mb-8" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <!-- start features box item -->
            <div class="col icon-with-text-style-03">
                <div class="feature-box p-8 overflow-hidden">
                    <div class="feature-box-icon mb-25px">
                        <img src="{{ asset('guest/images/rest-icon-1.png') }}" class="h-100px" alt="">
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-block fs-18 fw-600 text-dark-gray mb-5px ls-minus-05px">Taste You Can Trust</span>
                        <p>Fresh, local ingredients crafted into authentic Kiwi flavours.</p>

                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-03">
                <div class="feature-box p-8 overflow-hidden">
                    <div class="feature-box-icon mb-25px">
                        <img src="{{ asset('guest/images/rest-icon-2.png') }}" class="h-100px" alt="">
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-block fs-18 fw-600 text-dark-gray mb-5px ls-minus-05px">Crafted With Passion</span>
                        <p>Thoughtfully made dishes inspired by New Zealand cuisine.</p>

                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-03">
                <div class="feature-box p-8 overflow-hidden">
                    <div class="feature-box-icon mb-25px">
                        <img src="{{ asset('guest/images/rest-icon-3.png') }}" class="h-100px" alt="">
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-block fs-18 fw-600 text-dark-gray mb-5px ls-minus-05px">Loved by Locals</span>
                        <p>A favourite spot for warm service and memorable meals.</p>

                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-03">
                <div class="feature-box p-8 overflow-hidden">
                    <div class="feature-box-icon mb-25px">
                        <img src="{{ asset('guest/images/rest-icon-4.png') }}" class="h-100px" alt="">
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-block fs-18 fw-600 text-dark-gray mb-5px ls-minus-05px">Hospitality That Cares</span>
                        <p>Warm, friendly service that makes every visit feel special and lo.</p>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
        </div>
        <div class="row justify-content-center" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <div class="col-auto text-center">
                <div class="icon-with-text-style-06">
                    <div class="feature-box feature-box-left-icon-middle">
                        <div class="feature-box-icon me-10px">
                            <i class="bi bi-patch-check icon-very-medium text-base-color"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <div class="text-dark-gray fs-20 ls-minus-05px">We serve <span class="fw-600">exceptional flavours</span> crafted for every guest.</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-white padd-restaurant">
    <div class="container">
        <div class="row justify-content-center mb-5 xs-mb-35px">
            <div class="col-xl-12 text-center" data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 500, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                <h2 class="alt-font text-dark-gray fs-40 fw-600 ls-minus-0px xs-ls-minus-0px mob-title-headinng mb-0 mt-40px xs-mt-15px mt-344">Wellington Restaurant & Bar: Where Evenings Come Alive! </h2>

            </div>
            <div class="col-lg-12 offset-xl-1 last-paragraph-no-margin mt-4" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <p> If you’re looking for a restaurant in Wellington, New Zealand, ours is designed to give you an experience that blends modern dining with traditional charm. Relish Cafe, the restaurant in Wellington, New Zealand, is famous for creativity, and we’ve embraced that spirit by crafting dishes that are fresh, flavorful, and uniquely Kiwi.Step inside, and you’ll find a space that feels alive with conversation and laughter. Whether it’s a long lunch, an intimate dinner, or a special celebration, our restaurant brings people together with food that feels both thoughtful and approachable. </p>
            </div>
        </div>

    </div>
</section>
<section class="p-0 mob-hide">
    <div class="container-fluid">
        <div class="row">
            <div class="col px-0">
                <ul class="image-gallery-style-04 gallery-wrapper grid grid-4col xxl-grid-4col xl-grid-4col lg-grid-4col md-grid-3col sm-grid-1col xs-grid-1col">
                    <li class="grid-sizer"></li>
                    <!-- start gallery item -->
                    <!-- 1: Cafe Interior -->
                    <li class="grid-item grid-item-double transition-inner-all">
                        <div class="gallery-box">
                            <a href="{{ asset('guest/images/rest-inner-1.png') }}"
                                data-group="lightbox-group-gallery-item-4"
                                title="Cafe Interior">
                                <div class="position-relative gallery-image bg-dark-gray" style="background:#e3003b">
                                    <img src="{{ asset('guest/images/rest-inner-1.png') }}" alt="Cafe Interior" />
                                    <div class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-left-right">
                                        <div class="d-flex align-items-center justify-content-center w-70px h-70px rounded-circle border border-2 border-color-transparent-white-very-light">
                                            <i class="feather icon-feather-search text-white icon-extra-medium"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>

                    <!-- 2: Food – Biryani (North Indian) -->
                    <li class="grid-item gallery-box transition-inner-all">
                        <div class="gallery-box">
                            <a href="{{ asset('guest/images/rest-inner-2.png') }}"
                                data-group="lightbox-group-gallery-item-4"
                                title="Food – Biryani (North Indian)">
                                <div class="position-relative gallery-image bg-dark-gray" style="background:#ff5728">
                                    <img src="{{ asset('guest/images/rest-inner-2.png') }}" alt="Food – Biryani (North Indian)" />
                                    <div class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-left-right">
                                        <div class="d-flex align-items-center justify-content-center w-70px h-70px rounded-circle border border-2 border-color-transparent-white-very-light">
                                            <i class="feather icon-feather-search text-white icon-extra-medium"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>

                    <!-- 3: Cafe Aesthetic -->
                    <li class="grid-item gallery-box transition-inner-all">
                        <div class="gallery-box">
                            <a href="{{ asset('guest/images/rest-inner-3.png') }}"
                                data-group="lightbox-group-gallery-item-4"
                                title="Cafe Aesthetic">
                                <div class="position-relative gallery-image bg-dark-gray" style="background:#5b00d7">
                                    <img src="{{ asset('guest/images/rest-inner-3.png') }}" alt="Cafe Aesthetic" />
                                    <div class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-left-right">
                                        <div class="d-flex align-items-center justify-content-center w-70px h-70px rounded-circle border border-2 border-color-transparent-white-very-light">
                                            <i class="feather icon-feather-search text-white icon-extra-medium"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>

                    <!-- 4: Food & Fries -->
                    <li class="grid-item gallery-box transition-inner-all">
                        <div class="gallery-box">
                            <a href="{{ asset('guest/images/rest-inner-4.png') }}"
                                data-group="lightbox-group-gallery-item-4"
                                title="Food and Fries">
                                <div class="position-relative gallery-image bg-dark-gray" style="background:#aa502f">
                                    <img src="{{ asset('guest/images/rest-inner-4.png') }}" alt="Food and Fries" />
                                    <div class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-left-right">
                                        <div class="d-flex align-items-center justify-content-center w-70px h-70px rounded-circle border border-2 border-color-transparent-white-very-light">
                                            <i class="feather icon-feather-search text-white icon-extra-medium"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>

                    <!-- 5: North Indian Platter -->
                    <li class="grid-item grid-item-double gallery-box transition-inner-all">
                        <div class="gallery-box">
                            <a href="{{ asset('guest/images/rest-inner-5.png') }}"
                                data-group="lightbox-group-gallery-item-4"
                                title="North Indian Platter">
                                <div class="position-relative gallery-image bg-dark-gray" style="background:#434343">
                                    <img src="{{ asset('guest/images/rest-inner-5.png') }}" alt="North Indian Platter" />
                                    <div class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-left-right">
                                        <div class="d-flex align-items-center justify-content-center w-70px h-70px rounded-circle border border-2 border-color-transparent-white-very-light">
                                            <i class="feather icon-feather-search text-white icon-extra-medium"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>

                    <!-- 6: Aesthetic Look – Girl Eating Food -->
                    <li class="grid-item gallery-box transition-inner-all">
                        <div class="gallery-box">
                            <a href="{{ asset('guest/images/rest-inner-6.png') }}"
                                data-group="lightbox-group-gallery-item-4"
                                title="Aesthetic Look – Girl Eating Food">
                                <div class="position-relative gallery-image bg-dark-gray" style="background:#d83b40">
                                    <img src="{{ asset('guest/images/rest-inner-6.png') }}" alt="Aesthetic Look – Girl Eating Food" />
                                    <div class="d-flex align-items-center justify-content-center position-absolute top-0px left-0px w-100 h-100 gallery-hover move-left-right">
                                        <div class="d-flex align-items-center justify-content-center w-70px h-70px rounded-circle border border-2 border-color-transparent-white-very-light">
                                            <i class="feather icon-feather-search text-white icon-extra-medium"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </li>

                    <!-- end gallery item -->
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="big-section background-repeat position-relative z-index-0 overflow-hidden" style="background-image:url('images/demo-spa-salon-home-bg-01.jpg');">
    <!--<div class="position-absolute right-minus-100px top-50 z-index-minus-1 d-none d-lg-inline-block" data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)">-->
    <!--    <img src="{{ asset('guest/images/demo-spa-salon-bg-img-05.png') }}" alt="">-->
    <!--</div>-->
    <div class="container">
        <div class="row align-items-center position-relative justify-content-center justify-content-lg-start">
            <div class="position-absolute left-0px top-0px h-100 w-130px d-none d-lg-inline-block">
                <div class="vertical-title-center align-items-center justify-content-center">
                    <div class="title fs-16 ls-2px text-uppercase">
                        Crafted dining for <span class="text-dark-gray fw-600">pure</span>
                        <span class="text-dark-gray fw-600 fancy-text-style-4">
                            <span data-fancy-text='{ 
            "effect": "rotate",             "string": ["Flavour", "Comfort", "Pleasure"],             "speed": 50         }'></span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-11 position-relative offset-lg-1 md-mb-35px">
                <img src="{{ asset('guest/images/rest-outer.png') }}" class="w-100 border-radius-4px" alt="">
            </div>
            <div class="col-xl-5 col-lg-6 col-md-11 ps-8 md-ps-15px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
 
                <h2 class="fw-600 ls-minus-0px text-dark-gray alt-font mob-title-headinng" style="font-size: 30px;    margin-bottom: 3px; ">Experience the Best Restaurant in Wellington with Fresh Local Flavours </h2>
                <p class="w-90 xl-w-90 md-w-100 mb-10px">If you’re searching for a restaurant in Wellington, exploring options like Wellington Restaurant NZ, or simply hunting for the best Restaurant in Wellington, we invite you to step inside and discover
                    what makes Relish Cafe truly unique. </p>
                <ul class="p-0 list-style-01 fw-500 mb-40px">
                    <li class="border-color-transparent-dark-light pt-10px pb-10px text-dark-gray alt-font">Fresh, locally sourced ingredients </li>
                    <li class="border-color-transparent-dark-light pt-10px pb-10px text-dark-gray alt-font">Seasonal menus inspired by New Zealand produce </li>
                    <li class="border-color-transparent-dark-light pt-10px pb-10px text-dark-gray alt-font">Wines and cocktails crafted for every occasion </li>
                    <li class="border-color-transparent-dark-light pt-10px pb-10px text-dark-gray alt-font">A welcoming atmosphere for both locals and travelers </li>
                </ul>
                <div class="d-inline-block w-100">
                    <a href="/menu" class="btn btn-small btn-double-border btn-border-color-transparent-dark fw-700">
                        <span>
                            <span class="btn-double-text" data-text="Our Menu">Our Menu</span>
                            <span><i class="fa-solid fa-arrow-right"></i></span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-white padssd-restaurant">
    <div class="container">
        <div class="row justify-content-center mb-5 xs-mb-35px">
            <div class="col-xl-12 text-center" data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 500, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                <h2 class="alt-font text-dark-gray fs-40 fw-600 ls-minus-0px xs-ls-minus-0px mb-0 mt-40px xs-mt-15px mob-title-headinng">Why Locals Call Us the Best Restaurant in Wellington, New Zealand: </h2>

            </div>
            <div class="col-lg-12 offset-xl-1 last-paragraph-no-margin mt-4" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <p>Food lovers often say Relish is the best restaurant Wellington, New Zealand, has to offer, and we take that recognition with pride. From the first impression to the last detail, we aim to embody everything a guest would expect from the best restaurant in Wellington, New Zealand. </p>
                <p>Our chefs create menus inspired by New Zealand’s rich landscapes, pairing fresh seafood, local meats, and seasonal produce with techniques that highlight their natural beauty. Service is attentive but never overwhelming, ensuring that every visit feels special, whether it’s a casual meal or a milestone celebration. </p>
            </div>
        </div>

    </div>
</section>


@endsection

@section('page_level_script')
<!-- Include Flatpickr CSS -->


<!-- Include Flatpickr JS -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

@endsection