@extends("layouts.default")
@section("title", "ecommerce of your")
@section("content")
<main class="container">
    <section style="max-width: 900px; margin: 20px 0px;">
        <h2>Your Cart</h2>
        <hr>
        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get("success") }}
        </div>
        @endif
        @if(session("error"))
        <div class="alert alert-danger">
            {{ session("error") }}
        </div>
        @endif
        @if($cartItems->isEmpty())
        <div class="fs-5 text-danger fw-semibold">Cart is Empty</div>
        @else
        <div>
            @foreach($cartItems as $cart)
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ $cart->image }}" class="img-fluid rounded-start" alt="{{ $cart->title }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title fw-bold fs-4">{{ $cart->title }}</h5>
                            <p class="card-text fw-semibold fs-5">Price: <small style="color: green;">${{ $cart->price }}</small> | <span>Quantity: {{ $cart->quantity }}</span></p>
                            <p class="card-text">{{ $cart->description }}</p>
                            <a class="btn btn-danger" href="{{ route('cart.delete', $cart->cart_id) }}">Remove</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div>
            {{ $cartItems->links() }}
        </div>
        <div>
            <a class="btn btn-success" href="{{ route('checkout.show') }}">Checkout</a>
        </div>
        @endif

    </section>
</main>
@endsection