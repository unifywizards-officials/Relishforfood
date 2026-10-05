@extends('layouts.guest.master')
@section('title',$pageData->meta_title)
@section('description',$pageData->meta_description)
@section('keywords',$pageData->meta_keyword)

@section('page_level_style')
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
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
   border-left: 4px solid var(--base-color) !important;
   font-family: var(--alt-font);
   color: var(--dark-gray);
   border-color: var(--base-color) !important;
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
  scrollbar-width: none; /* Firefox */
  -ms-overflow-style: none; /* IE and Edge */
}

.toc-box-blog::-webkit-scrollbar {
  display: none; /* Chrome, Safari */
}
@media (max-width: 767.98px) {
  aside {
    display: none;
  }
}

.blog-details li{
   list-style: disc !important;
    margin: 10px !important;
}


</style>
@endsection
@section('content')
<!-- start section -->
<section class="top-space-margin right-side-bar blog-start">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-12 col-lg-8 blog-standard md-mb-50px sm-mb-40px">
            <!-- start blog details  -->
            <div class="col-12 blog-details mb-12">
               <div class="entry-meta mb-20px fs-15">
                  <span><i class="text-dark-gray feather icon-feather-calendar"></i><a href="#">{{ \Carbon\Carbon::parse($blog->publish_date)->format('M d, Y') }}</a></span>
                  <span><i class="text-dark-gray feather icon-feather-user"></i><a href="#">Admin</a></span>
                  <!-- <span><i class="text-dark-gray feather icon-feather-folder"></i><a href="#">Creative</a></span> -->
               </div>
               <h1 class="text-dark-gray fw-600 w-80 sm-w-100 mb-6">{{ $blog->heading }}</h1>
              {!! $blog->long_description !!}
            </div>
            <!-- <div class="col-12">
               <div class="row mb-50px sm-mb-30px">
                  <div class="tag-cloud col-12 col-md-9 text-center text-md-start sm-mb-15px">
                     <a href="#">Development</a>
                     <a href="#">Event</a>
                     <a href="#">Multimedia </a>
                     <a href="#">Fashion</a>
                  </div>
                  <div class="tag-cloud col-12 col-md-3 text-uppercase text-center text-md-end">
                     <a class="likes-count fw-500 mx-0" href="#"><i class="fa-regular fa-heart text-red me-10px"></i><span class="text-dark-gray text-dark-gray-hover">05 Likes</span></a>
                  </div>
               </div>
         
            </div> -->
            <!-- end blog details -->
         </div>
         <!-- start sidebar -->
         <aside class="col-12 col-xl-4 col-lg-4 col-md-7 ps-55px xl-ps-50px lg-ps-15px sidebar">
            <div class="position-sticky sticky-blogg">
               <div class="fw-600 fs-19 lh-22 ls-minus-05px text-dark-gray border-bottom border-color-dark-gray border-2 d-block mb-10px pb-15px position-relative">
                  Table of Contents
               </div>
               <div class="toc-box bg-white p-3 border rounded toc-box-blog">
                  <table class="table table-borderless mb-0">
                     <tbody>
                        <tr>
                           <td><a href="#" class="fw-600 fs-17 text-dark-gray d-inline-block mb-5px">Trendy is the last stage before tacky.</a></td>
                        </tr>
                        <tr>
                           <td>
                              <a href="demo-elearning-blog-single-simple.html" class="fw-600 fs-17 text-dark-gray d-inline-block mb-5px">
                              Trendy is the last stage before tacky.
                              </a>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <a href="demo-elearning-blog-single-simple.html" class="fw-600 fs-17 text-dark-gray d-inline-block mb-5px">
                              Trendy is the last stage before tacky.
                              </a>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <a href="demo-elearning-blog-single-simple.html" class="fw-600 fs-17 text-dark-gray d-inline-block mb-5px">
                              Trendy is the last stage before tacky.
                              </a>
                           </td>
                        </tr>
                        <tr>
                           <td><a href="#" class="fw-600 fs-17 text-dark-gray d-inline-block mb-5px">Trendy is the last stage before tacky.</a></td>
                        </tr>
                        <tr>
                           <td>
                              <a href="demo-elearning-blog-single-simple.html" class="fw-600 fs-17 text-dark-gray d-inline-block mb-5px">
                              Trendy is the last stage before tacky.
                              </a>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <a href="demo-elearning-blog-single-simple.html" class="fw-600 fs-17 text-dark-gray d-inline-block mb-5px">
                              Trendy is the last stage before tacky.
                              </a>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <a href="demo-elearning-blog-single-simple.html" class="fw-600 fs-17 text-dark-gray d-inline-block mb-5px">
                              Trendy is the last stage before tacky.
                              </a>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="row justify-content-center">
                  <div class="col-12 text-center elements-social social-icon-style-04 mt-4">
                     <ul class="medium-icon dark">
                        <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i><span></span></a></li>
                        <li><a class="twitter" href="https://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i><span></span></a></li>
                        <li><a class="instagram" href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"><span></span></i></a></li>
                        <li><a class="linkedin" href="http://www.linkedin.com" target="_blank"><i class="fa-brands fa-linkedin-in"><span></span></i></a></li>
                        <li><a class="behance" href="http://www.behance.com/" target="_blank"><i class="fa-brands fa-behance"></i><span></span></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </aside>
         <!-- end sidebar -->
      </div>
   </div>
