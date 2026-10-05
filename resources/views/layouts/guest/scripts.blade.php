<script type="text/javascript" src="{{ asset('guest/js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('guest/js/vendors.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('guest/js/main.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-bottom-right", // Positions toast at the bottom center
    "preventDuplicates": true,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "1500",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
};
$(document).ready(function() {
// Update cart badge

        var cart = JSON.parse(localStorage.getItem('cart')) || [];
        console.log(cart)
        var totalQuantity = cart.reduce((sum, item) => sum + item.quantity, 0);
        
        // Show or hide the badge based on total quantity
        if (totalQuantity > 0) {
            $('.cart-item-badge .badge').text(totalQuantity).show();
        } else {
            $('.cart-item-badge .badge').hide();
        }
    
});



</script>


<script>
    $(document).ready(function () {
        updateCartIconCount();

        function updateCartIconCount() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const totalCount = cart.reduce((sum, item) => sum + item.quantity, 0);

            if (totalCount > 0) {
                $('#mobile-cart-count').text(totalCount).show();
            } else {
                $('#mobile-cart-count').hide();
            }
        }
    });
</script>





