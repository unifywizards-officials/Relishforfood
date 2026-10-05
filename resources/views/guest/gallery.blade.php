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
                    @component('components.categories', ['category' => $category])
                    @endcomponent
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 filter-content" id="product-list">
                    @component('components.gallery', ['category' => $category])
                    @endcomponent
                </div>
            </div>
        </div>
    </section>
@endsection

@section('page_level_script')
    <script></script>
@endsection
