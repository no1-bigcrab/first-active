 <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                @include('client.shoppingCart.shopping-order-table')
            </div>
            <div class="col-lg-4">
                @include('client.shoppingCart.shopping-form-coupon')
                @include('client.shoppingCart.shopping-cart-summary')
            </div>
        </div>
    </div>
    <!-- Cart End -->