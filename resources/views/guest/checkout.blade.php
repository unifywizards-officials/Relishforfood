@extends('layouts.guest.master')
@section('page_level_style')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<style>
    .terms-condition-box {
        cursor: pointer;
    }

    .collapse {
        display: none;
    }

    .collapse.show {
        display: block;
    }

    .form-control,
    .form-select,
    input,
    select,
    textarea {
        color: #7b7a7a !important;
    }
</style>

<style>
    .marquee-container {
        width: 100%;
        overflow: hidden;
        white-space: nowrap;
    }

    .marquee-container img {
        display: inline-block;
        animation: scroll-right 3s linear infinite;
        width: 250px;
    }

    body {
        font-size: 17px;
        line-height: 30px;
        background-color: #fbfbfb;
    }

    @keyframes scroll-right {
        0% {
            transform: translateX(-60%);
        }

        100% {
            transform: translateX(420%);
        }
    }

    .delivery-scooter {
        position: absolute;
        bottom: 0;
        z-index: 999;

    }

    @media screen and (max-width : 786px) {

        .marquee-container img {
            display: inline-block;
            animation: scroll-right 6s linear infinite;
            width: 150px;
        }

        .delivery-scooter {

            bottom: 0%;
            top: auto;


        }
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
                <h1 class="alt-font fw-400 text-dark-gray text-uppercase ls-minus-1px mb-0">Your Cart</h1>
                <h2 class="m-auto text-red fw-500 text-uppercase mb-0"><span
                        class="h-2px w-5px bg-red d-inline-block align-middle me-5px"></span>Review your items before checkout
                    <span class="h-2px w-5px bg-red d-inline-block align-middle ms-5px"></span>
                </h2>
            </div>
        </div>
    </div>
</section>
<section class="py-0 sm-pb-100px">
    <div class="container position-relative">
        <div class="marquee-container delivery-scooter" id="loader" behavior="scroll" direction="right" style="display:none;">
            <img src="{{ asset('images/order-loader.gif') }}" alt="Loading...">
        </div>
        <div class="row align-items-start">
            <div class="col-lg-7 pe-50px md-pe-15px md-mb-50px xs-mb-35px">
                <span class="fs-26 alt-font fw-500 text-dark-gray mb-20px d-block">Billing details</span>




                <!-- Individual Form -->
                <div id="individualForm" style="display: none;">
                    <!-- Content for Individual -->
                    <div class="row mb-30px mt-15px">
                        <div class="col-md-6 mb-15px">
                            <label class="mb-10px">First name <span class="text-red">*</span></label>
                            <input class="border-radius-4px input-small" name="first_name" id="first_name" type="text" required="">
                            <div id="first_name" class="invalid-feedback"></div>
                        </div>
                        <div class="col-md-6 mb-15px">
                            <label class="mb-10px">Last name <span class="text-red">*</span></label>
                            <input class="border-radius-4px input-small" name="last_name" type="text" id="last_name" required="">
                            <div id="last_name" class="invalid-feedback"></div>

                        </div>
                        <div class="col-md-6 mb-15px">
                            <label class="mb-10px">Phone number <span class="text-red">*</span></label>
                            <input class="border-radius-4px input-small" name="phone_no" id="phone_no" type="text" required="">
                            <div id="phone_no" class="invalid-feedback"></div>
                        </div>

                        <div class="col-md-6 mb-15px">
                            <label class="mb-10px">Email Address <span class="text-red">*</span></label>
                            <input class="border-radius-4px input-small" name="email" id="email" type="email" required="">
                            <div id="email" class="invalid-feedback"></div>
                        </div>


                        <!-- <div class="col-12 mb-15px">
                <label class="mb-10px">Address <span class="text-red">*</span></label>
                <input class="border-radius-4px input-small mb-20px" type="text" placeholder="House number and street name">
                <input class="border-radius-4px input-small" type="text" placeholder="Apartment, suite, unit etc. (optional)">
            </div>
            <div class="col-12">
                <label class="mb-10px">ZIP <span class="text-red">*</span></label>
                <input class="border-radius-4px input-small" type="text" required="">
            </div> -->
                        <div class="col-12 mb-15px">
                            <label class="mb-10px">Choose Date and Time <span class="text-red">*</span></label>
                            <input id="datetime" class="border-radius-4px input-small datetime" name="datetime" type="text" required="" placeholder="Select date and time">
                        </div>
                        <div id="datetime" class="invalid-feedback"></div>
                        <div class="col-12 mb-15px">
                            <label class="mb-10px">Special Request <span class="text-red">*</span></label>
                            <textarea id="special_request" class="border-radius-4px input-small" name="special_request" required="" placeholder="Any Special Request"></textarea>
                        </div>
                        <div id="special_request" class="invalid-feedback"></div>
                    </div>
                </div>

                <!-- Company Form -->
                <div id="companyForm" style="display: none;">
                    <!-- Content for Company -->
                    <div class="row mb-30px mt-15px">
                        <div class="col-md-6 mb-15px">
                            <label class="mb-10px">First name <span class="text-red">*</span></label>
                            <input class="border-radius-4px input-small" name="f_name" id="f_name" type="text" required="">
                            <div id="f_name" class="invalid-feedback"></div>
                        </div>
                        <div class="col-md-6 mb-15px">
                            <label class="mb-10px">Last name <span class="text-red">*</span></label>
                            <input class="border-radius-4px input-small" name="l_name" id="l_name" type="text" required="">
                            <div id="l_name" class="invalid-feedback"></div>
                        </div>
                        <div class="col-md-6 mb-15px">
                            <label class="mb-10px">Company Name <span class="text-red">*</span></label>
                            <input class="border-radius-4px input-small" name="company_name" id="company_name" type="text" placeholder="Company Name">
                            <div id="company_name" class="invalid-feedback"></div>
                        </div>

                        <div class="col-md-6 mb-15px">
                            <label class="mb-10px">Company Email <span class="text-red">*</span></label>
                            <input class="border-radius-4px input-small" name="company_email" id="company_email" type="email" placeholder="Company Email">
                            <div id="company_email" class="invalid-feedback"></div>
                        </div>
                        <div class="col-12 mb-15px">
                            <label class="mb-10px">Address <span class="text-red">*</span></label>
                            <input class="border-radius-4px input-small mb-20px" name="company_address" id="company_address" type="text" placeholder="House number and street name">
                            <div id="company_address" class="invalid-feedback"></div>
                            <input class="border-radius-4px input-small" type="text" name="company_suite" id="company_suite" placeholder="Apartment, suite, unit etc. (optional)">
                        </div>

                        <div class="col-md-6 mb-15px">
                            <label class="mb-10px">ZIP</label>
                            <input class="border-radius-4px input-small" type="text" name="company_zip" id="company_zip" required="" placeholder="Zip">
                        </div>
                        <div class="col-md-6 mb-15px">
                            <label class="mb-10px">Client's Phone Number <span class="text-red">*</span></label>
                            <input class="border-radius-4px input-small" type="tel" name="client_phone_no" id="client_phone_no" required="" placeholder="Client's Phone Number">
                            <div id="client_phone_no" class="invalid-feedback"></div>
                        </div>

                        <div class="col-12 mb-15px">
                            <label class="mb-10px">Choose Date and Time <span class="text-red">*</span></label>
                            <input id="deliverytime" class="border-radius-4px input-small datetime" name="deliverytime" id="deliverytime" type="text" required="" placeholder="Select date and time">
                            <div id="deliverytime" class="invalid-feedback"></div>
                        </div>
                        <div class="col-12 mb-15px">
                            <label class="mb-10px">Special Dietary Requirement <span class="text-red">*</span></label>
                            <textarea id="special_dietary" class="border-radius-4px input-small" name="special_dietary" required="" placeholder="Any Special Request"></textarea>
                            <div id="special_dietary" class="invalid-feedback"></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="bg-very-light-gray border-radius-6px p-50px lg-p-25px your-order-box">
                    <span class="fs-26 alt-font fw-500 text-white mb-5px d-block">Your order</span>

                    <table class="w-100 total-price-table your-order-table">
                        <tbody>
                            <tr>
                                <th class="w-60 lg-w-55 xs-w-50 fw-500 text-white alt-font">Product</th>
                                <td class="fw-500 text-white alt-font">Total</td>
                            </tr>
                            <!-- Cart items will be inserted here dynamically -->

                            <tr class="total-amount">
                                <th class="fw-500 text-white alt-font">Total</th>
                                <td data-title="Total">
                                    <h6 class="d-block fw-600 mb-0 text-white alt-font grand-total">$0.00</h6>
                                </td>
                            </tr>

                            <!-- ✅ Note Row -->
                            <tr class="note-row">
                                <td colspan="2" class="pt-15px">
                                    <small class="text-white d-block text-start">
                                        <strong>Note:</strong> Delivery Charges and Dietary Charges Are Excluded.
                                    </small>

                                </td>
                            </tr>
                        </tbody>
                    </table>


                    <a href="javascript:void(0)" id="placeOrderBtn" class="btn btn-base-color btn-extra-large btn-switch-text btn-round-edge btn-box-shadow w-100 text-transform-none mt-30px">
                        <span>
                            <span class="btn-double-text" data-text="Place order">Place order</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Loader image (Initially hidden) -->



</section>
@endsection

@section('page_level_script')
<!-- Include Flatpickr CSS -->


<!-- Include Flatpickr JS -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
    // Initialize Flatpickr on the input with id 'datetime-picker'
    flatpickr(".datetime", {
        enableTime: true,
        dateFormat: "Y-m-d H:i", // Adjust the format as per your preference
        minDate: "today", // Disable past dates
        time_24hr: true // Use 24-hour format
    });
</script>

<script>
    // Function to render cart items
    function renderCartItems() {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        const cartTableBody = document.querySelector('.your-order-table tbody');
        const totalRow = document.querySelector('.total-amount');
        let grandTotal = 0;

        // Clear existing product rows
        cartTableBody.querySelectorAll('.product, .discount-row, .gst-row').forEach(row => row.remove());

        // Loop through cart items and create rows
        cart.forEach(item => {
            const {
                name,
                price,
                quantity
            } = item;
            const totalPrice = price * quantity;
            grandTotal += totalPrice;

            const row = document.createElement('tr');
            row.classList.add('product');
            row.innerHTML = `
            <td class="product-thumbnail">
                <a href="javascript:void(0);" class="text-white fw-500 d-block lh-initial">${name} x ${quantity}</a>
            </td>
            <td class="product-price" data-title="Price">$${totalPrice.toFixed(2)}</td>
        `;
            cartTableBody.insertBefore(row, totalRow);
        });

        const promoData = JSON.parse(localStorage.getItem('promoCodeData') || 'null');
        let discountAmount = 0;

        if (promoData && promoData.code && promoData.code.trim() !== "") {
            discountAmount = parseFloat(promoData.discountAmount) || 0;

            const discountRow = document.createElement('tr');
            discountRow.classList.add('discount-row');
            discountRow.innerHTML = `
            <th class="fw-500 text-white alt-font">Discount (${promoData.code})</th>
            <td class="fw-500 text-white alt-font text-green">After Invoice</td>
        `;
            cartTableBody.insertBefore(discountRow, totalRow);
        }

        const subtotalAfterDiscount = grandTotal - discountAmount;

        // ✅ Calculate GST @15%
        const gstAmount = subtotalAfterDiscount * 0.15;

        // ✅ Add GST row
        const gstRow = document.createElement('tr');
        gstRow.classList.add('gst-row');
        gstRow.innerHTML = `
        <th class="fw-500 text-white alt-font">GST (15%)</th>
        <td class="fw-500 text-white alt-font">$${gstAmount.toFixed(2)}</td>
    `;
        cartTableBody.insertBefore(gstRow, totalRow);

        const finalTotal = subtotalAfterDiscount + gstAmount;
        document.querySelector('.grand-total').textContent = `$${finalTotal.toFixed(2)}`;
    }


    // Call function to render cart items when the page loads
    document.addEventListener('DOMContentLoaded', renderCartItems);
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Retrieve and parse the data from local storage
        const cartData = JSON.parse(localStorage.getItem('cart') || '[]');

        // Check if any item in the cart has "menuType" equal to "menu"
        const hasMenuTypeMenu = cartData.some(item => item.menuType === "menu");

        // Get the form elements
        const individualForm = document.getElementById('individualForm');
        const companyForm = document.getElementById('companyForm');

        // Show or hide forms based on the condition
        if (hasMenuTypeMenu) {
            // Show Individual form only
            individualForm.style.display = 'block';
            companyForm.style.display = 'none';
            console.log("Showing Individual Form");
        } else {
            // Show Company form only
            individualForm.style.display = 'none';
            companyForm.style.display = 'block';
            console.log("Showing Company Form");
        }
    });
