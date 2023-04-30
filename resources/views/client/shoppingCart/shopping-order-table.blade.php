<table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                         @if(session('cart'))
                         @foreach(session('cart') as $id => $details)
                            <tr data-id="{{ $id }}">
                                <td class="align-middle">
                                    <img src="img/{{$details['image']}}" alt="" style="width: 50px;"> 
                                    <p class="align-middle">{{  $details['name'] }}</p>
                                </td>
                                <td class="align-middle">${{$details['price']}}</td>
                                <td class="align-middle">
                                    <div class="input-group mx-auto" style="width: 100px;">
                                        <input type="number" class="form-control form-control-sm bg-secondary text-center quantity update-cart" value="{{$details['quantity']}}">
                                    </div>
                                </td>
                                <td class="align-middle">${{$details['quantity']*$details['price']}}</td>
                                <td class="align-middle">
                                    <a class="btn btn-sm btn-primary" href="{{'cart/remove.from.cart/'.$details['id']}}">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                         @endforeach
                         @endif
                    </tbody>
                </table>


<script type="text/javascript">
    $(".update-cart").change(function (e) {
        e.preventDefault();
  
        var ele = $(this);
        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
              // window.location.reload();
            }
        });
    });
  
</script>