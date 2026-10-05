<!DOCTYPE html>
<html lang="en">

<head>
 
    <style>
        label,
        output {
            display: flex !important;
        }

        .ls-0 {
            letter-spacing: 0.9px !important;
        }

        .lain-border {
            padding: 10px 15px;
            position: relative;
        }

        .lh-232 {
            line-height: 31px !important;
        }

        .lain-border::before {
            content: "";
            position: absolute;
            inset: 0;
            border: 2px solid transparent;
            background-image:
                repeating-linear-gradient(to right, gray 0, gray 2px, transparent 2px, transparent 4px),
                repeating-linear-gradient(to bottom, gray 0, gray 2px, transparent 2px, transparent 4px),
                repeating-linear-gradient(to right, gray 0, gray 2px, transparent 2px, transparent 4px),
                repeating-linear-gradient(to bottom, gray 0, gray 2px, transparent 2px, transparent 4px);
            background-position: top, right, bottom, left;
            background-repeat: repeat-x, repeat-y, repeat-x, repeat-y;
            background-size: 100% 2px, 2px 100%, 100% 2px, 2px 100%;
            pointer-events: none;
        }

        .lain-control {
            border: 1px solid #bdbbbb !important;
        }

        .fs-32,
        .fs-40 {
            line-height: 32px;
        }
    </style>
    
    
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-B6VBBQBCWQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
 
  gtag('config', 'G-B6VBBQBCWQ');
</script>
    <!-- End Google Tag Manager -->
    <meta name="google-site-verification" content="iHxfamIKb99b71WvxtLcfpAhTs58kcUK-_q5MnI2Tec" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Favicon -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    @if (Request::is('/'))
    <title>Wellington Best Restaurant, Cafe & Caterers | Relish For Food</title>
    <meta name="description"
        content="Best Restaurant, Cafe & Caterers by Relish For food offers the quality catering services and delicious food, perfect for any special occasion">
    <link rel="canonical" href="{{ url()->current() }}">
    @elseif(Request::is('menu'))
    <title>Our Cafe Menu - Relish For Food</title>
    <meta name="description"
        content="Relish delicious smoked salmon bagels, hot cakes & more at Relish For Food in Wellington! View our full menu online & order now.">
    <link rel="canonical" href="{{asset('/menu')}}">
    @elseif(Request::is('about'))
    <title>About Us | Relish For Food </title>
    <meta name="description"
        content="Relish For Food Provides tasty food and top-notch service for your events. Cafe & Catering with 44+ years of experience.">
    <link rel="canonical" href="{{asset('/about')}}">
    
    @elseif(Request::is('restaurant'))
    <title>Best Restaurant in Wellington CBD - Relish For Food</title>
    <meta name="description"
        content="Relish For Food the best restaurant in Wellington CBD offering fresh local flavours, warm ambiance, and exceptional dining experiences perfect for any occasion.">
    <link rel="canonical" href="{{asset('/restaurant')}}">
    
    
    @elseif(Request::is('contact'))
    <title>Contact Us | Relish For Food
    </title>
    <meta name="description"
        content="Need to get in touch? You should contact Relish For Food for any further information on our restaurant, cafe & catering services.">
    <link rel="canonical" href="{{asset('/contact')}}">
    @elseif(Request::is('gallery'))
    <title>Gallery | Relish For Food </title>
    <meta name="description"
        content="Check our Colorful Meals & Menu display which highlights By Relish For Food. Finding inspiration for your next visit is only one click away!">
    <link rel="canonical" href="{{asset('/gallery')}}">
    @elseif(Request::is('blog'))
    <title>Relish For Food Blog | Delicious Recipes & Food Inspiration </title>
    <meta name="description"
        content="The Relish For Food blog publishes affordably delicious recipes, useful cooking hints, and food culture. Try different & new tastes from different nations in the World.">
    <link rel="canonical" href="{{asset('/blog')}}">
    @elseif(Request::is('catering-menu'))
    <title>Best Catering Services Wellington | Our Delicious Menus | Relish For Food </title>
    <meta name="description"
        content="Best Catering Services Wellington for any occasion. Relax and enjoy tasty meals with a focus on seasonal produce. Order online or call us today!">
    <link rel="canonical" href="{{asset('/catering-menu')}}">
    @elseif(Request::is('order-now'))
    <title>Order Now - Relish For Food | Online Catering Company</title>
    <meta name="description"
        content="Craving for delicious food? Order now from Relish For Food! And satisfy your hunger with Relish For Food. Enjoy hassle-free online catering, meals, and delivery. Order now!">
    <link rel="canonical" href="{{asset('/order-now')}}">
    @elseif(Request::is('book-catering-service'))
    <title>Book Expert Catering Service in Wellington | Relish For Food</title>
    <meta name="description"
        content="Book your best catering service partner in Wellington and elevate your events with our exceptional catering services. From small gatherings to grand celebrations, we deliver impeccable service">
    <link rel="canonical" href="{{asset('/book-catering-service')}}">
    @elseif(Request::is('view-cart'))
    <title>View Cart Online | Relish for Food Wellington</title>
    <meta name="description"
        content="Check selected items, update quantities, and prepare your food order before checkout with Relish for Food online ordering in Wellington.">
    <link rel="canonical" href="{{asset('/view-cart')}}">
    @elseif(Request::is('checkout'))
    <title>Checkout Your Order | Relish for Food Wellington</title>
    <meta name="description"
        content="Complete your food order easily with Relish for Food. Review billing details, delivery notes, and confirm your Wellington catering or restaurant order today.">
    <link rel="canonical" href="{{asset('/checkout')}}">
    
    @elseif(Request::is('terms-condition'))
    <title>Terms & Conditions | Relish for Food</title>
    <meta name="description"
        content="View Relish for Food terms for catering orders, payments, deposits, delivery charges, cancellations, and booking conditions in Wellington.">
    <link rel="canonical" href="{{asset('/terms-condition')}}">
    @elseif(Request::is('privacy'))
    <title>Privacy Policy | Relish for Food</title>
    <meta name="description"
        content="Read how Relish for Food collects, uses, and protects your personal information when you order food, book catering, or browse our Wellington website.">
    <link rel="canonical" href="{{asset('/privacy')}}">
   @else
    @isset($pageData)
    {!! $pageData->meta_og!!}
    @endisset
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" , content="@yield('description')">
    <meta name="keywords" , content="@yield('keywords')">
    @endif
    <link rel="shortcut icon" href="{{ asset('guest/images/relish-favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('guest/images/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('guest/images/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('guest/images/apple-touch-icon-114x114.png') }}">
    <link rel="icon" href="" alt="" type="image/x-icon">
    <!------------Css------------------->
    @include('layouts.guest.css')
    <!------------End Css------------------->

    <!------------Page level Style or Css------------------->
    @yield('page_level_style')
   
   @php
