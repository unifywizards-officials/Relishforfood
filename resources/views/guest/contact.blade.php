@extends('layouts.guest.master')

@section('page_level_style')
    <style>
        .invalid-feedback {
            width: 100%;
            font-size: .875em;
            color: #ff0707 !important;
            margin: 0;
            position: relative;
            top: -13px;
            font-size: 11px;
        }
        .text-special {
            width: 100%;
            font-size: .875em;
            color: #ff0707 !important;
            margin: 0;
            position: relative;
            top: -3px;
            font-size: 11px;
        }
          
    </style>
    
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "url": "https://relishforfood.co.nz/contact",
  "name": "Contact Us",
  "isPartOf": {
    "@type": "WebSite",
    "url": "https://relishforfood.co.nz/"
   }
},
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Relish For Food",
  "url": "https://relishforfood.co.nz/"
},
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Home",
    "item": "https://relishforfood.co.nz"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "Contact",
    "item": "https://relishforfood.co.nz/contact"  
  }]
}
  ]
}
</script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection

@section('content')
    <section class="ipad-top-space-margin page-title-big-typography cover-background p-0 md-background-position-left-center"
        style="background-image: url(guest/images/demo-restaurant-about-title-bg.jpg)">
        <div class="container">
            <div class="row align-items-center justify-content-center small-screen">
                <div class="col-lg-6 col-md-8 position-relative text-center page-title-extra-large"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h1 class="alt-font text-dark-gray text-uppercase ls-minus-1px mb-0">Contact us</h1>
                    <h2 class="m-auto text-red fw-600 text-uppercase mb-0"><span
                            class="h-2px w-5px bg-red d-inline-block align-middle me-5px"></span>Delicious food<span
                            class="h-2px w-5px bg-red d-inline-block align-middle ms-5px"></span></h2>
                </div>
            </div>
        </div>
    </section>


    <section class="pt-0">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-12 pe-17 background-position-right-top background-no-repeat md-pe-15px"
                        style="background-image: url(guest/images/demo-restaurant-contact-01.jpg)">
                        <div id="map" class="map-responsive">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2998.14661759547!2d174.77521869999998!3d-41.283913399999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d38afd5249d5c49%3A0x2f2355f6794406ea!2sRelish%20For%20Food!5e0!3m2!1sen!2sin!4v1721992769868!5m2!1sen!2sin"
                                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-end justify-content-center">
                <div class="col-xl-7 col-lg-6 align-self-start">
                    <span
                        class="fs-140 lg-fs-100 xs-fs-90 fw-700 text-very-lightt-gray ls-minus-8px lg-ls-minus-5px xs-ls-minus-4px md-w-100 d-block text-center text-lg-start"
                        id="write-here">Write
                        here</span>
                </div>
                <div
                    class="col-xl-5 col-lg-6 col-md-12 contact-form-style-03 position-relative overlap-section-one-fourth md-mt-0">
                    <div
                        class="bg-very-light-gray p-14 position-relative overflow-hidden mt-50px md-mt-25px sm-mt-15px lg-p-10">
                        <i
                            class="bi bi-chat-text fs-140 text-base-color opacity-1 position-absolute top-minus-35px right-minus-20px"></i>
                        <h2 class="alt-font text-white mb-15px">How we can help your food?</h2>
                        <form name="contactForm" class="msform" id="msform" enctype="multipart/form-data">
                            <div class="position-relative form-group mb-10px">
                                <span class="form-icon text-medium-gray"><i class="bi bi-emoji-smile"></i></span>
                                <input
                                    class="ps-0 border-radius-0px bg-transparent border-color-transparent-dark-very-light form-control"
                                    type="text" name="name" placeholder="Your name*">

                            </div>
                            <div id="name" class="invalid-feedback"></div>

                            <div class="position-relative form-group mb-10px">
                                <span class="form-icon medium-gray"><i class="bi bi-envelope"></i></span>
                                <input
                                    class="ps-0 border-radius-0px bg-transparent border-color-transparent-dark-very-light form-control"
                                    type="email" name="email" placeholder="Your email address*">

                            </div>
                            <div id="email" class="invalid-feedback"></div>

                            <div class="position-relative form-group form-textarea mt-10px mb-0">
                                <textarea class="ps-0 border-radius-0px bg-transparent border-color-transparent-dark-very-light form-control"
                                    name="message" placeholder="Your message" rows="3"></textarea>

                                <span class="form-icon medium-gray"><i class="bi bi-chat-square-dots"></i></span>


                                <div class="form-results mt-20px d-none"></div>
                            </div>
                            <div id="message" class="invalid-feedback text-special"></div>

                            <button class="btn btn-black btn-medium btn-switch-text btn-round-edge btn-box-shadow"
                                type="submit" id="submitquote">
                                <span>
                                    <span class="btn-double-text" data-text="Send a message">Send a message</span>
                                </span>
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 md-mb-40px xs-mb-30px text-center text-md-start"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <span class="d-block fs-15 fw-600 text-red text-uppercase mb-15px">Need a private space?</span>
                    <h3 class="alt-font fw-400 text-dark-gray mb-0 w-85 sm-w-100">Reserve a Table? <span
                            class="text-decoration-underline">Let's talk with us.</span></h3>
                </div>
                <div class="col-lg-8 text-center text-md-start"
                    data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateX&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <div class="row row-cols-1 row-cols-md-3 row-cols-sm-2 justify-content-center">
                        <div class="col sm-mb-30px">
                            <span class="d-block fs-26 alt-font text-dark-gray fw-400 text-uppercase">Write Us</span>
                            <div>
                                <a href="mailto:relishforfood@gmail.com">
                                    <span class="__cf_email__">relishforfood@gmail.com</span>
                                </a>
                            </div>
                        </div>
                        <div class="col sm-mb-30px">
                            <span class="d-block fs-26 alt-font text-dark-gray fw-400 text-uppercase">Follow Us</span>
                            <div class="d-lg-block"><a href="https://www.instagram.com/relishforfood/"><i class="instagram fa-brands fa-instagram w-25px text-dark-gray"></i>relishforfood</a>

                            </div>
                            <div class="d-lg-block">
                                <!-- <a href="https://www.instagram.com/relishforfood/"><i class="instagram fa-brands fa-instagram w-25px text-dark-gray"></i>relishforfood</a> -->
                            </div>
                        </div>
                        <div class="col">
                            <span class="d-block fs-26 alt-font text-dark-gray fw-400 text-uppercase">Call Us</span>
                            <div>
                                <a href="tel:+64212512000">(64) 21 251 2000</a>

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
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {
            $('#msform').on('submit', function(event) {
                event.preventDefault(); // Prevent default form submission
                var formData = new FormData(this); // Create FormData object from form
                $.ajax({
                    url: '{{ route('submit-contact') }}', // Specify your Laravel route for form submission
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        // Handle success response
                        $('#msform')[0].reset();
                        $('.invalid-feedback').text('');
                        $('#msform .is-invalid').removeClass('is-invalid');
                        Swal.fire({
                            title: 'Thanks!',
                            text: 'Thanks, We will get back to you soon!',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        });
                    },
                    error: function(xhr, status, error) {
                        // Handle error response
                        var errors = xhr.responseJSON.errors;
                        $('.invalid-feedback').removeClass('d-block').addClass('d-none').text(
                            '');
                        $('#msform .is-invalid').removeClass('is-invalid');

                        $.each(errors, function(key, value) {
                            var $element = $('#' + key + '.invalid-feedback');

                            if ($element.length > 0) {
                                $('[name="' + key + '"]').addClass('is-invalid');
                                $element.text(value[0]);
                                $element.removeClass('d-none').addClass('d-block');
                            }
                        });
                    }
                });
            });
        });
    </script>
@endsection
