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
            <form action="">
            @csrf
            @if ($errors->any())
              <div class="alert alert-danger" role="alert">
                {{$errors->first()}}
              </div>
            @endif
            <div class="form-group">
                Nomor OTP Sudah DIkirim Ke no {{$kontak}}
                <div class="input-group input-group-merge input-group-alternative mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                </div>
                <input id="verification" type="text" placeholder="Nama" class="form-control @error('otp') is-invalid @enderror" name="otp" value="{{ old('otp') }}" required autocomplete="otp" autofocus>
                </div>
            </div>
                <input type="hidden" name="validasi" id="valiadasi" value="1">
            <div class="text-center">
                <button type="submit" onclick="verify();" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
            </form>
        </div>
        </div>
    </div>
    </div>
</div>
<script>
    function verify() {
            var code = $("#verification").val();
            var validasi = $("#validasi").val();
            coderesult.confirm(code).then(function (result) {
                var user = result.user;
                console.log(user);
                $("#successOtpAuth").text("Auth is successful");
                $("#successOtpAuth").show();
                $.ajax({
                    url:"/register",
                    method:'POST',
                    data:{
                            validasi:validasi, 
                    },
                });
            }).catch(function (error) {
                $("#error").text(error.message);
                $("#error").show();
            });
        }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>


    <script>
        var firebaseConfig = {
            apiKey: "AIzaSyBenDCeNB5ODfm6Wfwtrlq88drHfUe1nk4",
            authDomain: "ayana-web-id.firebaseapp.com",
            databaseURL: "https://ayana-web-id-default-rtdb.firebaseio.com",
            projectId: "ayana-web-id",
            storageBucket: "ayana-web-id.appspot.com",
            messagingSenderId: "670024856165",
            appId: "1:670024856165:web:63a0af76f76cf05795cc8c"
        };
        firebase.initializeApp(firebaseConfig);
    </script>
@endsection
