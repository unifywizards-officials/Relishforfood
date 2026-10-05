@extends('layouts.guest.master')

@section('page_level_style')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
{
  "@context": "https://schema.org",
  "@type": "AboutPage",
  "url": "https://relishforfood.co.nz/about",
  "name": "About Relish For Food",
  "description": "Relish For Food Provides tasty food and top-notch service for your events. Cafe & Catering with 44+ years of experience."
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
                <h1 class="alt-font text-dark-gray text-uppercase ls-minus-1px mb-0">About us</h1>
                <h2 class="m-auto text-red fw-600 text-uppercase mb-0"><span
                        class="h-2px w-5px bg-red d-inline-block align-middle me-5px"></span>Luxury restaurant<span
                        class="h-2px w-5px bg-red d-inline-block align-middle ms-5px"></span></h2>
            </div>
        </div>
    </div>
</section>


<section class="py-0 sm-pb-50px">
    <div class="container position-relative">
        <div class="row">
            <div class="col-10 col-md-3 d-none d-md-block"
                data-anime="{ &quot;translateY&quot;: [-15, 0], &quot;perspective&quot;: [1200,1200], &quot;scale&quot;: [0.8, 1], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 800, &quot;delay&quot;: 200, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <img src="{{ asset('guest/images/demo-restaurant-about-01.jpg') }}" alt=""
                    class="animation-float">
            </div>
            <div class="col-md-9 position-relative">
                <div class="overflow-hidden position-relative h-550px lg-h-500px md-h-auto">
                    <div class="w-100"
                        data-anime="{ &quot;effect&quot;: &quot;slide&quot;, &quot;direction&quot;: &quot;tb&quot;, &quot;color&quot;: &quot;#ffffff&quot;, &quot;duration&quot;: 700, &quot;delay&quot;: 0 }">
                        <img src="{{ asset('guest/images/demo-restaurant-about-02.jpg') }}" alt=""
                            class="w-100 liquid-parallax" data-parallax-liquid="true" data-parallax-position="top"
                            data-parallax-scale="1.05">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="bg-very-light-gray">
    <div class="container">
        <div class="row align-items-end overlap-section">
            <div class="col-lg-6 col-md-5 pe-60px md-pe-30px sm-pe-15px sm-mb-30px position-relative">
                <div class="overflow-hidden position-relative h-550px sm-h-auto">
                    <div class="w-100"
                        data-anime="{ &quot;effect&quot;: &quot;slide&quot;, &quot;direction&quot;: &quot;tb&quot;, &quot;color&quot;: &quot;#ffffff&quot;, &quot;duration&quot;: 700, &quot;delay&quot;: 0 }">
                        <img src="{{ asset('guest/images/demo-restaurant-about-03.jpg') }}" alt=""
                            class="w-100 liquid-parallax" data-parallax-liquid="true" data-parallax-position="top"
                            data-parallax-scale="1.05">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-7 pb-50px md-pb-0">
                <div class="blockquote-style-01">

                    <i
                        class="bi bi-chat-quote float-start me-30px xs-me-20px text-base-color icon-extra-double-large xs-icon-double-large"></i>
                    <blockquote class="mb-0 d-table last-paragraph-no-margin">
                        <p class="fs-22 xs-fs-20 text-white ls-minus-05px w-80 lg-w-100 mb-15px">The food you
                            eat can be either the safest and most powerful medicine or the <span
                                class="fw-600 text-decoration-line-bottom">slowest form of poison.</span></p>
                        <div class="fw-500 text-white mt-15px">- Alexander harvard</div>
                    </blockquote>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="bg-very-light-gray position-relative overflow-hidden z-index-0 p-0">
    <div class="position-absolute left-minus-50px xl-left-minus-80px mt-12 z-index-minus-1 d-none d-xl-inline-block"
        data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)">
        <img src="{{ asset('guest/images/demo-restaurant-about-04.jpg') }}" alt="">
    </div>
    <div class="position-absolute right-minus-30px lg-right-minus-70px top-20px d-none d-lg-inline-block"
        data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
        <img src="{{ asset('guest/images/demo-restaurant-about-11.png') }}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 md-mb-50px sm-mb-30px"
                data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <span class="fs-15 fw-600 text-red text-uppercase mb-25px d-block"><span
                        class="w-70px xs-w-50px h-2px bg-red d-inline-block align-middle me-15px"></span>About restaurant</span>
                <h2 class="alt-font text-uppercase text-white mb-20px w-90 lg-w-100">Relish For Food</h2>
                <p class="w-80 mb-35px lg-w-100">Is the corporate/functions catering arm of the Wellington CBD’s
                    iconic RELISH CAFE. It follows the Wellington City Council’s “Food & Hygiene Plan”. Under this,
                    RELISH keeps a register and enters data of good practices in the food industry, most of which
                    have significant energy saving measures.</p>
                <div
                    class="d-flex align-items-center bg-white w-300px box-shadow-small border-radius-4px p-30px pt-20px pb-15px mb-25px">
                    <div class="col-auto text-center">
                        <span class="fs-70 text-dark-gray alt-font mb-0">4.2</span>
                    </div>
                    <div class="col border-start border-color-transparent-dark-very-light ms-20px ps-20px">
                        <div class="review-star-icon fs-19 lh-22">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <span class="fs-15 d-block text-dark-gray fw-500">Review by Google</span>
                    </div>
                </div>
                <div>
                    <span class="text-white fw-500"><i  class="bi bi-heart-fill text-red me-5px mt-minus-2px align-middle"></i>Authentic cultural experience.</span>
                </div>
            </div>
            <div class="col-lg-7 text-center text-lg-start"
                data-anime="{ &quot;translateX&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 200, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <img src="{{ asset('guest/images/demo-restaurant-about-05.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>


<section class="overlap-height">
    <div class="container overlap-gap-section">
        <div class="row justify-content-center mb-2">
            <div class="col-lg-7 text-center"
                data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <span class="fs-15 fw-600 text-red text-uppercase mb-10px d-block"><span
                        class="w-5px h-2px bg-red d-inline-block align-middle me-5px"></span>Exquisite Dining
                    Experiences<span class="w-5px h-2px bg-red d-inline-block align-middle ms-5px"></span></span>
                <h2 class="alt-font text-dark-gray">Relish in Quality, Sustainability, and Freshness</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center"
            data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">

            <div class="col">
                <div class="services-box-style-01 hover-box md-mb-30px">
                    <div class="position-relative box-image border-radius-6px">
                        <img src="{{ asset('guest/images/demo-restaurant-about-06.jpg') }}" alt="">
                    </div>
                    <div class="p-10 sm-p-8 bg-white last-paragraph-no-margin text-center">
                        <span class="d-inline-block fs-26 alt-font text-dark-gray">Quality and Customer Satisfaction</span>
                        <p>Relish is renowned for premium ingredients sourced from niche suppliers, ensuring
                            top-notch quality and satisfaction, a commitment upheld since the 1980s, making it a
                            trusted name in the Wellington CBD.</p>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="services-box-style-01 hover-box md-mb-30px">
                    <div class="position-relative box-image border-radius-6px">
                        <img src="{{ asset('guest/images/demo-restaurant-about-07.jpg') }}" alt="">
                    </div>
                    <div class="p-10 sm-p-8 bg-white last-paragraph-no-margin text-center">
                        <span class="d-inline-block fs-26 alt-font text-dark-gray">Sustainable Hygiene Practices</span>
                        <p>Relish follows stringent hygiene standards set by Wellington City Council. Orders are
                            often delivered without carbon footprints, highlighting our eco-friendly commitment
                            through hand-deliveries by dedicated staff.</p>
                    </div>
                </div>
            </div>


            <div class="col">
                <div class="services-box-style-01 hover-box">
                    <div class="position-relative box-image border-radius-6px">
                        <img src="{{ asset('guest/images/demo-restaurant-about-08.jpg') }}" alt="">
                    </div>
                    <div class="p-10 sm-p-8 bg-white last-paragraph-no-margin text-center">
                        <span class="d-inline-block fs-26 alt-font text-dark-gray">Customized and Fresh Catering</span>
                        <p>Relish offers bespoke catering solutions, ensuring freshness with just-in-time
                            preparation. Our strategic location allows for swift delivery of hot, ready-to-eat food,
                            catering to urgent and specific customer needs.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="bg-very-light-gray">
    <div class="container-fluid overlap-section">
        <div class="row position-relative mb-6"
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
    <div class="container">
        <div class="row align-items-center mb-4">
            <div class="col-lg-6 md-mb-50px sm-mb-30px"
                data-anime="{ &quot;translateX&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <img src="{{ asset('guest/images/demo-restaurant-about-10.jpg') }}" alt=""
                    class="border-radius-6px w-100">
            </div>
            <div class="col-lg-5 offset-lg-1"
                data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 200, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                <span class="fs-15 fw-600 text-red text-uppercase mb-25px d-block"><span
                        class="w-70px xs-w-50px h-2px bg-red d-inline-block align-middle me-15px"></span>since 1988
                    restaurant</span>
                <h2 class="alt-font text-white mb-20px">Exceptional Dining, Gourmet Delights</h2>
                <p class="w-90 lg-w-100">Experience culinary excellence with Relish. Our dedication to using premium
                    ingredients and innovative techniques guarantees every meal is a gourmet delight, crafted to
                    perfection for an unforgettable dining experience.</p>
                <div class="d-inline-block mt-10px xs-mt-0">
                    <a href="{{ route('menu') }}"
                        class="btn btn-black btn-large btn-switch-text btn-round-edge btn-box-shadow me-30px xs-me-15px xs-mb-10px">
                        <span>
                            <span class="btn-double-text" data-text="Explore Now">Explore Now</span>
                        </span>
                    </a>
                    <div class="alt-font fs-24 d-inline-block align-middle lh-0 text-white xs-mb-10px"><i
                            class="feather icon-feather-phone-outgoing me-10px text-base-color"></i><a
                            href="tel:+64212512000">+64 21-251-2000</a></div>
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
                <div class="d-inline-block fs-18 text-dark-gray fs-18 align-middle fw-500"><span
                        class="text-decoration-line-bottom-medium fw-600">25,00+ happy food lovers</span> visited
                    our authentic restaurant.</div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10"
                    data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <div class="swiper slider-custom-image swiper-pagination-bottom magic-cursor testimonials-style-03"
                        data-slider-options="{ &quot;loop&quot;: true, &quot;pagination&quot;: { &quot;el&quot;: &quot;.slider-custom-image-pagination&quot;, &quot;type&quot;: &quot;bullets&quot;, &quot;clickable&quot;: true }, &quot;keyboard&quot;: { &quot;enabled&quot;: true, &quot;onlyInViewport&quot;: true }, &quot;navigation&quot;: { &quot;nextEl&quot;: &quot;.swiper-button-next-nav&quot;, &quot;prevEl&quot;: &quot;.swiper-button-previous-nav&quot;, &quot;effect&quot;: &quot;fade&quot; } }"
                        data-thumbs="[&quot;guest/images/avtar-07.jpg&quot;,&quot;guest/images/avtar-19.jpg&quot;,&quot;guest/images/avtar-22.jpg&quot;]">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide" data-bullet-thumb="background-image: url(images/avtar-27.jpg)">
                                <div class="d-flex flex-column">
                                    <div class="mb-28 align-self-center text-center w-100">
                                        <img src="{{ asset('guest/images/demo-restaurant-home-quotes-icon.jpg') }}"
                                            class="mb-30px rounded-circle" alt="User Icon">
                                        <h4 class="alt-font lh-42 text-dark-gray mb-10px">
                                            The pumpkin soup was amazing! Best I’ve had. Keep up the fantastic work.
                                        </h4>
                                        <span class="fs-20 fw-500 text-base-color d-block">Gina</span>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide" data-bullet-thumb="background-image: url(images/avtar-27.jpg)">
                                <div class="d-flex flex-column">
                                    <div class="mb-28 align-self-center text-center w-100">
                                        <img src="{{ asset('guest/images/demo-restaurant-home-quotes-icon.jpg') }}"
                                            class="mb-30px rounded-circle" alt="User Icon">
                                        <h4 class="alt-font lh-42 text-dark-gray mb-10px">
                                            Great feedback from yesterday's lunch. Thanks for delivering such excellent
                                            food!
                                        </h4>
                                        <span class="fs-20 fw-500 text-base-color d-block">Philippa</span>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide" data-bullet-thumb="background-image: url(images/avtar-27.jpg)">
                                <div class="d-flex flex-column">
                                    <div class="mb-28 align-self-center text-center w-100">
                                        <img src="{{ asset('guest/images/demo-restaurant-home-quotes-icon.jpg') }}"
                                            class="mb-30px rounded-circle" alt="User Icon">
                                        <h4 class="alt-font lh-42 text-dark-gray mb-10px">
                                            The lunch looked stunning and was highly praised. Thanks for the wonderful
                                            service!
                                        </h4>
                                        <span class="fs-20 fw-500 text-base-color d-block">Jenna</span>
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
    </div>
</section>



                                      @php
$currentPage = request()->path() == '/' ? '/' : '/'.request()->path();

$schema = \App\Models\Schema::where('status',1)->where('page', $currentPage)->first();

$faqSchema = $schema ? json_decode($schema->json_data, true) : [];
$faqs = $faqSchema['faq']['mainEntity'] ?? [];
@endphp

@if(!empty($faqs) && count($faqs))
<section class="uh-faq__section">

    <div class="uh-faq__bg-pattern"></div>

    <div class="uh-faq__container">

        <!-- Header -->
        <div class="uh-faq__header">
            <h2 class="uh-faq__title">
               Frequently Asked Questions
            </h2>

            <p class="uh-faq__subtitle">
                Get answers to the most common questions about our services.
            </p>
        </div>

        <!-- FAQ Grid -->
        <div class="uh-faq__grid">

            @foreach($faqs as $i => $faq)
            <div class="uh-faq__item">

                <button class="uh-faq__question" aria-expanded="false">
                    <span class="uh-faq__q-text">
                        {{ $faq['name'] ?? '' }}
                    </span>

                    <span class="uh-faq__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M6 9l6 6 6-6"/>
                        </svg>
                    </span>
                </button>

                <div class="uh-faq__answer">
                    <div class="uh-faq__answer-inner">
                        <p>{!! $faq['acceptedAnswer']['text'] ?? '' !!}</p>
                    </div>
                </div>

            </div>
            @endforeach

        </div>

        <!-- CTA (Optional) -->
        <div class="uh-faq__cta">
            <p>Still have questions?</p>
            <a href="/contact" class="uh-faq__cta-btn">Contact Us</a>
        </div>

    </div>
</section>
@endif


<style>
/* =============================================
   UH FAQ SECTION — Unify Holidays
   All classes prefixed: uh-faq__
============================================= */

.uh-faq__section {
  font-family: 'DM Sans', sans-serif;
  position: relative;
  padding: 50px 20px 70px;
  background: #f9f6f1;
  overflow: hidden;
}

.uh-faq__bg-pattern {
  position: absolute;
  inset: 0;
  background-image:
    radial-gradient(circle at 10% 20%, rgba(198, 155, 84, 0.08) 0%, transparent 50%),
    radial-gradient(circle at 90% 80%, rgba(198, 155, 84, 0.07) 0%, transparent 50%);
  pointer-events: none;
}

.uh-faq__container {
  max-width: 820px;
  margin: 0 auto;
  position: relative;
}

/* Header */
.uh-faq__header {
  text-align: center;
  margin-bottom: 52px;
}

.uh-faq__eyebrow {
  display: inline-block;
  font-size: 12px;
  font-weight: 500;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  color: #c69b54;
  margin-bottom: 12px;
  background: rgba(198, 155, 84, 0.12);
  padding: 5px 14px;
  border-radius: 20px;
}

.uh-faq__title {
  font-family: 'Playfair Display', serif;
  font-size: clamp(28px, 5vw, 42px);
  font-weight: 700;
  color: #1a1a2e;
  margin: 0 0 14px;
  line-height: 1.2;
}

.uh-faq__title em {
  font-style: italic;
  color: #c69b54;
}

.uh-faq__subtitle {
  font-size: 15px;
  color: #6b6b7b;
  margin: 0;
  max-width: 480px;
  margin-inline: auto;
  line-height: 1.6;
}

/* FAQ Items */
.uh-faq__grid {
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.uh-faq__item {
  background: #fff;
  border-radius: 14px;
  border: 1.5px solid #ede9e0;
  overflow: hidden;
  transition: border-color 0.25s ease, box-shadow 0.25s ease;
  animation: uh-faq-fadein 0.5s ease both;
}

.uh-faq__item:nth-child(1) { animation-delay: 0.05s; }
.uh-faq__item:nth-child(2) { animation-delay: 0.1s; }
.uh-faq__item:nth-child(3) { animation-delay: 0.15s; }
.uh-faq__item:nth-child(4) { animation-delay: 0.2s; }
.uh-faq__item:nth-child(5) { animation-delay: 0.25s; }
.uh-faq__item:nth-child(6) { animation-delay: 0.3s; }

@keyframes uh-faq-fadein {
  from { opacity: 0; transform: translateY(16px); }
  to   { opacity: 1; transform: translateY(0); }
}

.uh-faq__item:hover {
  border-color: #c69b54;
  box-shadow: 0 4px 20px rgba(198, 155, 84, 0.12);
}

.uh-faq__item.uh-faq--open {
  border-color: #c69b54;
  box-shadow: 0 6px 28px rgba(198, 155, 84, 0.15);
}

/* Question Button */
.uh-faq__question {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 16px;
  padding: 20px 24px;
  background: none;
  border: none;
  cursor: pointer;
  text-align: left;
  transition: background 0.2s ease;
}

.uh-faq__question:hover {
  background: rgba(198, 155, 84, 0.04);
}

.uh-faq__q-text {
  font-family: 'DM Sans', sans-serif;
  font-size: 15.5px;
  font-weight: 500;
  color: #1a1a2e;
  line-height: 1.45;
  transition: color 0.2s ease;
}

.uh-faq--open .uh-faq__q-text {
  color: #c69b54;
}

.uh-faq__icon {
  flex-shrink: 0;
  width: 32px;
  height: 32px;
  border-radius: 50%;
  background: #f3ede0;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: background 0.25s ease, transform 0.35s cubic-bezier(0.34, 1.56, 0.64, 1);
}

.uh-faq__icon svg {
  width: 16px;
  height: 16px;
  color: #c69b54;
  transition: transform 0.35s cubic-bezier(0.34, 1.56, 0.64, 1);
}

.uh-faq--open .uh-faq__icon {
  background: #c69b54;
}

.uh-faq--open .uh-faq__icon svg {
  color: #fff;
  transform: rotate(180deg);
}

/* Answer */
.uh-faq__answer {
  display: grid;
  grid-template-rows: 0fr;
  transition: grid-template-rows 0.38s cubic-bezier(0.4, 0, 0.2, 1);
}

.uh-faq--open .uh-faq__answer {
  grid-template-rows: 1fr;
}

.uh-faq__answer-inner {
  overflow: hidden;
}

.uh-faq__answer-inner p {
  margin: 0;
  padding: 0 24px 22px;
  font-size: 14.5px;
  color: #555566;
  line-height: 1.75;
  border-top: 1px dashed #ede9e0;
  padding-top: 16px;
}

.uh-faq__answer-inner p strong {
  color: #1a1a2e;
  font-weight: 600;
}

/* CTA */
.uh-faq__cta {
  text-align: center;
  margin-top: 48px;
  padding: 32px 28px;
  background: linear-gradient(135deg, #1a1a2e 0%, #2a2a4e 100%);
  border-radius: 16px;
  position: relative;
  overflow: hidden;
}

.uh-faq__cta::before {
  content: '';
  position: absolute;
  top: -40px;
  right: -40px;
  width: 140px;
  height: 140px;
  background: radial-gradient(circle, rgba(198,155,84,0.25) 0%, transparent 70%);
  pointer-events: none;
}

.uh-faq__cta p {
  margin: 0 0 18px;
  color: rgba(255,255,255,0.75);
  font-size: 15px;
}

.uh-faq__cta-btn {
  display: inline-block;
  background: #c69b54;
  color: #fff;
  text-decoration: none;
  padding: 12px 30px;
  border-radius: 30px;
  font-size: 14px;
  font-weight: 500;
  letter-spacing: 0.03em;
  transition: background 0.25s ease, transform 0.2s ease, box-shadow 0.25s ease;
}

.uh-faq__cta-btn:hover {
  background: #b08840;
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(198, 155, 84, 0.4);
}

/* Responsive */
@media (max-width: 600px) {
  .uh-faq__section {
    padding: 60px 16px 50px;
  }

  .uh-faq__question {
    padding: 16px 18px;
  }

  .uh-faq__answer-inner p {
    padding: 14px 18px 18px;
  }
}
</style>

<script>
(function () {
  // Scope everything inside an IIFE to avoid polluting global scope
  var UH_FAQ = {
    init: function () {
      var items = document.querySelectorAll('.uh-faq__item');
      items.forEach(function (item) {
        var btn = item.querySelector('.uh-faq__question');
        btn.addEventListener('click', function () {
          var isOpen = item.classList.contains('uh-faq--open');

          // Close all others
          items.forEach(function (el) {
            el.classList.remove('uh-faq--open');
            el.querySelector('.uh-faq__question').setAttribute('aria-expanded', 'false');
          });

          // Toggle current
          if (!isOpen) {
            item.classList.add('uh-faq--open');
            btn.setAttribute('aria-expanded', 'true');
          }
        });
      });
    }
  };

  // Run after DOM ready
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', UH_FAQ.init);
  } else {
    UH_FAQ.init();
  }
})();
</script>
@endsection

@section('page_level_script')
@endsection