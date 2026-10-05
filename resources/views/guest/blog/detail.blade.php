@extends('layouts.guest.master')

@section('title', $blog->meta_title)
@section('description', $blog->meta_description)
@section('keywords', $blog->meta_keyword)

@section('faq_schema')
@if(!empty($blog->faq_schema))
    <script type="application/ld+json">
        {!! $blog->faq_schema !!}
    </script>
@endif
@endsection
@section('page_level_style')
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
    @media (max-width: 767.98px) {
        .heading-dist {
            font-size: 14px;
            padding: 1px;
        }
    }

    a:hover {
        color: #CE9365;
    }

    body {
        font-family: 'Poppins', sans-serif;
    }

    .bg-very-ligght-gray {
        background-color: #f7f7f7;
    }

    .full-screen {
        height: 100vh !important;
    }

    .popular-post-sidebar li .media-body {
        line-height: normal;
        padding-left: 0px !important;
    }

    blockquote {
        font-weight: 500 !important;
        margin-left: 60px !important;
        margin-bottom: 7% !important;
        margin-top: 7% !important;
        padding-left: 40px !important;
        border-left: 4px solid #422510 !important;
        font-family: var(--alt-font);
        color: var(--dark-gray);
        border-color: #422510 !important;
    }

    p {
        margin-top: 25px;
        margin-bottom: 25px;
    }

    .blog-start h1,
    .blog-start h2,
    .blog-start h3,
    .blog-start h4,
    .blog-start h5,
    .blog-start h6 {
        font-weight: 600 !important;
        font-size: 25px;
        color: var(--dark-gray);
        margin-top: 30px;
        margin-bottom: 30px;
    }

    .sticky-blogg {
        top: 17%;
        z-index: 10;
    }

    .toc-box-blog {
        max-height: 500px;
        overflow-y: auto;
        scrollbar-width: none;
        /* Firefox */
        -ms-overflow-style: none;
        /* IE and Edge */
    }

    .toc-box-blog::-webkit-scrollbar {
        display: none;
        /* Chrome, Safari */
    }

    @media (max-width: 767.98px) {
        aside {
            display: none;
        }
    }

    .toc-link.active {
        color: #422510 !important;
        font-weight: 700;
        position: relative;
    }



    .toc-link.active {
        color: #422510 !important;
        font-weight: 700;
        position: relative;
    }

    a {
        color: #CE9365;
    }

    .toc-link.active {
        color: #007bff;
        /* or any color you like */
        font-weight: bold;
        border-left: 3px solid #007bff;
        padding-left: 5px;
        background-color: #f0f8ff;
    }

    .card-body {
        height: 250px;
    }

    @media (max-width: 1600px) {
        section {
            padding-top: 40px !important;
            padding-bottom: 40px !important;
        }
    }

    @media (max-width: 1600px) {
        footer {
            padding-top: 20px;
        }
    }

    .blog-details li{
   list-style: disc !important;
    margin: 10px !important;
}
</style>
@endsection

