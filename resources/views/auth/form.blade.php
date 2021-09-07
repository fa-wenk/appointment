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
            <form class="btn-submit" action="{{route('otp')}}">
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
                <input id="phone_number" type="text" placeholder="+62*************" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>
                </div>
            </div>
            <div class="mb-2" id="recaptcha-container"></div>
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
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
    <script type="text/javascript">

        $(".btn-submit").click(function(e){

            e.preventDefault();

            var number = $("#phone_number").val();

            firebase.auth().signInWithPhoneNumber(number).then(function (confirmationResult) {
                window.confirmationResult = confirmationResult;
                coderesult = confirmationResult;
                console.log(coderesult);
                $("#successAuth").text("Message sent");
                $("#successAuth").show();
                $.ajax({
                    url:"/otp",
                    method:'POST',
                    data:{
                            phone_number:number, 
                    },
                });
            }).catch(function (error) {
                $("#error").text(error.message);
                $("#error").show();
            });
        });
        
        function verify() {
            var code = $("#verification").val();
            coderesult.confirm(code).then(function (result) {
                var user = result.user;
                console.log(user);
                $("#successOtpAuth").text("Auth is successful");
                $("#successOtpAuth").show();
            }).catch(function (error) {
                $("#error").text(error.message);
                $("#error").show();
            });
        }
    </script>
@endsection