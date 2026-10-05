@extends('layouts.guest.master')

@section('page_level_style')

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Catering Menu | Relish For Food",
  "url": "https://relishforfood.co.nz/catering-menu",
  "description": "Best Catering Services Wellington for any occasion. Relax and enjoy tasty meals with a focus on seasonal produce. Order online or call us today!",
  "inLanguage": "en"
},
{
  "@context": "https://schema.org",
  "@type": "Service",
  "name": "Catering and Event Planning",
  "provider": {
    "@type": "Organization",
    "name": "Relish For Food",
    "url": "https://relishforfood.co.nz"
  },
  "areaServed": {
    "@type": "Country",
    "name": "New Zealand"
  },
  "description": "Best Catering Services Wellington for any occasion. Relax and enjoy tasty meals with a focus on seasonal produce. Order online or call us today!"
}
  ]
}
</script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
    :root {
        --base-color: #e99022;
        --medium-gray: #7b7a7a;
        --dark-gray: #1d1d1d;
        --charcoal-blue: #232323;
    }

    .d-flex {
        display: flex !important;
    }

    @media (max-width: 767px) {
        .d-flex {
            display: block !important;
        }
    }

    .text-gradient-base-color {
        background-image: linear-gradient(to right, #e97522 0%, #1ea3b1 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .pt-30px { padding-top: 30px !important; }

    h3, .h3 { line-height: 2.813rem; }

    .right-minus-130px { right: -89px; letter-spacing: 14px; }

    .ms-100px { margin-left: 100px; }
    .ls-minus-4px { letter-spacing: 1px !important; }
    .ms-80px { margin-left: 80px; }
    .mb-minus-50px { margin-bottom: -50px; }
    .left-minus-45 { left: -45%; }
    .bottom-minus-200px { bottom: -200px; }
    .bg-linen { background: #f6f4f3; }
    .bg-gradient-orange-transparent { background: linear-gradient(to right, rgba(233, 117, 34, 1.0) 10%, rgba(255, 255, 255, 0.0) 95%); }
    .bg-gradient-blue-transparent { background: linear-gradient(to right, rgba(30, 163, 177, 1.0) 10%, rgba(255, 255, 255, 0.0) 95%); }
    .z-index-99 { z-index: 99; }

    @media (max-width: 1199px) {
        .left-minus-45 { left: -78%; }
        .lg-ms-70px { margin-left: 70px; }
        .lg-bg-transparent { background-color: transparent; }
    }

    .swiper { width: 100%; height: 100%; }
    .swiper-slide { text-align: center; font-size: 18px; display: flex; justify-content: center; align-items: center; }

    .modal-body { font-size: 14px; }
    .modal-title { color: #fefefe; font-size: 21px; }
    .color-blueee { color: #1d1d1d !important; }
    .btn-close .modal { color: white; background-color: black; }

    .modal-content {
        background-color: #013145;
        color: #fefefe;
        border-radius: 10px;
        height: 420px;
        overflow: hidden;
    }
    .modal-content img {
        width: 100%;
        height: 420px;
        border-radius: 10px 0 0 10px;
        transition: transform 0.3s ease;
    }
    .modal-content img:hover { transform: scale(1.015); }
    .modal-body p { margin-bottom: 10px; line-height: 25px; }

    .modall { height: 420px; overflow-y: scroll; }
    .modall::-webkit-scrollbar { display: none; }
    .modall { -ms-overflow-style: none; scrollbar-width: none; }

    @media (max-width: 767.98px) {
        .modal-dialog { max-width: 100%; margin: 0.5rem; }
        .modal-content { margin: 5%; max-height: 400px; overflow: auto; }
        .modal-content img { border-radius: 10px 10px 0 0; height: 200px; display: none; }
        .modal-body { font-size: 12px; }
        .modal-title { font-size: 18px; }
        .modall { width: 100%; overflow: hidden; }
        .fw-600 { font-size: 14px; }
        .btn.btn-link { letter-spacing: 1px; }
    }

    .pp { color: #fff000; font-weight: 600; }
    .btn-close {
        --bs-btn-close-color: #ffffff;
        --bs-btn-close-bg: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ffffff'><path d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/></svg>");
    }

    .quantity-container { display: inline-flex; align-items: center; gap: 10px; }
    .bg-cornflower-bluee { background-color: #ce9365 !important; }
    .border-color-transparent-white-very-lightt { border-color: white; }

    /* ===== FIXED LEFT BOOK CATERING BUTTON ===== */
  .fixed-book-btn {
    position: fixed;
    right: 0;       /* ← sirf yeh badlo */
    top: 50%;
    transform: translateY(-50%);
    z-index: 99999;
}

    .fixed-book-btn a {
        display: flex;
        align-items: center;
        justify-content: center;
        writing-mode: vertical-rl;
        text-orientation: mixed;
        transform: rotate(180deg);
        background-color: #e99022;
        color: #fff !important;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: 2px;
        text-transform: uppercase;
        text-decoration: none;
        padding: 20px 10px;
        border-radius: 0 6px 6px 0;
        box-shadow: 3px 0 12px rgba(0,0,0,0.25);
        transition: background-color 0.3s ease, box-shadow 0.3s ease, padding 0.3s ease;
        white-space: nowrap;
    }

    .fixed-book-btn a:hover {
        background-color: #c97a10;
        box-shadow: 4px 0 18px rgba(0,0,0,0.35);
        padding: 24px 12px;
        color: #fff !important;
    }

    @media (max-width: 576px) {
        .fixed-book-btn a {
            font-size: 11px;
            padding: 16px 8px;
            letter-spacing: 1.5px;
        }
    }
    /* ============================================= */
</style>
@endsection

@section('content')

{{-- ===== FIXED LEFT BOOK CATERING BUTTON ===== --}}
<div class="fixed-book-btn">
    <a href="{{ route('book.catering.service') }}">Book Catering</a>
</div>
{{-- ============================================ --}}

<section class="ipad-top-space-margin page-title-big-typography cover-background p-0 md-background-position-left-center"
    style="background-image: url(guest/images/demo-restaurant-about-title-bg.jpg)">
    <div class="container">
        <div class="row align-items-center justify-content-center small-screen">
            <div class="col-lg-6 col-md-8 position-relative text-center page-title-extra-large"
                data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <h1 class="alt-font fw-400 text-dark-gray text-uppercase ls-minus-1px mb-0">Our Catering Menu</h1>
                <h2 class="m-auto text-red fw-600 text-uppercase mb-0"><span
                        class="h-2px w-5px bg-red d-inline-block align-middle me-5px"></span>Remarkable recipes<span
                        class="h-2px w-5px bg-red d-inline-block align-middle ms-5px"></span></h2>
            </div>
        </div>
    </div>
</section>

    <!-- catering-start -->
    <section class="cover-background" style="background-image: url('guest/images/demo-restaurant-home-05.jpg')">
        <div class="container">
            <div class="row justify-content-center mb-1">
                <div class="col-lg-7 text-center">
                    <span class="fs-15 fw-600 text-red text-uppercase mb-10px d-block">
                        <span class="w-5px h-2px bg-red d-inline-block align-middle me-5px"></span>Choose delicious
                        <span class="w-5px h-2px bg-red d-inline-block align-middle ms-5px"></span>
                    </span>
                </div>
            </div>

            <div class="row mb-6 xs-mb-8">
                <div class="col tab-style-02 fs-600">
                    <ul class="nav nav-tabs fs-18 fw-500 justify-content-center text-center mb-4 sm-mb-0"
                        data-anime='{"el": "childs", "rotateX": [30, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad"}'>
                        <div class="swiper mySwiperr">
                            <div class="swiper-wrapper">
                                @foreach ($cateringMenusWithActiveItems as $menu)
                                <li class="nav-item swiper-slide">
                                    <a class="nav-linkk {{ $loop->first ? 'active' : '' }} d-flex flex-column align-items-center"
                                        data-bs-toggle="tab" href="#tab_menu_{{ $menu->slug }}">
                                        <img src="{{ asset($menu->image) }}" height="43" width="46"
                                            class="icon-large mb-2 svg-icon" alt="{{ $menu->image_alt }}">
                                        {{ $menu->name }}
                                    </a>
                                </li>
                                @endforeach

                                <li class="nav-item swiper-slide">
                                    <a class="nav-linkk d-flex flex-column align-items-center" data-bs-toggle="tab"
                                        href="#tab_firstt5">
                                        <img src="{{ asset('guest/red-carpet.svg') }}" height="43" width="46"
                                            class="icon-large mb-2 svg-icon" alt=""> Functions
                                    </a>
                                </li>
                            </div>
                        </div>
                    </ul>
                    <br>
                    <div class="tab-content">
                        @foreach ($cateringMenusWithActiveItems as $index => $menu)
                        <div class="tab-pane fade {{ $loop->first ? 'in active show' : '' }}"
                            id="tab_menu_{{ $menu->slug }}">

                            <div class="row justify-content-center">
                                <p class="linee-height">{{ $menu->description }}</p>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-12 sm-mb-20px">
                                    <ul class="pricing-table-style-12 pe-15px md-pe-0">
                                        @foreach ($menu->menuItems as $item)
                                        <li class="last-paragraph-no-margin d-flex align-items-start mb-4">

                                            @php
                                            $defaultImages = [
                                                'morning-tea' => 'images/morning-tea.jpg',
                                                'lunch'       => 'images/lunch.jpg',
                                                'platters'    => 'images/platters.jpg',
                                                'salads'      => 'images/salad.jpg',
                                            ];
                                            $imageSrc = $item->image ?? ($defaultImages[$menu->slug] ?? 'images/default.jpg');
                                            $imageAlt = $item->image_alt ?? $menu->slug;
                                            @endphp

                                            <img src="{{ asset($imageSrc) }}" class="rounded" alt="{{ $imageAlt }}" style="width: 120px; height: auto;">

                                            <div class="ms-30px xs-ms-3 flex-grow-1">
                                                <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                                    <span class="fw-600 text-white">{{ $item->name }}</span>
                                                    <div class="ms-auto fw-600 text-white">
                                                        ${{ number_format((float) $item->price, 2) }}
                                                    </div>
                                                </div>
                                                <p class="color-grey">
                                                    {{ Str::limit(strip_tags(html_entity_decode($item->description)), 70) }}
                                                    @if ($item->description)
                                                    <button type="button"
                                                        class="btn btn-link text-white p-0 ms-1"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#itemModal_{{ $item->id }}">Read More
                                                    </button>
                                                    @endif
                                                </p>
                                                <div class="d-flex justify-content-end">
                                                    <div class="cart-container" id="cart-item-{{ $item->id }}">
                                                        <button class="btn btn-primary add-to-cart-btn"
                                                            data-id="{{ $item->id }}"
                                                            data-item="{{ $item->name }}"
                                                            data-type="catering"
                                                            data-price="{{ $item->price }}"
                                                            data-image="{{ asset($imageSrc) }}"
                                                            id="add-to-cart-btn-{{ $item->id }}">Add to Cart</button>
                                                        <div class="quantity-container" style="display: none;" id="quantity-container-{{ $item->id }}">
                                                            <button class="btn btn-secondary decrease-btn"
                                                                data-id="{{ $item->id }}"
                                                                id="decrease-btn-{{ $item->id }}"
                                                                data-type="catering"
                                                                data-price="{{ $item->price }}"
                                                                data-image="{{ asset($imageSrc) }}">-</button>
                                                            <span id="quantity-value-{{ $item->id }}">1</span>
                                                            <button class="btn btn-secondary increase-btn"
                                                                data-id="{{ $item->id }}"
                                                                id="increase-btn-{{ $item->id }}"
                                                                data-type="catering"
                                                                data-price="{{ $item->price }}"
                                                                data-image="{{ asset($imageSrc) }}">+</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- Item Modal -->
                                        <div class="modal fade" id="itemModal_{{ $item->id }}"
                                            tabindex="-1" aria-labelledby="itemModalLabel_{{ $item->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content box-shadow-quadruple-large">
                                                    <div class="row g-0">
                                                        <div class="col-12 col-md-6">
                                                            @if ($menu->slug == 'morning-tea' && $item->image == null)
                                                            <img src="{{ asset('images/morning-tea.jpg') }}" class="img-fluid" alt="morning-tea">
                                                            @elseif ($menu->slug == 'lunch' && $item->image == null)
                                                            <img src="{{ asset('images/lunch.jpg') }}" class="img-fluid" alt="lunch">
                                                            @elseif ($menu->slug == 'platters' && $item->image == null)
                                                            <img src="{{ asset('images/platters.jpg') }}" class="img-fluid" alt="platters">
                                                            @elseif ($menu->slug == 'salads' && $item->image == null)
                                                            <img src="{{ asset('images/salad.jpg') }}" class="img-fluid" alt="salads">
                                                            @else
                                                            <img src="{{ asset($item->image) }}" alt="{{ $item->image_alt }}" class="img-fluid">
                                                            @endif
                                                        </div>
                                                        <div class="col-12 col-md-6 modall">
                                                            <div class="modal-header" style="border-bottom: 1px solid #767ea2;">
                                                                <h5 class="modal-title text-dark-gray" id="itemModalLabel_{{ $item->id }}">
                                                                    {{ $item->name }}
                                                                </h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>{!! $item->description !!}</p>
                                                                @if ($item->price)
                                                                <p><span class="pp">Add :</span> <br> Additional options are available</p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="tab-pane fade in" id="tab_firstt5">
                            <div class="row justify-content-center">
                                <p class="linee-height">Leave the hassle of organising catering for your next
                                    function to us. We can custom design a spread for Birthdays, Graduations,
                                    Anniversaries, After-Funeral Receptions and any other Office or Domestic Function.
                                    We have handled a variety of Office Functions, Pre-Wedding Receptions and
                                    Valedictory Functions at the Parliament for retiring MPs. We also can provide our
                                    staff who are NZ trained in food handling and safety to help you with Table Setting,
                                    Food Display, Serving and Tidying Up. In addition to the items listed in the MENU
                                    under "Platters", which would suit a variety of functions, we are able to offer
                                    other products for "Functions". If you would like to talk to us about your function,
                                    we will be delighted to help you to design a spread to align with your function.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="stack-box py-0 z-index-99">
        <div class="stack-box-contain">
            <!-- stack item 01 -->
            <div class="stack-item stack-item-01 bg-white lg-pt-8 lg-pb-8 md-pb-0">
                <div class="stack-item-wrapper">
                    <div class="container-fluid">
                        <div class="row align-items-center full-screen md-h-auto">
                            <div class="col-lg-6 cover-background overflow-visible h-100 md-h-500px" style="background-image: url({{ asset('guest/images/cafe-2.jpg') }})">
                                <div class="position-absolute right-minus-130px top-60px md-top-auto md-bottom-minus-50px fs-170 lg-fs-120 lg-right-minus-80px md-right-0px md-left-0px text-center text-lg-start alt-font z-index-9 fw-600 text-dark-gray opacity-3">01</div>
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
                                    <span class="text-gradient-base-color fs-15 alt-font fw-700 ls-minus-4px text-uppercase d-inline-block align-middle">Catering and Event Planning</span>
                                </div>
                                <h2 class="text-dark-gray alt-font fw-600 ls-minus-4px mb-25px">Best Catering Services Wellington</h2>
                                <p class="w-95 md-w-100 mb-35px">At relish we believe great catering is not only about good food. It is about the quality of service that makes your events and functions the talk of the town. We provide the best catering services in Wellington for all your parties, so you do not have to worry about food at the events.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- stack item 02 -->
            <div class="stack-item stack-item-02 bg-linen md-pt-0 md-pb-0">
                <div class="stack-item-wrapper">
                    <div class="container-fluid">
                        <div class="row align-items-center full-screen md-h-auto">
                            <div class="col-lg-6 cover-background overflow-visible h-100 md-h-500px" style="background-image: url({{ asset('guest/images/cafe-6.jpg') }})">
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
                                    <span class="text-gradient-base-color fs-15 alt-font fw-700 ls-minus-4px text-uppercase d-inline-block align-middle">Office Catering and Event Planning</span>
                                </div>
                                <h2 class="text-dark-gray alt-font fw-600 ls-minus-4px mb-25px">Catering for Office Events & Private Parties</h2>
                                <p class="w-95 md-w-100 mb-35px">Our delicious menu will leave your guests astonished. We offer a variety of mouth-watering dishes which will keep your people happy. That's how we provide the best catering in Wellington CBD.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- stack item 03 -->
            <div class="stack-item stack-item-03 bg-white lg-pt-8 md-pb-0 md-pt-0">
                <div class="stack-item-wrapper">
                    <div class="container-fluid">
                        <div class="row align-items-center full-screen md-h-auto">
                            <div class="col-lg-6 cover-background overflow-visible h-100 md-h-500px" style="background-image:url({{ asset('guest/images/cafe-3.jpg') }})">
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
                                    <span class="text-gradient-base-color fs-15 alt-font fw-700 ls-minus-4px text-uppercase d-inline-block align-middle">Catering and Event Solutions</span>
                                </div>
                                <h2 class="text-dark-gray alt-font fw-600 ls-minus-4px mb-25px">Your Ultimate Catering Partner</h2>
                                <p class="w-95 md-w-100 mb-35px">You will have the freedom of not caring about the food. We make sure that all the dishes are made with superior quality materials. We aren't any normal caterers; we are professionals who understand the unique requirements of every party. That is why we are known for the best caterers in Wellington.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('page_level_script')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 10,
        spaceBetween: 30,
        freeMode: true,
        breakpoints: {
            240: { slidesPerView: 3, spaceBetween: 10 },
            640: { slidesPerView: 3, spaceBetween: 20 },
            768: { slidesPerView: 4, spaceBetween: 30 },
            1024: { slidesPerView: 10, spaceBetween: 40 },
        },
    });
</script>

<script>
    var swiper = new Swiper(".mySwiperr", {
        slidesPerView: 5,
        spaceBetween: 30,
        freeMode: true,
        breakpoints: {
            240: { slidesPerView: 2, spaceBetween: 10 },
            640: { slidesPerView: 3, spaceBetween: 20 },
            768: { slidesPerView: 5, spaceBetween: 30 },
            1024: { slidesPerView: 5, spaceBetween: 40 },
        },
    });

    $(document).ready(function() {
        loadCart();
        updateCartBadge();

        $('.add-to-cart-btn').click(function() {
            var itemId   = $(this).data('id');
            var itemName = $(this).data('item');
            var menuType = $(this).data('type');
            var price    = $(this).data('price');
            var image    = $(this).data('image');

            var cart = JSON.parse(localStorage.getItem('cart')) || [];
            if (menuType === 'catering' && cart.some(item => item.menuType === 'menu')) {
                toastr.error("Menu items are already in the cart. No catering items can be added.");
                return;
            } else if (menuType === 'menu' && cart.some(item => item.menuType === 'catering')) {
                toastr.error("Catering items are already in the cart. No menu items can be added.");
                return;
            }

            $('#add-to-cart-btn-' + itemId).hide();
            $('#quantity-container-' + itemId).show();
            addToCart(itemId, itemName, menuType, price, image);
            updateCartBadge();
        });

        $('.increase-btn').click(function() {
            var itemId = $(this).data('id');
            var currentQuantity = parseInt($('#quantity-value-' + itemId).text());
            currentQuantity++;
            $('#quantity-value-' + itemId).text(currentQuantity);
            updateCart(itemId, currentQuantity);
            updateCartBadge();
        });

        $('.decrease-btn').click(function() {
            var itemId = $(this).data('id');
            var currentQuantity = parseInt($('#quantity-value-' + itemId).text());
            if (currentQuantity > 1) {
                currentQuantity--;
                $('#quantity-value-' + itemId).text(currentQuantity);
                updateCart(itemId, currentQuantity);
            } else {
                $('#quantity-container-' + itemId).hide();
                $('#add-to-cart-btn-' + itemId).show();
                removeFromCart(itemId);
            }
            updateCartBadge();
        });

        function addToCart(itemId, itemName, menuType, price, image) {
            var cart = JSON.parse(localStorage.getItem('cart')) || [];
            var existingItem = cart.find(item => item.id === itemId);
            if (existingItem) {
                existingItem.quantity = 1;
            } else {
                cart.push({ id: itemId, name: itemName, quantity: 1, menuType: menuType, price: price, image: image });
            }
            localStorage.setItem('cart', JSON.stringify(cart));
        }

        function updateCart(itemId, quantity) {
            var cart = JSON.parse(localStorage.getItem('cart')) || [];
            var item = cart.find(item => item.id === itemId);
            if (item) { item.quantity = quantity; localStorage.setItem('cart', JSON.stringify(cart)); }
        }

        function removeFromCart(itemId) {
            var cart = JSON.parse(localStorage.getItem('cart')) || [];
            var index = cart.findIndex(item => item.id === itemId);
            if (index !== -1) { cart.splice(index, 1); localStorage.setItem('cart', JSON.stringify(cart)); }
        }

        function updateCartBadge() {
            var cart = JSON.parse(localStorage.getItem('cart')) || [];
            var totalQuantity = cart.reduce((sum, item) => sum + item.quantity, 0);
            if (totalQuantity > 0) {
                $('.cart-item-badge .badge').text(totalQuantity).show();
                $('#mobile-cart-count').text(totalQuantity).show();
            } else {
                $('.cart-item-badge .badge').hide();
                $('#mobile-cart-count').hide();
            }
        }

        function loadCart() {
            var cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart.forEach(function(item) {
                $('#add-to-cart-btn-' + item.id).hide();
                $('#quantity-container-' + item.id).show();
                $('#quantity-value-' + item.id).text(item.quantity);
            });
        }
    });
</script>
@endsection