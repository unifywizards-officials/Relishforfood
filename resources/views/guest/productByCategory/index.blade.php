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

    @if($product->isNotEmpty())
        <div class="rr-fea-product__area sub-inner-area p-relative fix grey-bg-2 pb-120 pt-115 rr-pro-tab1 rr-el-section">
            <div class="container custom-container-3">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="rr-fea-product__tab mb-35">
                            <nav>
                                <div class="nav nav-tab nav-inner align-items-center justify-content-between" id="nav-tab" role="tablist">
                                    <div class="text">
                                        <h6  id="product-count">There are total {{$totalCount}} products.</h6>
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
                                            <select id="sort_by" class="lan-5">
                                                <option value="">Default</option>
                                                <option value="1">New Arrivals</option>
                                                <option value="2">Recently Saled</option>
                                                <option value="3">Hot</option>
                                            </select> 
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
				<div id="products">
            		@include('guest.productByCategory.partial_list')
        		</div>

        		<div id="pagination">
            		@include('guest.productByCategory.pagination')
        		</div>
            </div>
        </div>
    @else
        @include('guest.productByCategory.no_data')
    @endif
        
    </section>
@endsection

@section('page_level_script')

<script>
$(document).ready(function() {
            function fetchProducts(page = 1) {
                var sort_by = $('#sort_by').val();
                console.log(sort_by)
                $.ajax({
                    url: location.href,
                    method: 'GET',
                    data: {
                        sort_by: sort_by,
                        page: page
                    },
                    success: function(response) {
                        console.log(response);
                        $('#products').html(response.product);
                        $('#pagination').html(response.pagination);
                        $('#product-count').text('There are '+response.totalCount+' products');
                            // console.log(response.event) 
                    }
                });
            }

            // Fetch products on filter change
            $('#sort_by').on('change', function() {
                // console.log('dsadasds');
                fetchProducts();
            });

           
            // Fetch products on pagination link click
            $(document).on('click', '.pagination a', function(e) {
                e.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                fetchProducts(page);
            });
        });
</script>

@endsection