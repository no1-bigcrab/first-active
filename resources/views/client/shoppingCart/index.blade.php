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
    @include('client.shoppingCart.shopping-order')
    @include('.assets.client.footer')
</body>
</html>