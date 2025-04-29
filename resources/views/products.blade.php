@extends("layouts.default")
@section("title", "ecommerce of your")
@section("content")
<main class="container d-flex justify-content-center">
    <section style="max-width: 900px; margin: 20px 0px;">
        <h2>Best Product List</h2>
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
        <div class="row">
            @foreach($products as $product)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card p-2 shadow-sm mb-4">
                    <img src="{{ $product->image }}" width="100%" alt="">
                    <h3><a class="text-decoration-none" href="{{ route('products.details', $product->slug) }}">{{ $product->title }}</a></h3>
                    <span class="fw-bold fs-5">${{ $product->price }}</span>
                    <p>{{ $product->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div>
            {{ $products->links() }}
        </div>

    </section>
</main>
@endsection