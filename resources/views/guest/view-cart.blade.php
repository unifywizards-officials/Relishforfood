@extends('layouts.guest.master')
@section('content')
<style>
    .empty-cart {
        font-size: 28px;
        font-weight: 600;
        background-color: beige;
        padding: 10px 15px;
    }

    .small-screen {
        height: 280px !important;
    }

    .coupon-code-panel input {
        margin: 0;
        border: none;
        border: 1px dashed #716a6a !important;
    }

    .coupon-code-panel.empty-cart-style {
        font-size: 20px;
        color: #b00;
        font-weight: bold;
        opacity: 0.7;
    }

    .form-control,
    .form-select,
    input,
    select,
    textarea {
        padding: 12px;
    }

    @media screen and (max-width: 767px) {
        .mobile-redirect-button {
            flex-direction: column;
        }

        .mobile-redirect-button a {
            margin: 10px 0;
        }
    }

    @media (max-width: 767px) {
        .cart-products tbody tr td::before {
            content: attr(data-title) !important;
            font-weight: 500 !important;
            float: left !important;
            display: block !important;
            color: var(--dark-gray);
            font-size: 15px;
        }
    }
</style>

<section class="ipad-top-space-margin page-title-big-typography cover-background p-0 md-background-position-left-center"
    style="background-image: url(guest/images/demo-restaurant-about-title-bg.jpg)">
    <div class="container">
        <div class="row align-items-center justify-content-center small-screen">
            <div class="col-lg-6 col-md-8 position-relative text-center page-title-extra-large">
                <h1 class="alt-font fw-400 text-dark-gray text-uppercase ls-minus-1px mb-0">Your Cart</h1>
                <h2 class="m-auto text-red fw-600 text-uppercase mb-0"><span
                        class="h-2px w-5px bg-red d-inline-block align-middle me-5px"></span>Review your items before checkout
                    <span class="h-2px w-5px bg-red d-inline-block align-middle ms-5px"></span>
                </h2>
            </div>
        </div>
    </div>
</section>


<section class="py-0 sm-pb-100px">
    <div class="container">
        <div class="row align-items-start justify-content-center">
            <div class="col-lg-8 pe-50px md-pe-15px md-mb-50px xs-mb-35px">
                <div class="cart-empty-message" style="text-align: center; display: none;">
                    <img src="{{ asset('images/empty_cart.jpg') }}" alt="Empty Cart">
                    <p class="empty-cart">Your cart is empty.</p>
                </div>

                <table class="table cart-products">
                    <thead>
                        <tr>
                            <th></th>
                            <th class="alt-font fw-600">Product</th>
                            <th class="alt-font fw-600">Price</th>
                            <th class="alt-font fw-600">Quantity</th>
                            <th class="alt-font fw-600">Total</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>

                <!-- <div class="coupon-code-panel mt-3">
                    <input type="text" class="bg-white border-radius-4px" placeholder="Coupon code" id="promo-code-input">
                    <a href="#" class="btn apply-coupon-btn fs-13 fw-600 text-uppercase" id="apply-promo-btn">Apply</a>
                    <div id="promo-message" style="margin-top:8px;font-size:14px;"></div>
                </div> -->

                <div class="mt-20px text-center text-md-end sm-mt-15px">
                    <div class="d-flex justify-content-md-center mobile-redirect-button align-items-center">
                        <a href="#" class="btn btn-small border-1 btn-round-edge btn-transparent-light-gray text-transform-none me-3" onclick="clearCart()">Clear cart</a>
                        <a href="{{ route('menu') }}" class="btn btn-small border-1 btn-round-edge btn-transparent-light-gray text-transform-none me-3">Go To Menu</a>
                        <a href="{{ route('catering_menu') }}" class="btn btn-small border-1 btn-round-edge btn-transparent-light-gray text-transform-none me-3">Go To Catering Menu</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4" id="cart-totals-section">
                <div class="bg-very-light-gray border-radius-6px p-50px xl-p-30px lg-p-25px">
                    <span class="fs-26 alt-font fw-600 text-white mb-5px d-block">Cart totals</span>
                    <table class="w-100 total-price-table" style="display: none;">
                        <tbody>
                            <tr>
                                <th class="w-45 fw-500 text-white alt-font">Subtotal</th>
                                <td class="text-white fw-600 subtotal">$0.00</td>
                            </tr>
                            <tr class="promo-discount-row" style="display:none;">
                                <th class="fw-500 text-white alt-font">Discount</th>
                                <td class="text-white fw-600 promo-discount">-$0.00</td>
                            </tr>
                            <tr class="total-amount">
                                <th class="fw-500 text-white alt-font pb-0">Total</th>
                                <td class="pb-0" data-title="Total">
                                    <h6 class="d-block fw-500 text-white alt-font grand-total">$0.00</h6>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{ route('checkout') }}" class="btn btn-base-color btn-extra-large btn-switch-text btn-round-edge btn-box-shadow w-100 text-transform-none mt-25px">
                        <span>
                            <span class="btn-double-text" data-text="Review your cart, proceed securely">Review your cart, proceed securely</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('page_level_script')
