@extends('layouts.guest.master')
@section('page_level_style')
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
   body {
      font-family: 'Poppins', sans-serif;
      overflow-x: hidden;
   }
   .bg-very-ligght-gray {
      background-color: #f7f7f7;
   }
.card-body{
       height: 230px;
}
   .full-screen {
      height: 100vh !important;
   }

   .page-title.bg-overlay {
      position: relative;
      z-index: 0;
      background-image: url('https://relishforfood.co.nz/uploads/images/1747646233_682af719d58ea.png');
      /* Desktop */
      background-size: cover;
      /* background-position: center center; */
      height: 400px;
      width: 100%;
      display: block;
   }

   .page-title.bg-overlay::before {
      content: "";
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      opacity: 0.55;
      background-color: transparent;
      background-image: linear-gradient(90deg, #ffffff 0%, rgba(0, 0, 0, 0) 35%);
      z-index: 1;
      pointer-events: none;
   }

   /* Hide background version and show img on mobile */
   @media only screen and (max-width: 767px) {
      .page-title.bg-overlay {
         display: none;
      }

      .mobile-hero-img {
         display: block;
         width: 100%;
         height: auto;
      }
   }

   @media only screen and (min-width: 768px) {
      .mobile-hero-img {
         display: none;
      }
   }

   header .navbar {
      background-color: white !important;
   }
</style>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
{
  "@context": "https://schema.org",
  "@type": "CollectionPage",
  "url": "https://relishforfood.co.nz/blog",
  "name": "Blog",
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
    "name": "Blog",
    "item": "https://relishforfood.co.nz/blog"  
  }]
}
  ]
}
</script>

@endsection
@section('content')

<!-- start page title -->
<section class="pb-0 ipad-top-space-margin md-pt-0">
   <!-- Desktop background image -->
   <div class="container-fluid page-title bg-overlay">
      <div class="row align-items-center justify-content-center" style="height: 700px;">
         <!-- Optional content here -->
      </div>
   </div>

   <!-- Mobile inline image -->
   <img src="https://relishforfood.co.nz/uploads/images/1747642142_682ae71e4b2ac.png" alt="Mobile Hero" class="mobile-hero-img">
</section>



<section id="blog-container" class="pt-2 ps-15 pe-15 xl-ps-2 xl-pe-2 lg-ps-2 lg-pe-2 sm-mx-0">
   <div class="container-fluid">
      <div class="row">
         <div class="row justify-content-center mb-1">
            <div class="col-lg-7 text-center">
                <span class="fs-15 fw-600 text-red text-uppercase mb-10px d-block">
                    <span class="w-5px h-2px bg-red d-inline-block align-middle me-5px"></span>
                    You may also like
                    <span class="w-5px h-2px bg-red d-inline-block align-middle ms-5px"></span>
                </span>
                <h1 class="alt-font text-dark-gray fw-500">Our Blogs</h1>
            </div>
        </div>
         <div class="col-12">
            <div id="blog-list" class="row">
               @foreach ($blogs as $index => $blog)
               @include('guest.blog.blog_item', ['blog' => $blog, 'index' => $index])
               @endforeach
            </div>
            <div class="text-center mt-4">
               <div id="loader" style="display: none;">
                  <span>Loading...</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>


@endsection
@section('page_level_script')

<script>
   

let page = 1;
let loading = false;

function loadMoreData() {
    if (loading) return;
    loading = true;
    page++;

    $('#loader').show(); // 👈 Show loader before request

    $.ajax({
        url: "?page=" + page,
        type: "get",
        success: function (data) {
            if (data.trim().length === 0) {
                // No more data
                $(window).off("scroll");
            } else {
                $('#blog-list').append(data);
            }
            $('#loader').hide(); // 👈 Hide after data is appended
            loading = false;
        },
        error: function () {
            $('#loader').hide(); // 👈 Hide even on error
            loading = false;
        }
    });
}

$(window).on("scroll", function () {
    if ($(window).scrollTop() + $(window).height() >= $(document).height() - 600) {
        loadMoreData();
    }
});

</script>
@endsection