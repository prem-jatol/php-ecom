@extends("layouts.default")
@section("title", "ecommerce of your")
@section("content")
<div class="container mt-5">
    <h2 class="mb-4">Checkout</h2>
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
    <form action="{{ route("checkout.post") }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter your address" required></textarea>
        </div>

        <div class="mb-3">
            <label for="pincode" class="form-label">Pincode</label>
            <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Enter your pincode" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
        </div>

        <button type="submit" class="btn btn-primary">Proceed to payment</button>
    </form>
</div>
@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection