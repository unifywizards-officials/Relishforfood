@extends('layouts.guest.master')

@section('page_level_style')

@endsection

@section('content')
<div class="breadcrumb__area breadcrumb-space overflow-hidden banner-home-bg ">
        <div class="banner-home__middel-shape inner-top-shape"></div>
        <div class="container">
            <div class="banner-all-shape-wrapper">
                <div class="banner-home__banner-shape-1 first-shape">
                    <img class="upDown-top" src="{{asset('guest/imgs/banner-1/banner-shape-1.svg')}}" alt="img not found">
                </div>
                <div class="banner-home__banner-shape-2 second-shape">
                    <img class="upDown-bottom" src="{{asset('guest/imgs/banner-1/banner-shape-2.svg')}}" alt="img not found">
                </div>
                <div class="right-shape">
                    <img class="zooming" src="{{asset('guest/imgs/inner-img/inner-right-shape.svg')}}" alt="img not found">
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content text-center">
                        <div class="breadcrumb__title-wrapper mb-15 mb-sm-10 mb-xs-5">
                            <h1 class="breadcrumb__title color-white wow fadeIn animated" data-wow-delay=".1s">Shop</h1>
                        </div>
                        <div class="breadcrumb__menu wow fadeIn animated" data-wow-delay=".5s">
                            <nav>
                                <ul>
                                    <li><span><a href="#">Home</a></span></li>
                                    <li class="active"><span>Shop</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!--prodact-area-->
    <section class="prodact-area product-bg">

        <div class="rr-fea-product__area sub-inner-area p-relative fix grey-bg-2 pb-120 pt-115 rr-pro-tab1 rr-el-section">
            <div class="container custom-container-3">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="rr-fea-product__tab mb-35">
                            <nav>
                                <div class="nav nav-tab nav-inner align-items-center justify-content-between" id="nav-tab" role="tablist">
                                    <div class="text">
                                        <h6>There are 16 products.</h6>
                                    </div>
                                    <div class="all-button d-flex">
                                    
                                    
                                    <button class="nav-link rr-el-rep-filterBtn active" id="nav-3-tab" data-bs-toggle="tab" data-bs-target="#nav-3" type="button" role="tab" aria-controls="nav-2" aria-selected="false"><svg width="33" height="19" viewBox="0 0 33 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="2.5" cy="2.5" r="2.5" fill="#001D08" fill-opacity="0.1"/>
                                        <circle cx="2.5" cy="9.5" r="2.5" fill="#001D08" fill-opacity="0.1"/>
                                        <circle cx="2.5" cy="16.5" r="2.5" fill="#001D08" fill-opacity="0.1"/>
                                        <circle cx="9.5" cy="2.5" r="2.5" fill="#001D08" fill-opacity="0.1"/>
                                        <circle cx="16.5" cy="2.5" r="2.5" fill="#001D08" fill-opacity="0.1"/>
                                        <circle cx="23.5" cy="2.5" r="2.5" fill="#001D08" fill-opacity="0.1"/>
                                        <circle cx="30.5" cy="2.5" r="2.5" fill="#001D08" fill-opacity="0.1"/>
                                        <circle cx="9.5" cy="9.5" r="2.5" fill="#001D08" fill-opacity="0.1"/>
                                        <circle cx="9.5" cy="16.5" r="2.5" fill="#001D08" fill-opacity="0.1"/>
                                        <circle cx="16.5" cy="9.5" r="2.5" fill="#001D08" fill-opacity="0.1"/>
                                        <circle cx="23.5" cy="9.5" r="2.5" fill="#001D08" fill-opacity="0.1"/>
                                        <circle cx="30.5" cy="9.5" r="2.5" fill="#001D08" fill-opacity="0.1"/>
                                        <circle cx="16.5" cy="16.5" r="2.5" fill="#001D08" fill-opacity="0.1"/>
                                        <circle cx="23.5" cy="16.5" r="2.5" fill="#001D08" fill-opacity="0.1"/>
                                        <circle cx="30.5" cy="16.5" r="2.5" fill="#001D08" fill-opacity="0.1"/>
                                        </svg>
                                    </button>
                                    </div>
                                    <div class="right-text mt-md-30 mt-xs-30">
                                        <div class="nice-select-select sorting-type">
                                            <span>Sort by : </span>
                                            <select id="lan" class="lan-5">
                                                <option>Default</option>
                                                <option>Most popular</option>
                                                <option>Date</option>
                                                <option>Trending</option>
                                                <option>Featured</option>
                                                <option>Discounted</option>
                                            </select> 
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="nav-3" role="tabpanel" aria-labelledby="nav-2-tab" tabindex="0">
                            <div class="rr-fea-product__wrapper">
                                <div class="row">
                                    @foreach($product as $data)
                                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                                        <div class="rr-fea-product__item rr-pro-img">
 
                                            <div class="rr-fea-product__thumb fix p-relative">
                                                <img  src="{{asset('guest/imgs/prodact/prodact-card-6.png')}}"  alt="img not found">
                                                <div class="rr-fea-product__thumb-text">
                                                    <span>-71%</span>
                                                </div>
 
                                                <div class="rr-fea-product__icon-box icon-box-4 rr-product-action">
                                                    <div class="product-action-btn mb-6">
                                                        <a href="#" class="icon-btn woosq-btn woosq-btn-896 " data-id="896" data-effect="mfp-3d-unfold">
                                                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M17.612 2.41452C17.1722 1.96607 16.65 1.61034 16.0752 1.36763C15.5005 1.12492 14.8844 1 14.2623 1C13.6401 1 13.0241 1.12492 12.4493 1.36763C11.8746 1.61034 11.3524 1.96607 10.9126 2.41452L9.99977 3.34476L9.08699 2.41452C8.19858 1.50912 6.99364 1.00047 5.73725 1.00047C4.48085 1.00047 3.27591 1.50912 2.38751 2.41452C1.4991 3.31992 1 4.5479 1 5.82833C1 7.10875 1.4991 8.33674 2.38751 9.24214L3.30029 10.1724L9.99977 17L16.6992 10.1724L17.612 9.24214C18.0521 8.79391 18.4011 8.26171 18.6393 7.67596C18.8774 7.0902 19 6.46237 19 5.82833C19 5.19428 18.8774 4.56645 18.6393 3.9807C18.4011 3.39494 18.0521 2.86275 17.612 2.41452Z" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        </a>
                                                    </div>
                                                    <div class="product-action-btn mb-6">
                                                        <a href="#" class="icon-btn woosq-btn woosq-btn-896 " data-id="896" data-effect="mfp-3d-unfold">
                                                            <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11.8887 1L14.9997 3.90909L11.8887 6.81818" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M1 8.27282V6.81827C1 6.04673 1.32777 5.30679 1.91121 4.76123C2.49464 4.21567 3.28595 3.90918 4.11106 3.90918H14.9998" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M4.11106 16.9998L1 14.0907L4.11106 11.1816" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M14.9998 9.72705V11.1816C14.9998 11.9531 14.672 12.6931 14.0886 13.2386C13.5051 13.7842 12.7138 14.0907 11.8887 14.0907H1" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        </a>
                                                    </div>
                                                    <div class="product-action-btn">
                                                        <a href="#" class="icon-btn woosq-btn woosq-btn-896 " data-id="896" data-effect="mfp-3d-unfold">
                                                            <svg width="24" height="18" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M1 9C1 9 5 1 12 1C19 1 23 9 23 9C23 9 19 17 12 17C5 17 1 9 1 9Z" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M12 12C13.6569 12 15 10.6569 15 9C15 7.34315 13.6569 6 12 6C10.3431 6 9 7.34315 9 9C9 10.6569 10.3431 12 12 12Z" stroke="#001D08" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-action-btn-5">
                                                    <h5>Hot</h5>
                                                </div>
                                            </div>
 
                                            <div class="rr-fea-product__content">
                                                <div class="rr-fea-product__star">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <span><i class="fa-solid fa-star"></i></span>
                                                </div>
                                                <h4 class="rr-fea-product__title-sm"><a href="shop.html">T-Shirt Design</a></h4>
                                                <div class="rr-product-content-price">
                                                    <span class="product-item-3-price">
                                                    <span class="price">
                                                        <span class="woocs_price_code d-flex gap-6"  >
                                                            <del aria-hidden="true">
                                                                <span class="woocommerce-price-amount amount">$270.50
                                                                    
                                                                </span>
                                                    </del>
                                                    <span class="woocommerce-price-amount amount body-color">$230.50
                                                                
                                                            </span>
                                                    </span>
                                                    </span>
                                                    </span>
                                                </div>
                                                <div class="rr-fea-product__link-box">
                                                    <a href="#"  class="cart-button icon-btn button rr-btn-cart "  >
                                                        <span></span>Add to Cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-button d-flex justify-content-between">
                    <h5>Showing 1-12 of 16 item(s)</h5>
                    <div class="social d-flex">
                        <a href="shop.html" class="active"><i class="fa-solid fa-1"></i></a>
                        <a href="shop.html"><i class="fa-solid fa-2"></i></a>
                        <a href="shop.html"><i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
@endsection

@section('page_level_script')

<script>
$(document).ready(function() {
    $('.nav-link').click(function(event) {
        event.preventDefault();
        var category = $(this).data('category');
        // console.log(category);return false;
        $('.nav-link').removeClass('active');
        $(this).addClass('active');
        
        $.ajax({
            url: "{{ route('products.filter') }}",
            method: "POST",
            data: {
                category: category,
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                $('#product-list').html(response.html);
            }
        });
    });
});
</script>

@endsection