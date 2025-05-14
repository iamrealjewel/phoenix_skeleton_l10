@extends('layouts.app')
@section('title', 'Login')

@section('content')
    <div class="row vh-100 g-0 flex-center">
        <div class="col-lg-6">
            <div class="row flex-center h-100 g-0 px-4 px-sm-0">
                <div class="col col-sm-6 col-lg-7 col-xl-6">
                    <div class="d-flex flex-center text-decoration-none mb-4">
                        <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block"><img src="{{ asset('assets/img/logos/logo.png')}}" alt="phoenix" width="100" />
                        </div>
                    </div>
                    <div class="row">
                        @include('flash-message')
                    </div>
                    <div class="text-center mb-7">
                        <h3 class="text-body-highlight">Sign In</h3>
                        <p class="text-body-tertiary">Get access to your account</p>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3 text-start">
                            <label class="form-label" for="email">Email/Username</label>
                            <div class="form-icon-container">
                                <input class="form-control form-icon-input @error('username_or_email') is-invalid @enderror" id="email" type="text" placeholder="name@example.com" name="username_or_email" value="{{ old('email') }}" required autocomplete="username_or_email" autofocus/><span class="fas fa-user text-body fs-9 form-icon"></span>
                            </div>
                            @error('username_or_email')
                            <span class="mt-2 d-block invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="mb-3 text-start">
                            <label class="form-label" for="password">Password</label>
                            <div class="form-icon-container">
                                <input class="form-control form-icon-input @error('password') is-invalid @enderror" id="password" type="password" placeholder="Password" name="password" required autocomplete="current-password" /><span class="fas fa-key text-body fs-9 form-icon"></span>
                            </div>
                            @error('password')
                            <span class="mt-2 d-block invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="row flex-between-center mb-7">
                            <div class="col-auto">
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                                    <label class="form-check-label mb-0" for="remember">Remember me</label>
                                </div>
                            </div>
                            <div class="col-auto"><a class="fs-9 fw-semibold" href="{{ route('password.request') }}">Forgot Password?</a></div>
                        </div>
                        <button class="btn btn-primary w-100 mb-3">Sign In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
