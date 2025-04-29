@extends("layouts.default")
@section("title", "ecommerce of your")
@section("content")
<main class="container d-flex justify-content-center">
    <section style="max-width: 900px; margin: 20px 0px;" >
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
        <br><br>
        <img src="{{ $product->image }}" width="100%" alt="">
        <h2>{{ $product->title }}</h2>
        <span class="fs-5 tw-bold">${{ $product->price }}</span>
        <p>{{ $product->description }}</p>
        <a href="{{ route('cart.add', $product->id) }}" class="btn btn-success">Add to cart</a>
    </section>
</main>
@endsection