</script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

<script>
    $(document).ready(function() {
        $('#placeOrderBtn').on('click', function(event) {
            event.preventDefault();

            // Show loader when the button is clicked
            $('#loader').show();
            $('#placeOrderBtn .btn-double-text').text('Please wait...');
            $('#placeOrderBtn').prop('disabled', true);

            // Retrieve cart data from localStorage
            let cartData = JSON.parse(localStorage.getItem('cart'));

            // Check if cartData is available
            if (!cartData || cartData.length === 0) {
                toastr.error("Your cart is empty!");
                $('#loader').hide();
                $('#placeOrderBtn .btn-double-text').text('Place Order');
                $('#placeOrderBtn').prop('disabled', false);
                return;
            }

            // Check if cart has 'menu' or 'catering' items
            let hasMenuType = cartData.length > 0 ? cartData[0].menuType : null;
            let url = (hasMenuType === 'catering') ?
                "{{ route('book.catering.submit') }}" :
                (hasMenuType === 'menu') ?
                "{{ route('order-now.submit') }}" :
                null;

            // Gather data for AJAX request based on menuType
            let formData = {};
            if (hasMenuType === 'menu') {
                formData = {
                    first_name: $('#first_name').val(),
                    last_name: $('#last_name').val(),
                    phone_no: $('#phone_no').val(),
                    email: $('#email').val(),
                    datetime: $('#datetime').val(),
                    special_request: $('#special_request').val(),
                };
            } else {
                formData = {
                    f_name: $('#f_name').val(),
                    l_name: $('#l_name').val(),
                    company_name: $('#company_name').val(),
                    company_email: $('#company_email').val(),
                    company_address: $('#company_address').val(),
                    company_suite: $('#company_suite').val(),
                    company_zip: $('#company_zip').val(),
                    client_phone_no: $('#client_phone_no').val(),
                    deliverytime: $('#deliverytime').val(),
                    special_dietary: $('#special_dietary').val()
                };
            }

            // Combine formData with cart data
            formData.cartData = cartData;
            const promoData = JSON.parse(localStorage.getItem('promoCodeData') || 'null');
            if (promoData) {
                formData.promo_code = promoData.code;
                formData.discount_amount = promoData.discountAmount;
            }


            // AJAX request to submit order
            $.ajax({
                url: url,
                method: 'POST',
                data: formData,
                success: function(response) {
                    $('#submitButton').hide();
                    $('#placeOrderBtn .btn-double-text').attr('data-text', 'Please wait...');
                    $('#placeOrderBtn .btn-double-text').text('Please wait...');

                    // Set a flag in localStorage
                    localStorage.setItem("orderPlaced", "true");

                    // Clear cart data from localStorage
                    localStorage.removeItem("cart");
                    localStorage.removeItem("promoCodeData");

                    // Hide loader and redirect after success
                    setTimeout(function() {
                        $('#loader').hide();
                        window.location.href = '/thankyou';
                    }, 1000);
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    var errors = xhr.responseJSON.errors;
                    $('.invalid-feedback').removeClass('d-block').addClass('d-none').text('');
                    $('#msform .is-invalid').removeClass('is-invalid');

                    $.each(errors, function(key, value) {
                        var $element = $('#' + key + '.invalid-feedback');

                        if ($element.length > 0) {
                            $('[name="' + key + '"]').addClass('is-invalid');
                            $element.text(value[0]);
                            $element.removeClass('d-none').addClass('d-block');
                        }
                    });

                    // Hide loader on error
                    $('#loader').hide();
                },
                complete: function() {
                    // Hide loader after the AJAX call is complete (either success or error)
                    $('#loader').hide();
                    $('#placeOrderBtn .btn-double-text').text('Place Order');
                    $('#placeOrderBtn').prop('disabled', false);
                    $('#submitButton').show();
                }
            });
        });
    });
</script>




@endsection