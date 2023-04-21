    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100"
                    data-toggle="collapse" href="#navbar-vertical"
                    style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                @include('.assets.client.menu-left')
            </div>
            <div class="col-lg-9">
                @include('.assets.client.menu-nav')
                @include('.assets.client.menu-slideshow')
            </div>
        </div>
    </div>
    <!-- Navbar End -->