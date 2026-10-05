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

<footer class="pb-0 bg-very-lightt-gray cover-background background-position-center-top sm-background-image-none"
    style="background-image: url('{{ asset('guest/images/demo-restaurant-home-footer-bg.jpg') }}')"
>
    <div class="container">
        <div
            class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center mt-13 md-mt-15 sm-mt-0 mb-5 sm-mb-50px">
            <div class="col icon-with-text-style-03 md-mb-30px">
                <div class="feature-box ps-8 pe-8 lg-ps-0 lg-pe-0 overflow-hidden">
                    <div class="feature-box-icon">
                        <i class="bi bi-chat-square-text d-inline-block icon-medium text-dark-gray mb-15px"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="fw-700 text-dark-gray fs-15 text-uppercase"><a href="https://relishforfood.co.nz/restaurant" style="color: black;"> About restaurant </a></span>
                        <p class="w-90 md-w-70 sm-w-80 xs-w-70 mx-auto">Enjoy a wonderful cafe dining experience</p>
                    </div>
                </div>
            </div>
            <div class="col icon-with-text-style-03 md-mb-30px">
                <div class="feature-box ps-8 pe-8 lg-ps-0 lg-pe-0 overflow-hidden">
                    <div class="feature-box-icon">
                        <i class="bi bi-telephone-inbound d-inline-block icon-medium text-dark-gray mb-15px"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="fw-700 text-dark-gray fs-15 text-uppercase">Let's talk</span>
                        <div class="w-100 d-block">
                            {{-- <span class="d-block">Phone: <a href="tel:+6444738808">(04) 473-8808</a></span> --}}
                         
                            <span class="d-block">Phone: <a href="tel:+64212512000">+64 21-251-2000</a></span>

                            <!-- <span class="d-block">Fax: 1-800-222-002</span> -->

                        </div>
                    </div>
                </div>
            </div>
            <div class="col icon-with-text-style-03 xs-mb-30px">
                <div class="feature-box ps-8 pe-8 lg-ps-0 lg-pe-0 overflow-hidden">
                    <div class="feature-box-icon">
                        <i class="bi bi-envelope-open d-inline-block icon-medium text-dark-gray mb-15px"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="fw-700 text-dark-gray fs-15 text-uppercase"><a href="{{route('book.table')}}" style="color: black;">Book a table</a></span>
                        <div class="w-100 d-block">
                            <span class="d-block">Email us at <a
                                    href="mailto:relishforfood@outlook.com">relishforfood@outlook.com</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col icon-with-text-style-03">
                <div class="feature-box ps-8 pe-8 lg-ps-0 lg-pe-0 overflow-hidden">
                    <div class="feature-box-icon">
                        <i class="bi bi-geo-alt d-inline-block icon-medium text-dark-gray mb-15px"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="fw-700 text-dark-gray fs-15 text-uppercase">Visit us</span>
                        <p class="md-w-70 sm-w-90 xs-w-70 mx-auto">256 Lambton Quay, CBD, Wellington 6011, New
                            Zealand
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="border-top border-color-transparent-dark-very-light pt-25px pb-25px">
        <div class="container">
            <div class="row align-items-center">
                <div
                    class="col-md-4 col-sm-6 fs-15 last-paragraph-no-margin text-center text-sm-start order-3 order-sm-2 order-md-1">
                    <p>&COPY; Copyright {{date('Y')}} 
    <a href="https://unifywizards.com/" target="_blank" class="text-decoration-line-bottom text-dark-gray fw-600">
        Unify Wizards
    </a>
</p>
<div class="d-flex gap-2 justify-content-center justify-content-sm-start" style="font-size: 11px;">

    <a href="/privacy" target="_blank" class="text-decoration-line-bottom text-dark-gray fw-600">
        Privacy Policy
    </a> | 
    <a href="/terms-condition" target="_blank" class="text-decoration-line-bottom text-dark-gray fw-600">
        Terms & Conditions
    </a>
</div>

                            


                </div>

                <div class="col-md-4 text-center order-1 order-md-2 sm-mb-20px">
                    <a href="{{ route('homepage') }}" class="footer-logo d-inline-block">
                        <img src="{{ asset('guest/images/demo-restaurant-logo-black.png') }}"
                            data-at2x="{{ asset('guest/images/demo-restaurant-logo-black@2x.png') }}" alt=""
                            class="default-logo">
                    </a>
                </div>
                <div class="col-md-4 text-end text-center text-md-end order-2">
                    <a href="https://unifywizards.com/" target="_blank">
                        <img src="{{ asset('guest/images/wizard-logo.png') }}" alt="Unify Wizards Logo"
                            style="max-width: 150px; height: auto;">
                    </a>
                    <div class="mb-15px">
                                <span class="w-25px h-1px d-inline-block bg-base-color me-5px align-middle"></span>
                                <span class="text-gradient-base-color fs-10 alt-font fw-700 ls-minus-4px text-lowercase d-inline-block align-middle">Please Note: GST, Delivery, and Dietary Charges Are Additional </span>
                            </div>
                </div>
            </div>
        </div>
    </div>
</footer>

