@extends('layouts.auth')

@section('title')
<title>Login</title>
@endsection

@section('content')
<!-- Page content -->
<div class="container mt--8 pb-4">
  <div class="row justify-content-center">
    <div class="col-lg-5 col-md-7">
      <div class="card bg-secondary border-0 mb-0">
        <div class="card-body px-lg-5 py-lg-5">
          <div class="text-center text-muted mb-4">
            <small>Or sign in with credentials</small>
          </div>
          <form method="POST" action="{{ route('login') }}">
            @csrf
            @if ($errors->any())
              <div class="alert alert-danger" role="alert">
                {{$errors->first()}}
              </div>
            @endif
            <div class="form-group mb-3">
              <div class="input-group input-group-merge input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                </div>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group input-group-merge input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                </div>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
              </div>
            </div>
            <div class="custom-control custom-control-alternative custom-checkbox">
              <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
              <label class="custom-control-label" for=" customCheckLogin">
                <span class="text-muted">Remember me</span>
              </label>
            </div>
            <div class="text-center">
                    <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
            </div>
          </form>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-6">
        @if (Route::has('password.request'))
            <a class="btn btn-link text-light"  href="{{ route('password.request') }}">
                <small>Lupa Password</small>
            </a>
        @endif
        </div>
        <div class="col-6 text-right">
          <a href="#" class="text-light"><small>Create new account</small></a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection