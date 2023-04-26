<!-- Shop Product Start -->
            <div class="col-lg-9 col-md-12">
                <div class="row pb-3">
                    @include('client.shop.shop-action')
                        @foreach ($products as $key => $product)
                            <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                                <div class="card product-item border-0 mb-4">
                                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                        <img class="img-fluid w-100" src="img/{{ isset($product->images[0])?$product->images[0]->image:"cat-5.jpg" }}" alt="">
                                    </div>
                                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                        <h6 class="text-truncate mb-3">{{ $product->title }}</h6>
                                        <div class="d-flex justify-content-center">
                                            <h6>${{{ $product->sale_price }}}.00</h6><h6 class="text-muted ml-2"><del>${{ $product->price }}.00</del></h6>
                                        </div>
                                    </div>
                                    <div class="card-footer d-flex justify-content-between bg-light border">
                                        <a href="/products/product_id/{{ $product->id }}" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                        <a href="" class="btn btn-sm text-dark p-0 add_to_cart"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @include('client.shop.shop-pagination')
                </div>
            </div>
            <!-- Shop Product End -->