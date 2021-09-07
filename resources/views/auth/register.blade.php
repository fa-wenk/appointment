@extends('layouts.auth')

@section('title')
<title>Register</title>
@endsection

@section('content')
<!-- Page content -->
<div class="container mt--8 pb-5">
    <!-- Table -->
    <div class="row justify-content-center">
    <div class="col-lg-6 col-md-8">
        <div class="card bg-secondary border-0">
        <div class="card-body px-lg-5 py-lg-5">
            <div class="text-center text-muted mb-4">
            <small>Or sign up with credentials</small>
            </div>
            <form method="POST" action="{{ route('register') }}">
            @csrf
            @if ($errors->any())
              <div class="alert alert-danger" role="alert">
                {{$errors->first()}}
              </div>
            @endif
            <div class="form-group">
                <div class="input-group input-group-merge input-group-alternative mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                </div>
                <input id="name" type="text" placeholder="Nama" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group input-group-merge input-group-alternative mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                </div>
                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline1">Laki-Laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                </div>
                </div>
                <div class="form-group">
                <div class="input-group input-group-merge input-group-alternative mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-world-2"></i></span>
                </div>
                <input id="email" type="email" placeholder="Alamat" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group input-group-merge input-group-alternative mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                </div>
                <input id="email" type="email" placeholder="Tanggal Lahir" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group input-group-merge input-group-alternative">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                </div>
                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group input-group-merge input-group-alternative">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                </div>
                <input id="password-confirm" placeholder="Konfirmasi Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            <div class="row my-4">
                <div class="col-12">
                <div class="custom-control custom-control-alternative custom-checkbox">
                    <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                    <label class="custom-control-label" for="customCheckRegister">
                    <span class="text-muted">I agree with the <a href="#!">Privacy Policy</a></span>
                    </label>
                </div>
                </div>
            </div>
            <div class="text-center">
            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
            </div>
            </form>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection