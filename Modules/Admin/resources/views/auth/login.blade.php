<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from dompet.dexignlab.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Feb 2024 11:43:18 GMT -->
<head>
    <!-- All Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DexignLab">
    <meta name="robots" content="">
    <meta name="keywords"
          content="bootstrap admin, card, clean, credit card, dashboard template, elegant, invoice, modern, money, transaction, Transfer money, user interface, wallet">
    <meta name="description"
          content="Dompet is a clean-coded, responsive HTML template that can be easily customised to fit the needs of various credit card and invoice, modern, creative, Transfer money, and other businesses.">
    <meta property="og:title" content="Dompet - Payment Admin Dashboard Bootstrap Template">
    <meta property="og:description"
          content="Dompet is a clean-coded, responsive HTML template that can be easily customised to fit the needs of various credit card and invoice, modern, creative, Transfer money, and other businesses.">
    <meta property="og:image" content="social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('adminassets/images/favicon.png')}}">

    <link href="{{asset('adminassets/css/style.css')}}" rel="stylesheet">

</head>

<body class="vh-100">
<div class="authincation h-100">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-lg-12 col-md-12 col-sm-12 mx-auto align-self-center">
                <div class="login-form">
                    <div class="text-center">
                        <h3 class="title">Sign In</h3>
                        <p>Sign in to your account to start using Dompact</p>
                    </div>
                    <form action="{{route('login')}}" method="post">
                        @csrf
                        <div class="mb-4">
                            <label class="mb-1 text-dark">Username</label>
                            <input type="text" class="form-control form-control" name="username" placeholder="Username" value="">
                        </div>
                        <div class="mb-4 position-relative">
                            <label class="mb-1 text-dark">Password</label>
                            <input type="password" id="dlab-password" class="form-control form-control"
                                   placeholder="Password" name="password">
                            <span class="show-pass eye">

									<i class="fa fa-eye-slash"></i>
									<i class="fa fa-eye"></i>

								</span>
                        </div>
                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                            <div class="mb-4">
                                <div class="form-check custom-checkbox mb-3">
                                    <input type="checkbox" class="form-check-input" name="remember_me" id="customCheckBox1">
                                    <label class="form-check-label mt-1" for="customCheckBox1">Remember me</label>
                                </div>
                            </div>
                            <div class="mb-4">
                                <a href="page-forgot-password.html" class="btn-link text-primary">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="text-center mb-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{asset('adminassets/vendor/global/global.min.js')}}"></script>
<script src="{{asset('adminassets/js/custom.min.js')}}"></script>
<script src="{{asset('adminassets/js/dlabnav-init.js')}}"></script>

</body>

<!-- Mirrored from dompet.dexignlab.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Feb 2024 11:43:18 GMT -->
</html>
