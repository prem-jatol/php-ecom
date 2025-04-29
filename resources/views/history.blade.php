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
        @if($orders->isEmpty())
        <div class="fs-5 text-danger fw-semibold">Nothing order booked yet</div>
        @else
        <div>
            @foreach($orders as $order)
            <div class="col-12">
                <div class="card mb-3" style="width: 540px;">
                    <div class="row g-8">
                        <div class="col-md-4">
                            <img src="{{ $order->product_details[0]['image'] }}" class="img-fluid rounded-start" alt="Product Image">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Order #{{ $order->id }}</h5>
                                <p class="card-text">Payment ID: {{ $order->payment_id }}</p>
                                <p class="card-text">Total Price: {{ $order->total_price }}</p>
                                <h6>Products:</h6>
                                <ul>
                                    @foreach ($order->product_details as $product)
                                    <li>
                                        <a href="{{ route('products.details', $product['slug']) }}">{{ $product['name'] }}</a>
                                        - Quantity: {{ $product['quantity'] }} | -Price: ${{ $product['price'] }}
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif

    </section>
</main>
@endsection