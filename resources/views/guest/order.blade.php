@extends('layouts.guest.master')

@section('page_level_style')
    <!-- Include Flatpickr CSS -->

    <link rel="stylesheet" href="{{ asset('guest/css/flatpickr.css') }}" />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        @media (min-width: 768px) {
            .head-row {
                margin-top: 3.5%;
            }
        }
        .menuu-item {
    top: 16px;
    height: 40px;
    position: relative;
    padding-left: 2%; }

    .pt-cardds {
    padding: 0 1% 1% 1%; 
}


        .invalid-feedback {
            width: 100%;
            font-size: .875em;
            color: #ff0707 !important;
            margin: 0;
            position: relative;
            top: -25px;
            font-size: 11px;
        }

        .text-special {
            width: 100%;
            font-size: .875em;
            color: #ff0707 !important;
            margin: 0;
            position: relative;
            top: 0px;
            font-size: 11px;
        }
    </style>
    <style>
        .loader {
            display: none;
            /* Hide the loader by default */
            position: fixed;
            left: 43%;
            top: 40%;
            transform: translate(-50%, -50%);
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            width: 120px;
            height: 120px;
            animation: spin 2s linear infinite;
            z-index: 99999999;

        }

        @media (max-width: 768px) {
            .loader {
                width: 80px;
                height: 80px;
                border: 12px solid #f3f3f3;
                left: 39%;
                border-top: 12px solid #3498db;
            }
        }

        @media (max-width: 480px) {
            .loader {
                width: 60px;
                left: 39%;
                height: 60px;
                border: 8px solid #f3f3f3;
                border-top: 8px solid #3498db;
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
@endsection

@section('content')
    <div class="loader" id="loader"></div>
    <section class="ipad-top-space-margin page-title-big-typography cover-background p-0 md-background-position-left-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bg-white box-shadow-extra-large border-radius-6px position-relative p-8">
                        <img src="{{ asset('guest/images/demo-restaurant-about-title-bg.jpg') }}"
                            class="position-absolute right-0px top-0px" alt="" data-no-retina="" />
                        <form name="contactForm" id="msform" class="contact-form-style-03 position-relative">

                            <div class="row">
                                <div class="col-12 text-center mb-5 head-row">
                                    <span class="fs-15 alt-font fw-600 text-base-color text-uppercase ls-3px">Book Your
                                        Exclusive Table</span>
                                    <h1 class="alt-font text-dark-gray mb-0 ls-minus-1px">Reserve Your Spot for an
                                        Unforgettable Meal</h1>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="reservationName"
                                        class="form-label fs-14 text-uppercase text-dark-gray primary-font fw-500 mb-0">Name*</label>
                                    <div class="position-relative form-group mb-25px">
                                        <span class="form-icon"><i class="bi bi-person"></i></span>
                                        <input
                                            class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control required"
                                            id="name" type="text" name="name" placeholder="Enter your name" />

                                    </div>
                                    <div id="name" class="invalid-feedback"></div>
                                </div>
                                <div class="col-md-4">
                                    <label for="reservationName"
                                        class="form-label fs-14 text-uppercase text-dark-gray primary-font fw-500 mb-0">Email*</label>
                                    <div class="position-relative form-group mb-25px">
                                        <span class="form-icon"><i class="bi bi-envelope"></i></span>
                                        <input
                                            class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control required"
                                            id="email" type="email" name="email" placeholder="Enter your email" />

                                    </div>
                                    <div id="email" class="invalid-feedback"></div>
                                </div>
                                <div class="col-md-4">
                                    <label for="reservationPhone"
                                        class="form-label fs-14 text-uppercase text-dark-gray primary-font fw-500 mb-0">Phone
                                        Number*</label>
                                    <div class="position-relative form-group mb-25px">
                                        <span class="form-icon"><i class="bi bi-phone"></i></span>
                                        <input
                                            class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control required"
                                            id="phone_no" type="number" name="phone_no"
                                            placeholder="Enter your phone number" />

                                    </div>
                                    <div id="phone_no" class="invalid-feedback"></div>
                                </div>
                                <div class="col-md-6">
                                    <label for="reservationDate"
                                        class="form-label fs-14 text-uppercase text-dark-gray primary-font fw-500 mb-0">Date*</label>
                                    <div class="position-relative form-group mb-25px">
                                        <span class="form-icon"><i class="bi bi-calendar"></i></span>
                                        <input
                                            class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control required"
                                            type="text" id="date" name="date" placeholder="Select a date" />

                                    </div>
                                    <div id="date" class="invalid-feedback"></div>
                                </div>
                                <div class="col-md-6">
                                    <label for="reservationTime"
                                        class="form-label fs-14 text-uppercase text-dark-gray primary-font fw-500 mb-0">Time*</label>
                                    <div class="position-relative form-group mb-25px">
                                        <span class="form-icon"><i class="bi bi-clock"></i></span>
                                        <input
                                            class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control required"
                                            type="text" id="time" name="time" placeholder="Enter time" />

                                    </div>
                                    <div id="time" class="invalid-feedback"></div>
                                </div>
                                <div class="container card pt-cardds">
                                <div class="row">
                                    <div class="col-6 fs-14 text-uppercase text-dark-gray primary-font fw-500 mb-0 mt-1">Menu</div>
                                    <div class="col-6 fs-14 text-uppercase text-dark-gray primary-font fw-500 mb-0 mt-1">Quantity</div>
                                </div>
                                <div id="selected-items-container" class="mt-2"></div>
                            </div>

                            <div class="col-12 mb-30px mt-4">
                                        <label for="cateringItems" class="form-label fs-14 text-uppercase text-dark-gray primary-font fw-500 mb-0">
                                            Menu Items*</label>
                                        <div class="position-relative form-group mb-25px">
                                            <span class="form-icon"><i class="bi bi-journal-text"></i></span>
                                            <select class="p-2 border-radius-0px border-color-extra-medium-gray bg-transparent form-control required"
                                                    id="menu_items" name="menu_items[]" multiple="multiple">
                                                <option value="" disabled>Select menu items</option>
                                                @foreach ($catering_items as $catering_items)
                                                    <option value="{{ $catering_items->name }}">{{ $catering_items->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div id="menu_items" class="invalid-feedback"></div>
                            </div>
                                <div class="col-12 mb-30px">
                                    <label for="specialRequests"
                                        class="form-label fs-14 text-uppercase text-dark-gray primary-font fw-500 mb-0">Special
                                        Requests</label>
                                    <div class="position-relative form-group form-textarea mb-0">
                                        <textarea class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control"
                                            name="special_request" id="special_request" placeholder="Any special requests" rows="3"></textarea>

                                        <span class="form-icon"><i class="bi bi-chat-square-dots"></i></span>
                                    </div>
                                    <div id="special_request" class="invalid-feedback text-special"></div>
                                </div>
                                <div class="col-md-8 sm-mb-30px">
                                    <p class="mb-0 fs-14 lh-24 w-80 md-w-100">
                                        We are committed to protecting your privacy. We will never
                                        collect information about you without your explicit
                                        consent.
                                    </p>
                                </div>
                                <div class="col-md-4 text-md-end">
                                    <input id="exampleInputEmail5" type="hidden" name="redirect" value="" />
                                    <button class="btn btn-small btn-dark-gray btn-box-shadow btn-round-edge"
                                        type="submit">Submit</button>
                                </div>
                                <div class="col-12">
                                    <div class="form-results mt-20px d-none"></div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('page_level_script')
    <!-- Include Flatpickr JS -->

    <script src="{{ asset('guest/js/flatpickr.js') }}"></script>
    <script type="text/javascript" src="{{ asset('guest/js/select.js') }}"></script>

    <script>

$(document).ready(function() {
    var textareaField = $('#special_request');

    // Initially add 'is-invalid' if the field is empty
    
    // Listen for input events to toggle validation classes based on content
    textareaField.on('input', function() {
        toggleValidationClass($(this).val());
    });

    // Function to toggle validation classes
    function toggleValidationClass(value) {
        if (value.trim() !== '') {
            // If there is content, mark as valid
            textareaField.removeClass('is-invalid').addClass('is-valid');
        } else {
            // If empty, mark as invalid
            textareaField.removeClass('is-valid').addClass('is-invalid');
        }
    }
});

   $(document).ready(function() {
    var itemQuantities = {}; // Store selected item quantities

    // Initialize Select2
    $('#menu_items').select2();

    // Handle change event for the catering items select box
    $('#menu_items').change(function() {
        var selectedItems = $(this).val(); // Get selected values
        var container = $('#selected-items-container'); // Container to append selected items

        // Check if any items are selected
        if (selectedItems && selectedItems.length > 0) {
            $.each(selectedItems, function(index, item) {
                // If the item is not already appended, add it with a default quantity of 1
                if (!itemQuantities[item]) {
                    itemQuantities[item] = 1; // Default quantity

                    // Append item with quantity input field
                    container.append(`
                        <div class="row selected-item" id="item-${item}">
                            <div class="col-6">
                                <label class="form-label fs-14 text-uppercase text-dark-gray primary-font fw-500 mb-0 card menuu-item">
                                    ${item}
                                </label>
                            </div>
                            <div class="col-5" style="margin-left: 20px;">
                                <input type="number" class="ps-0 card border-radius-0px border-color-extra-medium-gray quantity-input"
                                       name="quantities[${item}]"
                                       placeholder="Enter quantity" min="1" value="${itemQuantities[item]}" required oninput="validateQuantity(this)">
                            </div> 
                        </div>
                    `);
                }
            });

            // Loop through existing items and remove those that are no longer selected
            $('.selected-item').each(function() {
                var itemId = $(this).attr('id').replace('item-', '');
                if (!selectedItems.includes(itemId)) {
                    $(this).remove();
                    delete itemQuantities[itemId]; // Remove from itemQuantities
                }
            });

            // Show the selected items container
            container.parent().show();
        } else {
            // If no items are selected, clear the container and reset itemQuantities
            container.empty();
            itemQuantities = {};
            container.parent().hide();
        }
    });

    // Function to validate the quantity input and prevent it from being 0 or less
    // window.validateQuantity = function(input) {
    //     let value = Number(input.value);
    //     console.log(value)
    //     let itemName = $(input).attr('name').match(/\[([^\]]+)\]/)[1]; // Extract item name

    //     // Check if the value is valid and greater than or equal to 1
    //     if (isNaN(value) || value < 1) {
    //         input.setCustomValidity("Please enter a number greater than or equal to 1.");
    //         input.value = 1; // Reset to default valid value of 1
    //     } else {
    //         input.setCustomValidity("");
    //         itemQuantities[itemName] = value; // Update the item quantity
    //     }
    // };

    // Hide the selected items container on page load
    $('#selected-items-container').parent().hide();
});


</script>
    <script>
        // Initialize Flatpickr for date
        flatpickr("#date", {
            dateFormat: "Y-m-d",
            minDate: "today"
        });

        // Initialize Flatpickr for time
        flatpickr("#time", {
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i"
        });
    </script>

<script>
    $(document).ready(function() {
    // Initialize flatpickr (if not already initialized)
    $("#time").flatpickr({
        enableTime: true, // Example configuration
        noCalendar: true, // Just time picker
        time_24hr: true,
        onChange: function(selectedDates, dateStr, instance) {
            toggleValidationClass(dateStr);
        }
    });

    // Function to toggle validation class
    function toggleValidationClass(value) {
        var inputField = $('#time');
        
        if (value.trim() !== '') {
            // Remove 'is-invalid' and add 'is-valid'
            inputField.removeClass('is-invalid').addClass('is-valid');
        } else {
            // Revert to 'is-invalid' if no value
            inputField.removeClass('is-valid').addClass('is-invalid');
        }
    }

    // Listen to manual input changes as well, in case user types directly
    $('#time').on('input', function() {
        toggleValidationClass($(this).val());
    });
});

</script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {
            $('#msform').on('submit', function(event) {
                event.preventDefault(); // Prevent default form submission
                var formData = new FormData(this); // Create FormData object from form
                $('#loader').show(); // Show the loader
                $.ajax({
                    url: '{{ route('order-now.submit') }}', // Specify your Laravel route for form submission
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        // Handle success response
                        $('#loader').hide();
                        $('#msform')[0].reset();
                        $('.invalid-feedback').text('');
                        $('#msform .is-invalid').removeClass('is-invalid');
                        Swal.fire({
                            title: 'Thanks!',
                            text: 'Thanks, you will receive a confirmation email within 10 to 15 minutes!',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        });
                        setTimeout(function() {
                        location.reload();
                        }, 2000); // 2000 milliseconds = 2 seconds
                    },
                    error: function(xhr, status, error) {
                        $('#loader').hide();
                        // Handle error response
                        var errors = xhr.responseJSON.errors;
                        $('.invalid-feedback').removeClass('d-block').addClass('d-none').text(
                            '');
                        $('#msform .is-invalid').removeClass('is-invalid');

                        $.each(errors, function(key, value) {
                            var $element = $('#' + key + '.invalid-feedback');

                            if ($element.length > 0) {
                                $('[name="' + key + '"]').addClass('is-invalid');
                                $element.text(value[0]);
                                $element.removeClass('d-none').addClass('d-block');
                            }
                        });
                    }
                });
            });
        });
    </script>
@endsection
