<!-- Checkout Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                @include('.client.checkout.checkout-billing-address')
                @include('.client.checkout.checkout-shipping-address')
            </div>
            <div class="col-lg-4">
                @include('.client.checkout.checkout-order-total')
                @include('.client.checkout.checkout-payment')
            </div>
        </div>
    </div>
    <!-- Checkout End -->