@extends('layouts.app')

@section('content')
<link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{{ asset('css/login.css') }}">

<div class="login">
  <div class="login-header">
    <h1 id="title">Login</h1>
  </div>
  <form method="POST" action="{{ route('login') }}">
    @csrf
  <div class="login-form">
    <h3>Email:</h3>
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    <h3>Password:</h3>
    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    <br>
    <input type="submit" value="Login" class="login-button mr-lg-5 mr-sm-0"/>
    <br>
    <a href="/register" class="btn btn-link sign-up mr-lg-5 mr-sm-0">or Sign Up!</a>
    <br>
    @if (Route::has('password.request'))
    <a class="btn btn-link no-access" href="{{ route('password.request') }}">
        {{ __('Forgot Your Password?') }}
    </a>
@endif
  </div>
</form>
</div>
@endsection
