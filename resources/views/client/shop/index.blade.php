<!DOCTYPE html>
<html lang="en">
    @include('.assets.client.head')
<body>
    @include('.assets.client.topbar')
    @include('.assets.client.navbar')
    <div class="container">
        @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
        @endif
    </div>
       <!-- Shop Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-3 col-md-12">
                @include('client.shop.shop-price')
                @include('client.shop.shop-color')
                @include('client.shop.shop-size')

            </div>
            @include('client.shop.shop-product')

        </div>
    </div>
    <!-- Shop Detail End -->
    @include('.assets.client.footer')
</body>
</html>