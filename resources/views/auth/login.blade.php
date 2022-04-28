@extends('layouts.app')

@section('style')
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-12 d-flex">
            <img class="login-img img-fluid mx-auto my-auto" src="{{ asset('storage/images/login.png') }}" alt="">
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="d-flex">
                <form action="{{ route('login') }}" method="POST" class="login-card my-auto ms-auto">
                    @csrf
                    <div class="d-flex">
                        <div>
                            <h2>Welcome to</h2>
                            <h1>Joy Games</h1>
                        </div>
                        <a href="/" class="ms-auto text-black">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <div class="">
                        <a class="btn btn-login-social py-3 my-2 ">
                            <i class="fab fa-google me-2 text-danger top-0 end-0"></i>
                            <span>Login with Google</span>
                        </a>
                        <a class="btn btn-login-social py-3 my-2">
                            <i class="fab fa-facebook-f me-2 text-primary"></i>
                            <span>Login with Facebook</span>
                        </a>
                    </div>
                    <div class="row mt-4">
                        <div class="col-5">
                            <hr>
                        </div>
                        <div class="col-2">
                            <p class="text-center">or</p>
                        </div>
                        <div class="col-5">
                            <hr>
                        </div>
                    </div>
                    <div class=" form-group">
                        <div class="login-input my-3 row">
                            <div class="col-1 d-flex">
                                <i class="fas fa-envelope my-auto fs-4"></i>
                            </div>
                            <div class="col-11 p-2">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="w-100" id="email" autofocus>
                            </div>
                        </div>
                        <div class="login-input my-3 row">
                            <div class="col-1 d-flex">
                                <i class="fas fa-key my-auto fs-4"></i>
                            </div>
                            <div class="col-11 p-2">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="w-100" id="password">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-lg py-3 w-100" type="submit">Login</button>
                    <div class="d-flex justify-content-center mt-4">
                        <span class="me-2">Don't have an account?</span>
                        <span><a href="{{ route('register') }}">Register</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