@section('content')
<section class="top-space-margin right-side-bar blog-start">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 blog-standard md-mb-50px sm-mb-40px">
                <!-- start blog details  -->
                <div class="col-12 blog-details mb-12">
                    <div class="entry-meta mb-20px fs-15">
                        <span><i class="text-dark-gray feather icon-feather-calendar"></i><a href="#">{{ \Carbon\Carbon::parse($blog->publish_date)->format('M d, Y') }}</a></span>
                        <span><i class="text-dark-gray feather icon-feather-user"></i><a href="#">Admin</a></span>


                        <!-- @foreach($blog->blog_category as $blog_category)
                        
                        <span><i class="text-dark-gray feather icon-feather-folder"></i><a href="#">{{$blog_category->category_name->category_name}}</a></span>
                        @endforeach -->
                    </div>
                    <h1 class="text-dark-gray fw-600 w-80 sm-w-100 mb-6">{{ $blog->heading }}</h1>
                    <img src="{{ asset($blog->blog_image) }}" class="w-100 mb-4" alt="{{ $blog->blog_image_alt }}" style="height: 400px; object-fit: contain;">

                    <p>{!! $blog->long_description !!}</p>
                    
                    
                    @if(count($faqs))
                        <div class="accordion" id="faqAccordion">
                              <!-- Heading -->
                        <div class="text-center mb-4">
                            <h2 class="fw-bold">Frequently Asked Questions</h2>
                             
                        </div>
                          @foreach($faqs as $i => $faq)
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button {{ $i ? 'collapsed' : '' }}"
                                            type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#faq{{ $i }}">
                                        {{ $faq['name'] }}
                                    </button>
                                </h3>
                        
                                <div id="faq{{ $i }}"
                                     class="accordion-collapse collapse {{ !$i ? 'show' : '' }}"
                                     data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        {{ $faq['acceptedAnswer']['text'] }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                        @endif
                </div>

                <!-- <div class="row mb-50px sm-mb-30px">
                    <div class="tag-cloud col-12 col-md-9 text-center text-md-start sm-mb-15px">
                        @foreach($blog->blog_category as $blog_category)
                        <a href="#">{{$blog_category->category_name->category_name}}</a>
                        @endforeach

                    </div>

                </div> -->
            </div>


            <!-- Table of Contents Sidebar -->
            <aside class="col-12 col-xl-4 col-lg-4 col-md-7 ps-55px xl-ps-50px lg-ps-15px sidebar">
                <div class="position-sticky sticky-blogg">
                    <div class="fw-600 fs-19 lh-22 ls-minus-05px text-dark-gray border-bottom border-color-dark-gray border-2 d-block mb-10px pb-15px position-relative">
                        Table of Contents
                    </div>
                    <div class="toc-box bg-white p-3 border rounded toc-box-blog">
                        <table class="table table-borderless mb-0">
                            <tbody>
                                <tr>

                                </tr>
                                <!-- Add dynamic TOC links here -->
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <!-- Social Icons -->
                    <div class="text-center elements-social social-icon-style-04">
                        <!-- AddToAny BEGIN -->
                        <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                            <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                            <a class="a2a_button_facebook"></a>
                            <a class="a2a_button_whatsapp"></a>
                            <a class="a2a_button_linkedin"></a>
                            <a class="a2a_button_x"></a>
                        </div>
                        <script defer src="https://static.addtoany.com/menu/page.js"></script>
                        <!-- AddToAny END -->
                    </div>
                </div>
            </aside>
        </div>
    </div>
    </div>
</section>


<section class="bg-very-ligght-gray">
    <div class="container">
        <div class="row justify-content-center mb-2">
            <div class="col-12 col-lg-7 text-center">
                <span class="fs-15 fw-500 text-uppercase d-inline-block">You may also like</span>
                <h4 class="text-dark-gray fw-600">Related posts</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                    <li class="grid-sizer"></li>

                    @foreach ($related_blog as $related_blog)
                    <!-- start blog item -->
                    <li class="grid-item">
                        <div class="card border-0 border-radius-4px box-shadow-extra-large box-shadow-extra-large-hover">
                            <div class="blog-image">
                                <a href="{{ route('blog.detail', [$related_blog->slug]) }}" class="d-block"><img src="{{ asset($related_blog->image) }}" alt="{{ $related_blog->image_alt }}" /></a>
                                @php
                                $categories = $related_blog->blog_category->pluck('category_name.category_name')->toArray();
                                $categoryList = implode(', ', $categories);
                                @endphp
                                <div class="blog-categories">
                                    <a href="{{ route('blog.detail', [$related_blog->slug]) }}" class="categories-btn bg-white text-dark-gray text-dark-gray-hover text-uppercase alt-font fw-700">{{ $categoryList }}</a>
                                </div>
                            </div>
                            <div class="card-body p-4">
                                <a href="{{ route('blog.detail', [$related_blog->slug]) }}" class="card-title mb-15px fw-600 fs-17 lh-26 text-dark-gray text-dark-gray-hover d-inline-block">{{ $related_blog->heading }}</a>
                                <p>{{ Str::limit($related_blog->short_description, 100) }}</p>
                                <div class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase">
                                    <div class="me-auto">
                                        <span class="blog-date fw-500 d-inline-block">{{ \Carbon\Carbon::parse($related_blog->publish_date)->format('d F Y') }}</span>
                                        <div class="d-inline-block author-name">By <a href="{{ route('blog.detail', [$related_blog->slug]) }}" class="text-dark-gray text-dark-gray-hover text-decoration-line-bottom fw-600">Admin</a></div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection

@section('page_level_script')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const content = document.querySelector('.blog-start');
        const tocBox = document.querySelector('.toc-box tbody');

        if (!content || !tocBox) return;

        const headings = content.querySelectorAll('h2, h3');
        let index = 0;

        headings.forEach((heading) => {
            if (!heading.id) {
                heading.id = `heading-${index}`;
            }

            const tr = document.createElement('tr');
            const td = document.createElement('td');
            const link = document.createElement('a');

            link.href = 'javascript:void(0);'; // prevent # in URL
            link.className = 'fw-600 fs-17 text-dark-gray d-inline-block mb-5px toc-link';
            link.dataset.targetId = heading.id;
            link.textContent = heading.textContent;

            link.addEventListener('click', function(e) {
                e.preventDefault();

                // Highlight clicked link
                document.querySelectorAll('.toc-link').forEach(el => el.classList.remove('active'));
                this.classList.add('active');

                // Scroll smoothly
                const target = document.getElementById(this.dataset.targetId);
                if (target) {
                    const headerOffset = 100;
                    const elementPosition = target.getBoundingClientRect().top + window.scrollY;
                    const offsetPosition = elementPosition - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                }
            });

            td.appendChild(link);
            tr.appendChild(td);
            tocBox.appendChild(tr);
            index++;
        });
    });
</script>
@endsection