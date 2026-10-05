<ul
    class="portfolio-simple portfolio-wrapper grid-loading grid grid-3col xxl-grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
    <li class="grid-sizer"></li>
    @foreach ($category as $category)
        @foreach ($category->product as $product)
            <li class="grid-item {{ $product->gallery_categories_id }} transition-inner-all">
                <div class="portfolio-box">
                    <div class="portfolio-image bg-dark-gray border-radius-6px">
                        <img src="{{ asset($product->image) }}" alt="{{ $product->image_alt }}">
                        <div class="portfolio-hover d-flex justify-content-center flex-column p-35px">
                            <div class="portfolio-icon d-flex flex-row justify-content-center align-items-center">
                                <a href="{{ asset($product->image) }}" data-group="portfolio-items"
                                    class="d-flex flex-column justify-content-center text-dark-gray text-dark-gray-hover rounded-circle bg-white w-60px h-60px rounded-circle box-shadow-large move-bottom-top">
                                    <i class="feather icon-feather-search fw-600" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    @endforeach
</ul>
