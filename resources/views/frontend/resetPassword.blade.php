<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login | UNICMINDS </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/img/logos/logoquizlet2.png') }}" type="image/x-icon" />

    {{-- <link rel="apple-touch-icon" href="{{ asset('frontend/img/apple-touch-icon.png') }}"> --}}

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/css-hamburgers/hamburgers.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/main.css') }}">

</head>

<body>


    <div class="limiter">
        <div class="container container-login100">

            <div class="d-flex justify-content-between align-items-center w-100">

                <img src="{{ asset('frontend/img/logos/logoquizlet.png') }}" alt="LOGO" class="" width="150px">

                <div></div>

            </div>

            <div class="wrap-login100">

                <form action="{{ route('resetpassword.post', $token) }}" method="post" class="login100-form validate-form p-5 bg-form m-auto">
                    @csrf
                    <span class="login100-form-title" style="color: 00f7ff;">
                        Đặt mật khẩu mới
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" placeholder="Mật khẩu">

                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="repassword" placeholder="Nhập lại mật khẩu">

                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="dangky px-4 py-2">
                            Đặt mật khẩu mới
                        </button>
                    </div>


                </form>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="{{ asset('frontend/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/select2/select2.min.js') }}"></script>

    <script src="{{ asset('frontend/js/main.js') }}"></script>
    @include('sweetalert::alert')
</body>

</html>