// current page detect
 $currentPage = request()->path() == '/' ? '/' : '/'.request()->path();
 // fetch schemas for this page
$schemas = \App\Models\Schema::where('status',1)
    ->whereHas('pages', function($q) use ($currentPage){
        $q->where('page', $currentPage);
    })
    ->get();
@endphp
@if($schemas->count())
@foreach($schemas as $schema)
@php
$items = json_decode($schema->json_data, true);
@endphp

@if(is_array($items))
@foreach($items as $item)
<script type="application/ld+json">
{!! json_encode($item, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endforeach
@endif

@endforeach
@endif
   
   
    @yield('faq_schema')
    <!------------End Page level Style or Css------------------->
</head>

<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-style="modern" data-mobile-nav-bg-color="#383632"
    class="custom-cursor">

    <div class="cursor-page-inner">
        <div class="circle-cursor circle-cursor-inner"></div>
        <div class="circle-cursor circle-cursor-outer"></div>
    </div>



    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MN6XD464"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!------------Header------------------>

    @if (Route::currentRouteName() == 'homepage')
    @include('layouts.guest.headerhome')
    @elseif(Route::currentRouteName() == 'thankyou')
    @include('layouts.guest.headerhome')
    @else
    @include('layouts.guest.header')
    @endif
    <!------------End Header------------------->
    <main>
        <!------------Body Content------------------->
        @yield('content')
        <!------------End Body Content------------------->
    </main>

    <!-- Coupon Modal -->




    <!-- <div id="subscribe-popup" class="mfp-hide subscribe-popup">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-md-10 bg-white">
                    <div class="row position-relative box-shadow-quadruple-large">
                        <div class="col-lg-6 cover-background md-h-400px xs-h-300px" style="background-image: url('{{ asset('images/demo-restaurant-popup.jpg') }}');"></div>
                        <div class="col-lg-6 newsletter-popup p-5 pt-7 pb-10 lg-p-5 md-p-6 xs-p-8 position-relative">


                            <span class="fs-14 fw-600 text-red text-uppercase mb-2 d-block">Relish Café Special Offer!</span>

                            <h2 class="d-inline-block alt-font text-dark-gray fs-32 mb-3 ls-0 lh-232">
                                Planning a Corporate Event or Function?
                            </h2>

                            <h4 class="d-inline-block alt-font text-dark-gray fs-18 mb-2 ls-0">
                                Get <strong style="color: red;font-size: 36px;">10% OFF</strong> on Catering on your invoice
                            </h4>

                            <h4 class="d-inline-block alt-font text-dark-gray fs-20 mb-3 ls-0 lain-border">
                                Use Code: <strong class="text-red">RELISHFAM</strong>
                            </h4>

                            <div class="d-inline-block w-100 newsletter-style-05 position-relative mb-3">
                                <form action="{{ asset('email-templates/subscribe-newsletter.php') }}" method="post">
                                    <input class="input-medium w-100 border-radius-4px form-control lain-control required mb-3"
                                        type="email" name="email" placeholder="Enter your email address">

                                    <input type="hidden" name="redirect" value="">

                                    <button type="submit" aria-label="submit"
                                        class="btn btn-medium btn-round-edge btn-dark-gray btn-box-shadow w-100 submit">
                                        Subscribe now!
                                    </button>

                                    <div class="form-results border-radius-4px mt-2 lh-normal pt-2 pb-2 px-3 fs-16 w-100 text-center position-absolute z-index-1 d-none"></div>
                                </form>
                            </div>

                            <label for="newsletter-off d-flex" class="fs-14">
                                <input class="w-auto me-2 position-relative top-1px p-0"
                                    type="checkbox" id="newsletter-off" name="newsletter-off">
                                Don't show this popup again
                            </label>
                        </div>


                        <button title="Close (Esc)" type="button" class="mfp-close text-dark-gray"></button>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    @if (Route::currentRouteName() == 'thankyou')
    @else
    @include('layouts.guest.footer')
    @endif
    <!------------Footer------------------->

    <!------------EndFooter------------------->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
        </a>
    </div>

    <!------------Scripts------------------->
    @include('layouts.guest.scripts')
    <!------------EndScripts------------------->

    <script>
        // $(document).ready(function() {
        //     // Helper: check if 1 hour has passed since last close
        //     function shouldShowModal() {
        //         var lastClosed = localStorage.getItem('subscribeModalClosedAt');
        //         if (!lastClosed) return true;
        //         var oneHour = 60 * 60 * 1000;
        //         return (Date.now() - parseInt(lastClosed, 10)) > oneHour;
        //     }

        //     // Open modal if allowed
        //     if (shouldShowModal()) {
        //         $.magnificPopup.open({
        //             items: {
        //                 src: '#subscribe-popup',
        //                 type: 'inline'
        //             },
        //             closeOnBgClick: true,
        //             enableEscapeKey: true,
        //             closeBtnInside: true,
        //             callbacks: {
        //                 close: function() {
        //                     // Save close time
        //                     localStorage.setItem('subscribeModalClosedAt', Date.now().toString());
        //                 }
        //             }
        //         });
        //     }

        //     // Optional: If you have a "Don't show again" checkbox
        //     $('#newsletter-off').on('change', function() {
        //         if (this.checked) {
        //             // Set a far future time (e.g., 10 years)
        //             localStorage.setItem('subscribeModalClosedAt', Date.now() + 10 * 365 * 24 * 60 * 60 * 1000);
        //         }
        //     });
        // });
    </script>
</body>

</html>


<!------------Page level Scripts------------------->
@yield('page_level_script')
<!------------End Page level Scripts------------------->