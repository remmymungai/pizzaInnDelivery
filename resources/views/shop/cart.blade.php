@extends('layouts.scaffold')


@section('title')
Cart || Pizza Inn
@endsection


@section('content')

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif

@if (session('error'))
<div class="alert alert-danger" role="alert">
    {{ session('error') }}
</div>
@endif


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Your Cart
                </div>
                <div class="card-body">

                    @if (! Cart::isEmpty())
                    <ul class="list-group">
                        <h4>{{Cart::getContent()->count()}} item(s) in your cart</h4>

                        @foreach ($cartItems as $item)
                        <li class="list-group-item d-flex justify-content-between">
                            <div class="particulars">

                                <h6 class="my-0">{{ $item->name }}</h6>

                                <form action="{{ route('cart.remove') }}" method="post">
                                    {{ csrf_field() }}
                                    @method('DELETE')
                                    <input type="text" name="id" value="{{$item->id}}" hidden>
                                    <button type="submit" class="btn btn-link btn-sm text-muted small ml-n1">Delete
                                        Item</button>
                                </form>
                                <button type="button" id=""
                                    class="btn btn-link btn-sm text-muted small ml-n1 mt-n3 changeQty">Change
                                    Quantity</button>
                                <input type="number" name="" id="" class="cQtyIn" value="{{ $item->quantity }}" hidden>
                                <input type="number" name="" id="" class="cIdIn" value="{{ $item->id }}" hidden>

                            </div>

                            <span class="input-group-fl">
                                <span class="text-muted ">{{ $item->quantity }} * {{ $item->model->presentPrice() }}
                                </span>
                            </span>
                        </li>
                        @endforeach

                        <li class="list-group-item d-flex justify-content-between">
                            <div>
                                <h6 class="my-0">Subtotal Cost:</h6>
                                <small class="text-muted"></small>
                            </div>

                            <span class="input-group-fl">
                                <span class="text-muted  ">&nbsp;&nbsp;KSH {{Cart::getSubTotal()}}
                                </span>
                            </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <div>
                                <h6 class="my-0">Total:</h6>
                                <small class="text-muted"></small>
                            </div>

                            <span class="input-group-fl">
                                <span class="text-muted  ">&nbsp;&nbsp;KSH {{Cart::getTotal()}}
                                </span>
                            </span>

                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <div>
                                <form action="{{ route('cart.manage.destroy') }}" method="post">
                                    {{ csrf_field() }}
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm ">
                                        Clear Cart
                                    </button>
                                </form>


                            </div>

                            <span class="input-group-fl">
                                <a href="#details" class="btn btn-success btn-sm">Place Order</a>
                            </span>
                        </li>


                        <div class="card-footer">
                            <a href="{{ route('menu.landing') }}" class="btn btn-primary btn-sm mt-2">Continue
                                Shopping</a>
                        </div>

                        @else
                        <li class="list-group-item d-flex justify-content-between">
                            <div>
                                <h6 class="my-0">Your Cart is Empty</h6>
                                <small class="text-muted">Choose Some products from the Shop</small><br><br>
                                <a href="{{ route('menu.landing') }}" class="btn btn-primary"> Continue Shopping</a>
                            </div>

                        </li>
                        @endif
                    </ul>
                </div>

            </div>
        </div>

        @if (! Cart::isEmpty())

        <div class="col-md-8 mt-2" id="details">
            <div class="card">
                <div class="card-header">
                    Delivery Details
                </div>
                <div class="card-body">
                    <form class="needs-validation" action="{{ route('checkout.create') }}" method="POST" novalidate="">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">First name</label>
                                <input type="text" name="fname" class="form-control" id="firstName" placeholder=""
                                    value="" required="">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Last name</label>
                                <input type="text" name="lname" class="form-control" id="lastName" placeholder=""
                                    value="">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="phone">Mobile Number</label>
                            <input type="text" name="phone" class="form-control" name="address" id="phone"
                                placeholder="0722336658" required="">
                        </div>

                        <div class="mb-3">
                            <label for="username">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">@</span>
                                </div>
                                <input type="email" class="form-control" name="email" id="username"
                                    placeholder="you@example.com">
                                <span class="text-muted">Please enter a valid email address for shipping updates.</span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="Wood Court"
                                required="">
                        </div>

                        <div class="mb-3">
                            <label for="address2">House, Apartment, Room</label>
                            <input type="text" class="form-control" name="unit" id="address2" placeholder="Apartment G3"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="road">Road</label>
                            <input type="text" class="form-control" name="road" id="road" placeholder="Wood Avenue"
                                required>
                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-success btn-lg btn-block" type="submit">Send Order</button>
                    </form>


                </div>
            </div>



        </div>

        @endif






    </div>

    <div class="modal fade" id="qtyModal" tabindex="-1" role="dialog" aria-labelledby="qtyModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="qtyModalLabel">Change Quantity</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('cart.update') }}" method="post">
                        {{ csrf_field() }}
                        @method('PUT')
                        <input type="number" class="form-control" name="cId" id="cId" hidden>
                        <div class="form-group">
                            <label for="cQty">Enter Quantity</label>
                            <input type="number" class="form-control" name="cQty" id="cQty">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
<script>
    // $('.changeQty').preventDefault();
    $(document).on("click", ".changeQty", function () {
        var val = $(this).closest("div.particulars").find("input[class='cQtyIn']").val();
    $(".modal-body #cQty").val( val );
    $(".modal-body #cId").val( val );

    $('#qtyModal').modal('show');

});

</script>



@endsection
