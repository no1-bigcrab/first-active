<!-- Vendor Start -->
<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel vendor-carousel">
                @foreach ($vendors as $vendor)
                    <div class="vendor-item border p-4">
                        <a href="#"><img src="img/{{ $vendor->image }}" alt=""></a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->