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

   .full-screen {
      height: 100vh !important;
   }
 .page-title.bg-overlay {
    position: relative;
    z-index: 0;
    background-image: url('https://relishforfood.test/uploads/images/1747646233_682af719d58ea.png'); /* Desktop */
    background-size: cover;
    background-position: center center;
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

header .navbar{
   background-color: white !important;
}
</style>


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
   <img src="https://relishforfood.test/uploads/images/1747642142_682ae71e4b2ac.png" alt="Mobile Hero" class="mobile-hero-img">
</section>

<!-- end page title -->
<!-- start section -->
<section class="pt-0 ps-15 pe-15 xl-ps-2 xl-pe-2 lg-ps-2 lg-pe-2 sm-mx-0">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <ul class="blog-classic blog-wrapper grid-loading grid grid-3col lg-grid-3col md-grid-2col sm-grid-1col xs-grid-1col gutter-extra-large">
               <li class="grid-sizer"></li>
               <!-- start blog item -->
               <li class="grid-item">
                  <div class="card bg-transparent border-0 h-100">
                     <div class="blog-image position-relative overflow-hidden border-radius-4px">
                        <a href="#"><img src="https://craftohtml.themezaa.com/images/blog-images-01.jpg" alt="" /></a>
                     </div>
                     <div class="card-body px-0 pt-30px pb-30px">
                        <span class="fs-13 text-uppercase mb-5px d-block"><a href="blog-grid.html" class="text-dark-gray text-dark-gray-hover fw-600 categories-text">Business</a><a href="blog-grid.html" class="blog-date text-dark-gray-hover">26 August 2023</a></span>
                        <a href="#" class="card-title mb-10px fw-600 fs-17 lh-26 text-dark-gray text-dark-gray-hover d-inline-block w-95">Recognizing the need is the primary condition for design.</a>
                        <p class="mb-10px w-95">Lorem ipsum is simply dummy printing typesetting industry...</p>
                        <a href="#" class="card-link  fs-12 text-uppercase text-dark-gray text-dark-gray-hover fw-700">More reading<i class="feather icon-feather-arrow-right icon-very-small"></i></a>
                     </div>
                  </div>
               </li>
               <!-- end blog item -->
               <!-- start blog item -->
               <li class="grid-item">
                  <div class="card bg-transparent border-0 h-100">
                     <div class="blog-image position-relative overflow-hidden border-radius-4px">
                        <a href="#"><img src="https://craftohtml.themezaa.com/images/blog-images-04.jpg" alt="" /></a>
                     </div>
                     <div class="card-body px-0 pt-30px pb-30px">
                        <span class="fs-13 text-uppercase mb-5px d-block"><a href="blog-grid.html" class="text-dark-gray text-dark-gray-hover fw-600 categories-text">Marketing</a><a href="blog-grid.html" class="blog-date text-dark-gray-hover">25 August 2023</a></span>
                        <a href="#" class="card-title mb-10px fw-600 fs-17 lh-26 text-dark-gray text-dark-gray-hover d-inline-block w-95">At a meta level digital design connects the dots between.</a>
                        <p class="mb-10px w-95">Lorem ipsum is simply dummy printing typesetting industry...</p>
                        <a href="#" class="card-link  fs-12 text-uppercase text-dark-gray text-dark-gray-hover fw-700">More reading<i class="feather icon-feather-arrow-right icon-very-small"></i></a>
                     </div>
                  </div>
               </li>
               <!-- end blog item -->
               <!-- start blog item -->
               <li class="grid-item">
                  <div class="card bg-transparent border-0 h-100">
                     <div class="blog-image position-relative overflow-hidden border-radius-4px">
                        <a href="#"><img src="https://craftohtml.themezaa.com/images/blog-images-02.jpg" alt="" /></a>
                     </div>
                     <div class="card-body px-0 pt-30px pb-30px">
                        <span class="fs-13 text-uppercase mb-5px d-block"><a href="blog-grid.html" class="text-dark-gray text-dark-gray-hover fw-600 categories-text">Design</a><a href="blog-grid.html" class="blog-date text-dark-gray-hover">23 August 2023</a></span>
                        <a href="#" class="card-title mb-10px fw-600 fs-17 lh-26 text-dark-gray text-dark-gray-hover d-inline-block w-95">Make every business easy with beautiful application store.</a>
                        <p class="mb-10px w-95">Lorem ipsum is simply dummy printing typesetting industry...</p>
                        <a href="#" class="card-link  fs-12 text-uppercase text-dark-gray text-dark-gray-hover fw-700">More reading<i class="feather icon-feather-arrow-right icon-very-small"></i></a>
                     </div>
                  </div>
               </li>
               <!-- end blog item -->
               <!-- start blog item -->
            
               <!-- end blog item -->
            </ul>
         </div>
         <div class="col-12 mt-2 d-flex justify-content-center">
            <ul class="pagination pagination-style-01 fs-13 fw-500 mb-0">
               <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-left fs-18 d-xs-none"></i></a></li>
               <li class="page-item"><a class="page-link" href="#">01</a></li>
               <li class="page-item active"><a class="page-link" href="#">02</a></li>
               <li class="page-item"><a class="page-link" href="#">03</a></li>
               <li class="page-item"><a class="page-link" href="#">04</a></li>
               <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-right fs-18 d-xs-none"></i></a></li>
            </ul>
         </div>
      </div>
   </div>
</section>

@endsection
@section('page_level_script')
@endsection