</section>
<!-- end section -->
<!-- start section -->
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
               <!-- start blog item -->
               <li class="grid-item">
                  <div class="card border-0 border-radius-4px box-shadow-extra-large box-shadow-extra-large-hover">
                     <div class="blog-image">
                        <a href="demo-business-blog-single-modern.html" class="d-block"><img src="https://craftohtml.themezaa.com/images/blog-images-56.jpg" alt="" /></a>
                        <div class="blog-categories">
                           <a href="blog-classic.html" class="categories-btn bg-white text-dark-gray text-dark-gray-hover text-uppercase alt-font fw-700">Agency</a>
                        </div>
                     </div>
                     <div class="card-body p-12">
                        <a href="demo-business-blog-single-modern.html" class="card-title mb-15px fw-600 fs-17 lh-26 text-dark-gray text-dark-gray-hover d-inline-block">How to bring the season into your great marketing.</a>
                        <p>Lorem ipsum has been industry standard dummy text ever...</p>
                        <div class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase">
                           <div class="me-auto">
                              <span class="blog-date fw-500 d-inline-block">30 August 2023</span>
                              <div class="d-inline-block author-name">By <a href="blog-classic.html" class="text-dark-gray text-dark-gray-hover text-decoration-line-bottom fw-600">Den viliamson</a></div>
                           </div>
                           <div class="like-count">
                              <a href="demo-business-blog-single-modern.html"><i class="fa-regular fa-heart text-red d-inline-block"></i><span class="text-dark-gray align-middle fw-600">65</span></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </li>
               <!-- end blog item -->
               <!-- start blog item -->
               <li class="grid-item">
                  <div class="card border-0 border-radius-4px box-shadow-extra-large box-shadow-extra-large-hover">
                     <div class="blog-image">
                        <a href="demo-business-blog-single-modern.html" class="d-block"><img src="https://craftohtml.themezaa.com/images/blog-images-59.jpg" alt="" /></a>
                        <div class="blog-categories">
                           <a href="blog-classic.html" class="categories-btn bg-white text-dark-gray text-dark-gray-hover text-uppercase alt-font fw-700">Luxurious</a>
                        </div>
                     </div>
                     <div class="card-body p-12">
                        <a href="demo-business-blog-single-modern.html" class="card-title mb-15px fw-600 fs-17 lh-26 text-dark-gray text-dark-gray-hover d-inline-block">Build up healthy habits and strong peaceful life.</a>
                        <p>Lorem ipsum has been industry standard dummy text ever...</p>
                        <div class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase">
                           <div class="me-auto">
                              <span class="blog-date fw-500 d-inline-block">28 August 2023</span>
                              <div class="d-inline-block author-name">By <a href="blog-classic.html" class="text-dark-gray text-dark-gray-hover text-decoration-line-bottom fw-600">Hugh macleod</a></div>
                           </div>
                           <div class="like-count">
                              <a href="demo-business-blog-single-modern.html"><i class="fa-regular fa-heart text-red d-inline-block"></i><span class="text-dark-gray align-middle fw-600">25</span></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </li>
               <!-- end blog item -->
               <!-- start blog item -->
               <li class="grid-item">
                  <div class="card border-0 border-radius-4px box-shadow-extra-large box-shadow-extra-large-hover">
                     <div class="blog-image">
                        <a href="demo-business-blog-single-modern.html" class="d-block"><img src="https://craftohtml.themezaa.com/images/blog-images-52.jpg" alt="" /></a>
                        <div class="blog-categories">
                           <a href="blog-classic.html" class="categories-btn bg-white text-dark-gray text-dark-gray-hover text-uppercase alt-font fw-700">Business</a>
                        </div>
                     </div>
                     <div class="card-body p-12">
                        <a href="demo-business-blog-single-modern.html" class="card-title mb-15px fw-600 fs-17 lh-26 text-dark-gray text-dark-gray-hover d-inline-block">Make business easy with beautiful application.</a>
                        <p>Lorem ipsum has been industry standard dummy text ever...</p>
                        <div class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase">
                           <div class="me-auto">
                              <span class="blog-date fw-500 d-inline-block">26 August 2023</span>
                              <div class="d-inline-block author-name">By <a href="blog-classic.html" class="text-dark-gray text-dark-gray-hover text-decoration-line-bottom fw-600">Walton smith</a></div>
                           </div>
                           <div class="like-count">
                              <a href="demo-business-blog-single-modern.html"><i class="fa-regular fa-heart text-red d-inline-block"></i><span class="text-dark-gray align-middle fw-600">30</span></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </li>
               <!-- end blog item -->
            </ul>
         </div>
      </div>
   </div>
</section>
<!-- end section -->
<!-- start section -->
<!-- end section -->
<!-- start footer -->
@endsection
@section('page_level_script')
@endsection