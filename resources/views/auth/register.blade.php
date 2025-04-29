@extends("layouts.auth")
@section("style")
<style>
    html,
    body {
        height: 100%;
    }

    .form-signin {
        max-width: 330px;
        padding: 1rem;
    }

    .form-signin .form-floating:focus-within {
        z-index: 2;
    }

    .form-signin input{
        margin-bottom: 10px;
    }
</style>
@endsection
@section("content")
<main class="form-signin w-100 m-auto">
    <form action="{{ route("register.post") }}" method="POST">
        @csrf
        <img src="{{ asset("assets/img/logo.png") }}" class="mb-4" width="72" height="58" alt="logo">
        <h1 class="h3 wb-3 fw-normal">Please signup</h1>

        <div class="form-floating">
            <input type="text" name="name" class="form-control" id="floatingName" placeholder="Enter name">
            <label for="floatingName">Name</label>
            @error('name')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-floating" style="margin-bottom: 10px;">
            <input type="email" name="email" class="form-control" id="floatingEmail" placeholder="password">
            <label for="floatingEmail">Email</label>
            @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div> 
        <div class="form-floating" style="margin-bottom: 10px;">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="password">
            <label for="floatingPassword">password</label>
            @error('password')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div> 
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
        <button type="submit" class="btn btn-primary w-100 py-2">
            Sign up
        </button>
        <a href="{{ route("login") }}" class="text-center">Login here</a>
        <p class="mt-5 mb-3 text-body-secondary">&copy; 2017-2025</p>
    </form>
</main>
@endsection