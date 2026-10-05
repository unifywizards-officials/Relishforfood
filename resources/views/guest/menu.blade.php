@extends('layouts.guest.master')
@section('page_level_style')

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
{
  "@context": "https://schema.org",
  "@type": "CollectionPage",
  "url": "https://relishforfood.co.nz/menu",
  "name": "Menu - Relish For Food",
  "description": "Relish delicious smoked salmon bagels, hot cakes & more at Relish For Food in Wellington! View our full menu online & order now."
},

{
  "@context": "https://schema.org",
  "@type": "Menu",
  "name": "Relish For Food Menu",
  "url": "https://relishforfood.co.nz/menu",
  "inLanguage": "en"
}

  ]
}
</script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<style>
   .swiper {
      width: 100%;
      height: 100%;
   }

   .d-flex {
      display: flex !important;
   }

   @media (max-width: 767px) {

      /* Adjust 767px to the breakpoint you prefer */
      .d-flex {
         display: block !important;
         /* Or 'none' if you want it hidden */
      }
   }

   .swiper-slide {
      text-align: center;
      font-size: 18px;
      display: flex;
      justify-content: center;
      align-items: center;
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
      overflow: hidden;
      /* Prevents image from overflowing */
   }

   .modal-content img {
      width: 100%;
      height: 420px;
      border-radius: 10px 0 0 10px;
      transition: transform 0.3s ease;
   }

   .modal-content img:hover {
      transform: scale(1.015);
      /* slight zoom */
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
         display: none;
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

   .pp {
      color: #fff000;
      font-weight: 600;
   }

   .btn-close {
      --bs-btn-close-color: #ffffff;
      --bs-btn-close-bg: url("data:image/svg+xml,   <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ffffff'>      <path d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/>   </svg>   ");
   }

   .color-grey {
      color: #8d8987 !important;
   }

   .quantity-container {
      display: inline-flex;
      align-items: center;
      gap: 10px;
   }
</style>
@endsection
@section('content')
<section class="ipad-top-space-margin page-title-big-typography cover-background p-0 md-background-position-left-center"
   style="background-image: url(guest/images/demo-restaurant-about-title-bg.jpg)">
   <div class="container">
      <div class="row align-items-center justify-content-center small-screen">
         <div class="col-lg-6 col-md-8 position-relative text-center page-title-extra-large"
            data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 200, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
            <h1 class="alt-font fw-400 text-dark-gray text-uppercase ls-minus-1px mb-0">Our Menu</h1>
            <h2 class="m-auto text-red fw-600 text-uppercase mb-0"><span
                  class="h-2px w-5px bg-red d-inline-block align-middle me-5px"></span>Remarkable recipes<span
                  class="h-2px w-5px bg-red d-inline-block align-middle ms-5px"></span></h2>
         </div>
      </div>
   </div>
</section>
<!-- <section class="pt-0">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-lg-7 md-mb-50px sm-mb-30px">
            <img src="{{ asset('guest/images/demo-restaurant-menu-01.png') }}" alt=""
               data-bottom-top="transform: rotate(0deg)" data-top-bottom="transform:rotate(20deg)">
         </div>
         <div class="col-xl-4 offset-xl-1 col-lg-5"
            data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
            <span class="fs-15 fw-600 text-red text-uppercase mb-25px d-block"><span
               class="w-70px xs-w-50px h-2px bg-red d-inline-block align-middle me-15px"></span>Best
            quality food</span>
            <h2 class="alt-font text-dark-gray mb-20px">Epicurean Excellence: A Feast of Flavors</h2>
            <p>Experience the epitome of gourmet dining at our restaurant. Each dish is crafted with passion and
               precision, using the finest ingredients to deliver a culinary journey that promises unparalleled
               taste and elegance. From our artisanal breads to our vibrant salads and rich curries, every item
               on our menu is designed to delight your palate and elevate your dining experience.
            </p>
            <div class="d-inline-block mt-10px xs-mt-0">
               <a href="{{ route('about') }}"
                  class="btn btn-dark-gray btn-large btn-switch-text btn-round-edge btn-box-shadow me-30px xl-me-10px xs-mb-10px">
               <span>
               <span class="btn-double-text" data-text="About restaurant">About restaurant</span>
               </span>
               </a>
               <a href="{{ route('gallery') }}"
                  class="alt-font fs-20 d-inline-block align-middle lh-0 text-dark-gray xs-mb-10px"><i
                  class="bi bi-play-circle icon-very-medium align-middle me-10px"></i>Restaurant
               Gallery</a>
            </div>
         </div>
      </div>
   </div>
</section> -->

<!-- Menu-start -->
<section class="cover-background" style="background-image: url('guest/images/demo-restaurant-home-05.jpg')">
   <div class="container">
      <div class="row justify-content-center mb-1">
         <div class="col-lg-7 text-center"
            data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
            <span class="fs-15 fw-600 text-red text-uppercase mb-10px d-block"><span
                  class="w-5px h-2px bg-red d-inline-block align-middle me-5px"></span>Choose delicious<span
                  class="w-5px h-2px bg-red d-inline-block align-middle ms-5px"></span></span>
            <!-- <h2 class="alt-font text-white">Popular menu</h2> -->
         </div>
      </div>
      <div class="row mb-6 xs-mb-8">
         <div class="col tab-style-02 fs-600">
            <ul class="nav nav-tabs fs-18 fw-500 justify-content-center text-center mb-4 sm-mb-0"
               data-anime='{"el": "childs", "rotateX": [30, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad"}'>
               <div class="swiper mySwiper">
                  <div class="swiper-wrapper">
                     @foreach ($menusWithActiveItems as $menu)
                     <li class="nav-item swiper-slide">
                        <a class="nav-linkk  {{ $loop->first ? 'active' : '' }} d-flex flex-column align-items-center"
                           data-bs-toggle="tab" href="#tab_menu_{{ $menu->id }}">
                           <img src="{{ asset($menu->image) }}" height="43" width="46"
                              class="icon-large mb-2 svg-icon" alt="{{ $menu->image_alt }}">
                           {{ $menu->name }}
                        </a>
                     </li>
                     @endforeach
                  </div>
               </div>
            </ul>
            <div class="tab-content">
               @foreach ($menusWithActiveItems as $menu)
               <div class="tab-pane fade {{ $loop->first ? 'in active show' : '' }}"
                  id="tab_menu_{{ $menu->id }}">
                  <div class="row justify-content-center">
                     @foreach ($menu->menuItems->chunk(2) as $chunk)
                     @foreach ($chunk as $key => $item)
                     @if ($loop->remaining == 1 && $loop->last)
                     {{-- This is the last item of an odd number of items, place it on the left --}}
                     <div class="col-lg-12 sm-mb-20px">
                        <ul class="pricing-table-style-12 pe-15px md-pe-0">
                           <li class="last-paragraph-no-margin d-flex align-items-start mb-4">
                              <img src="{{ asset($item->image) }}" class="rounded"
                                 alt="{{ $item->image_alt }}"
                                 style="width: 120px; height: auto;">
                              <div class="ms-30px xs-ms-3 flex-grow-1">
                                 <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                    <span
                                       class="fw-600 text-white">{{ $item->name }}</span>
                                    <div class="ms-auto fw-600 text-white">
                                       @if (is_numeric($item->price))
                                       ${{ number_format((float) $item->price, 2) }}
                                       @else
                                       ${{ number_format((float) $item->price, 2) }}
                                       @endif
                                    </div>
                                 </div>
                                 <p class="color-grey">
                                    
                                    {{ Str::limit(strip_tags(html_entity_decode($item->description)), 70) }}
                                    <button type="button"
                                       class="btn btn-link text-white p-0 ms-1"
                                       data-bs-toggle="modal"
                                       data-bs-target="#menuItemModal{{ $item->id }}">
                                       Read More
                                    </button>
                                 </p>
                              </div>
                           </li>
                        </ul>
                        <!-- Modal -->
                        <div class="modal fade" id="menuItemModal{{ $item->id }}"
                           tabindex="-1"
                           aria-labelledby="menuItemModalLabel{{ $item->id }}"
                           aria-hidden="true">
                           <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content box-shadow-quadruple-large">
                                 <div class="row g-0">
                                    <!-- Image Column -->
                                    <div class="col-12 col-md-6">
                                       <img src="{{ asset($item->image) }}"
                                          alt="{{ $item->image_alt }}" class="img-fluid">
                                    </div>
                                    <!-- Content Column -->
                                    <div class="col-12 col-md-6 modall">
                                       <div class="modal-header"
                                          style="border-bottom: 1px solid #767ea2;">
                                          <h5 class="modal-title text-dark-gray"
                                             id="menuItemModalLabel{{ $item->id }}">
                                             {{ $item->name }}
                                          </h5>
                                          <button type="button" class="btn-close"
                                             data-bs-dismiss="modal"
                                             aria-label="Close"></button>
                                       </div>
                                       <div class="modal-body">
                                          <p>{!! $item->description !!}</p>
                                          @if ($item->additions)
                                          <p><span class="pp">Add :</span> <br>
                                             {{ $item->additions }}
                                          </p>
                                          @endif
                                          <p>{{ $item->modifications }}</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     @else
                     <div class="col-lg-12 sm-mb-20px">
                        <ul
                           class="pricing-table-style-12 {{ $key == 0 ? 'ps-15px md-ps-0' : 'ps-15px md-ps-0' }}">
                           <li class="last-paragraph-no-margin d-flex align-items-start mb-4">
                              <img src="{{ asset($item->image) }}" class="rounded"
                                 alt="{{ $item->image_alt }}"
                                 style="width: 120px; height: auto;">
                              <div class="ms-30px xs-ms-3 flex-grow-1">
                                 <div class="d-flex align-items-center w-100 fs-18 mb-5px">
                                    <span
                                       class="fw-600 text-white">{{ $item->name }}</span>
                                    <div class="ms-auto fw-600 text-white">
                                       @if (is_numeric($item->price))
                                       ${{ number_format((float) $item->price, 2) }}
                                       @else
                                       ${{ number_format((float) $item->price, 2) }}
                                       @endif
                                    </div>
                                 </div>
                                 <p class="color-grey d-flex justify-content-between align-items-center w-100 m-0">
                                 <div class="d-flex justify-content-between w-100">
                                    <div class="d-flex justify-content-start flex-grow-1">

                                      
                                       {{ Str::limit(strip_tags(html_entity_decode($item->description)), 70) }}
                                       <button type="button" class="btn btn-link text-white p-0 ms-1" data-bs-toggle="modal"
                                          data-bs-target="#menuItemModal{{ $item->id }}">
                                          Read More
                                       </button>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                       <div class="cart-container" id="cart-item-{{ $item->id }}">
                                          <button class="btn btn-primary add-to-cart-btn" data-id="{{ $item->id }}" data-item="{{ $item->name }}" data-type="menu" data-price="{{ $item->price }}" data-image="{{ asset($item->image) }}" id="add-to-cart-btn-{{ $item->id }}">Add to Cart</button>
                                          <div class="quantity-container" style="display: none;" id="quantity-container-{{ $item->id }}">
                                             <button class="btn btn-secondary decrease-btn" data-id="{{ $item->id }}" id="decrease-btn-{{ $item->id }}" data-type="menu" data-price="{{ $item->price }}" data-image="{{ asset($item->image) }}">-</button>
                                             <span id="quantity-value-{{ $item->id }}">1</span>
                                             <button class="btn btn-secondary increase-btn" data-id="{{ $item->id }}" id="increase-btn-{{ $item->id }}" data-type="menu" data-price="{{ $item->price }}" data-image="{{ asset($item->image) }}">+</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 </p>
                              </div>
                           </li>
                        </ul>
                        <!-- Modal -->
                        <div class="modal fade" id="menuItemModal{{ $item->id }}"
                           tabindex="-1"
                           aria-labelledby="menuItemModalLabel{{ $item->id }}"
                           aria-hidden="true">
                           <div class="modal-dialog modal-dialog-centered modal-lg">
                              <div class="modal-content box-shadow-quadruple-large">
                                 <div class="row g-0">
                                    <!-- Image Column -->
                                    <div class="col-12 col-md-6">
                                       <img src="{{ asset($item->image) }}"
                                          alt="{{ $item->image_alt }}"
                                          class="img-fluid">
                                    </div>
                                    <!-- Content Column -->
                                    <div class="col-12 col-md-6 modall">
                                       <div class="modal-header"
                                          style="border-bottom: 1px solid #767ea2;">
                                          <h5 class="modal-title text-dark-gray"
                                             id="menuItemModalLabel{{ $item->id }}">
                                             {{ $item->name }}
                                          </h5>
                                          <button type="button" class="btn-close"
                                             data-bs-dismiss="modal"
                                             aria-label="Close"></button>
                                       </div>
                                       <div class="modal-body">

                                          <p>{!! $item->description !!}</p>

                                          @if ($item->additions)
                                          <p><span class="pp">Add :</span> <br>
                                             {{ $item->additions }}
                                          </p>
                                          @endif
                                          <p>{{ $item->modifications }}</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     @endif
                     @endforeach
                     @endforeach
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
      <div class="row justify-content-center align-items-center"
         data-anime="{ &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
         <div class="col-12 text-center last-paragraph-no-margin">
            <div
               class="d-inline-block align-middle bg-red fw-500 text-white border-radius-30px ps-20px pe-20px fs-14 me-10px sm-m-10px">
               Masterchef
            </div>
            <div class="d-inline-block align-middle text-white fs-18 fw-500">Unique and delicious dishes
               from the worlds <span class="text-decoration-line-bottom-medium fw-600">best masterchefs.</span>
            </div>
         </div>
      </div>
   </div>
   <hr class="mt-4">
</section>
@endsection
@section('page_level_script')
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- Initialize Swiper -->
<script>
   var swiper = new Swiper(".mySwiper", {
      slidesPerView: "auto", // makes it dynamic
      spaceBetween: 20,
      freeMode: true,

      breakpoints: {
         240: {
            slidesPerView: 1,
            spaceBetween: 10,
         },
         640: {
            slidesPerView: 1,
            spaceBetween: 15,
         },
         768: {
            slidesPerView: 1,
            spaceBetween: 20,
         },
         1024: {
            slidesPerView: 7, // since you only have 6
            spaceBetween: 20,
         },
      },
   });
</script>

<script>
   var swiper = new Swiper(".mySwiperr", {
      slidesPerView: 4,
      spaceBetween: 30,
      freeMode: true,
      breakpoints: {
         240: {
            slidesPerView: 1,
            spaceBetween: 10,
         },
         640: {
            slidesPerView: 1,
            spaceBetween: 20,
         },
         768: {
            slidesPerView: 1,
            spaceBetween: 30,
         },
         1024: {
            slidesPerView: 4,
            spaceBetween: 30,
         },
      },

   });

   $(document).ready(function() {
      // Load cart from localStorage and update the cart badge on page load
      loadCart();
      updateCartBadge();

      // Handle "Add to Cart" button click
      $('.add-to-cart-btn').click(function() {
         var itemId = $(this).data('id');
         var itemName = $(this).data('item');
         var menuType = $(this).data('type');
         var price = $(this).data('price');
         var image = $(this).data('image');



         var cart = JSON.parse(localStorage.getItem('cart')) || [];
         if (menuType === 'catering' && cart.some(item => item.menuType === 'menu')) {
            toastr.error("Menu items are already in the cart. No catering items can be added.");
            return;
         } else if (menuType === 'menu' && cart.some(item => item.menuType === 'catering')) {
            toastr.error("Catering items are already in the cart. No menu items can be added.");
            return;
         }

         // Hide "Add to Cart" button and show quantity controls
         $('#add-to-cart-btn-' + itemId).hide();
         $('#quantity-container-' + itemId).show();

         // Add item to cart
         addToCart(itemId, itemName, menuType, price, image);
         updateCartBadge();
      });

      // Increase quantity
      $('.increase-btn').click(function() {
         var itemId = $(this).data('id');
         var currentQuantity = parseInt($('#quantity-value-' + itemId).text());
         currentQuantity++;

         // Update quantity and cart
         $('#quantity-value-' + itemId).text(currentQuantity);
         updateCart(itemId, currentQuantity);
         updateCartBadge();
      });

      // Decrease quantity
      $('.decrease-btn').click(function() {
         var itemId = $(this).data('id');
         var currentQuantity = parseInt($('#quantity-value-' + itemId).text());

         if (currentQuantity > 1) {
            currentQuantity--;
            $('#quantity-value-' + itemId).text(currentQuantity);
            updateCart(itemId, currentQuantity);
         } else {
            // Remove from cart if quantity drops below 1
            $('#quantity-container-' + itemId).hide();
            $('#add-to-cart-btn-' + itemId).show();
            removeFromCart(itemId);
         }
         updateCartBadge();
      });

      // Add item to cart in localStorage
      function addToCart(itemId, itemName, menuType, price, image) {
         var cart = JSON.parse(localStorage.getItem('cart')) || [];
         var existingItem = cart.find(item => item.id === itemId);
         if (existingItem) {
            existingItem.quantity = 1;
         } else {
            cart.push({
               id: itemId,
               name: itemName,
               quantity: 1,
               menuType: menuType,
               price: price,
               image: image
            });
         }
         localStorage.setItem('cart', JSON.stringify(cart));
      }

      // Update item quantity in cart in localStorage
      function updateCart(itemId, quantity) {
         var cart = JSON.parse(localStorage.getItem('cart')) || [];
         var item = cart.find(item => item.id === itemId);
         if (item) {
            item.quantity = quantity;
            localStorage.setItem('cart', JSON.stringify(cart));
         }
      }

      // Remove item from cart in localStorage
      function removeFromCart(itemId) {
         var cart = JSON.parse(localStorage.getItem('cart')) || [];
         var index = cart.findIndex(item => item.id === itemId);
         if (index !== -1) {
            cart.splice(index, 1);
            localStorage.setItem('cart', JSON.stringify(cart));
         }
      }

      // Update cart badge
      // function updateCartBadge() {
      //    var cart = JSON.parse(localStorage.getItem('cart')) || [];
      //    var totalQuantity = cart.reduce((sum, item) => sum + item.quantity, 0);

      //    // Show or hide the badge based on total quantity
      //    if (totalQuantity > 0) {
      //       $('.cart-item-badge .badge').text(totalQuantity).show();
      //    } else {
      //       $('.cart-item-badge .badge').hide();
      //    }
      // }


      function updateCartBadge() {
         var cart = JSON.parse(localStorage.getItem('cart')) || [];
         var totalQuantity = cart.reduce((sum, item) => sum + item.quantity, 0);

         // Desktop
         if (totalQuantity > 0) {
            $('.cart-item-badge .badge').text(totalQuantity).show();
         } else {
            $('.cart-item-badge .badge').hide();
         }

         // Mobile
         if (totalQuantity > 0) {
            $('#mobile-cart-count').text(totalQuantity).show();
         } else {
            $('#mobile-cart-count').hide();
         }
      }


      // Load cart items and update UI on page load
      function loadCart() {
         var cart = JSON.parse(localStorage.getItem('cart')) || [];
         cart.forEach(function(item) {
            $('#add-to-cart-btn-' + item.id).hide();
            $('#quantity-container-' + item.id).show();
            $('#quantity-value-' + item.id).text(item.quantity);
         });
      }
   });
</script>
@endsection