<script>
    let promoApplied = false;
    let promoDiscount = 0;
    let promoCode = '';

    $(document).ready(function() {
        renderCartTable();
        updateCartIconCount();
        checkCartStatus();

        $('#apply-promo-btn').on('click', function(e) {
            e.preventDefault();
            const code = $('#promo-code-input').val().trim();
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const hasCatering = cart.some(item => item.menuType === 'catering');
            const promoMsg = $('#promo-message');


            $('#apply-promo-btn').on('click', function(e) {
                e.preventDefault();
                const code = $('#promo-code-input').val().trim();
                const cart = JSON.parse(localStorage.getItem('cart')) || [];
                const hasCatering = cart.some(item => item.menuType === 'catering');
                const promoMsg = $('#promo-message');

                if (code.toLowerCase() === 'relishfam') {
                    if (hasCatering) {
                        promoApplied = true;
                        promoDiscount = 0.10;
                        promoCode = code;

                        promoMsg.text('Promo code applied! 10% discount on catering items will be applied to your final invoice by our team during processing.')
                            .css('color', 'green');

                        localStorage.setItem('promoCodeData', JSON.stringify({
                            code: promoCode,
                            is_applied: true,
                            discountAmount: 0,
                            discountRate: promoDiscount,
                            finalAmount: null
                        }));
                    } else {
                        promoApplied = false;
                        promoDiscount = 0;
                        promoCode = '';
                        localStorage.removeItem('promoCodeData');

                        promoMsg.text('Promo code only valid for catering menu items.').css('color', 'red');
                    }
                } else {
                    promoApplied = false;
                    promoDiscount = 0;
                    promoCode = '';
                    localStorage.removeItem('promoCodeData');

                    promoMsg.text('Invalid promo code. Please try again.').css('color', 'red');
                }

                renderCartTable();
            });




        });

        function renderCartTable() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const tbody = $('.cart-products tbody');
            const totalPriceTable = $('.total-price-table');
            const cartTotalsSection = $('#cart-totals-section');
            tbody.empty();

            if (cart.length === 0) {
                $('.cart-products').hide();
                $('.cart-empty-message').show();
                totalPriceTable.hide();
                cartTotalsSection.hide();
                $('.coupon-code-panel').addClass('empty-cart-style');
                return;
            }

            $('.coupon-code-panel').removeClass('empty-cart-style');
            $('.cart-products').show();
            $('.cart-empty-message').hide();
            totalPriceTable.show();
            cartTotalsSection.show();

            let subtotal = 0;

            cart.forEach((item) => {
                const itemTotal = item.price * item.quantity;
                subtotal += itemTotal;

                tbody.append(`
                    <tr>
                        <td><a href="#" onclick="removeItem(event, ${item.id})">×</a></td>
                        <td data-title="Name">${item.name}</td>
                        <td data-title="Price">$${parseFloat(item.price).toFixed(2)}</td>
                        <td data-title="Quantity">
                            <button onclick="decreaseQuantity(${item.id})">-</button>
                            <input type="text" value="${item.quantity}" readonly style="width:50px;">
                            <button onclick="increaseQuantity(${item.id})">+</button>
                        </td>
                        <td data-title="Total">$${parseFloat(itemTotal).toFixed(2)}</td>
                    </tr>
                `);
            });

            updateCartTotals(subtotal);
        }

        function updateCartTotals(subtotal) {
            $('.subtotal').text(`$${subtotal.toFixed(2)}`);
            $('.promo-discount-row').hide();
            $('.grand-total').text(`$${subtotal.toFixed(2)}`);

            localStorage.setItem('promoCodeData', JSON.stringify({
                code: promoApplied ? promoCode : null,
                discountAmount: 0,
                discountRate: 0,
                finalAmount: parseFloat(subtotal.toFixed(2))
            }));
        }

        window.increaseQuantity = function(id) {
            updateQuantity(id, 1);
        }

        window.decreaseQuantity = function(id) {
            updateQuantity(id, -1);
        }

        function updateQuantity(id, change) {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const item = cart.find(i => i.id === id);
            if (item) {
                item.quantity = Math.max(1, item.quantity + change);
                localStorage.setItem('cart', JSON.stringify(cart));
                renderCartTable();
                updateCartIconCount();
            }
        }

        window.removeItem = function(e, id) {
            e.preventDefault();
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart = cart.filter(item => item.id !== id);
            localStorage.setItem('cart', JSON.stringify(cart));
            renderCartTable();
            updateCartIconCount();
        }

        window.clearCart = function() {
            localStorage.removeItem('cart');
            localStorage.removeItem('promoCodeData');
            promoApplied = false;
            promoDiscount = 0;
            promoCode = '';
            $('#promo-message').text('');
            $('#promo-code-input').val('').prop('readonly', false);
            $('#apply-promo-btn').prop('disabled', false).text('Apply');
            renderCartTable();
            updateCartIconCount();
        }

        function updateCartIconCount() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const count = cart.reduce((sum, i) => sum + i.quantity, 0);
            $('.cart-item-badge .badge').text(count).toggle(count > 0);
            $('#mobile-cart-count').text(count).toggle(count > 0);
        }

        function checkCartStatus() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            $('.cart-empty-message').toggle(cart.length === 0);
        }
    });
</script>
@endsection