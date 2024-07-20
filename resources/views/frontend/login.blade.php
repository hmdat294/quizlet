<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login | UNICMINDS </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
<<<<<<< HEAD
    <link rel="shortcut icon" href="{{ asset('frontend/img/um/favicon-UnicMinds.png') }}" type="image/x-icon" />
=======
    <link rel="shortcut icon" href="{{ asset('frontend/img/logos/logoquizlet2.png') }}" type="image/x-icon" />
>>>>>>> minhdat

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

<<<<<<< HEAD
        <div class="container-login100">

            <div class="my-3 text-center header-logo">

                <img src="{{ asset('frontend/img/um/Logo-UnicMinds.png') }}" alt="LOGO" class="img-thumbnail img-fluid">
=======
        <div class="container container-login100">

            <div class="d-flex justify-content-between align-items-center w-100">

                <img src="{{ asset('frontend/img/logos/logoquizlet.png') }}" alt="LOGO" class="" width="150px">

                <a class="dangky px-3 py-2 d-flex align-items-center fs-16" href="{{ route('register') }}">
                    <i class="bi bi-person fs-25"></i>
                    <span class="px-2">
                        Đăng ký
                    </span>
                </a>

>>>>>>> minhdat
            </div>

            <div class="wrap-login100">

                <div class="login100-pic p-5">
<<<<<<< HEAD
                    <span class="login100-form-title">
                        Free Certificate Exams for Kids
                    </span>

                    <div>
                        <ul>
                            <li>Sign-up/Sign-in (on the right ->)</li>
                            <li>Choose a programming language you want to test yourself in and take the test.</li>

                            <li>Students can validate their skills and obtain a certificate to stand out.</li>

                            <li>The certificate is awarded only to the students who score more than 70 Percent.</li>
                            <li>Explore our <a href="https://unicminds.com/" style="color: #f27507;">coding classes for kids and teenagers</a>.</li>


                        </ul>

=======

                    <div class="d-flex justify-content-center align-items-center">
                        <img src="{{ asset('frontend/img/logos/logoquizlet.png') }}" alt="LOGO" class="" height="300px;">
                    </div>
                    <div class="text-center text-white" style="font-family: Poppins;transform: translateY(-50px);">
                        <h1>Let's start the Quiz</h1>
>>>>>>> minhdat
                    </div>

                </div>

<<<<<<< HEAD
                <form action="{{ route('login.post') }}" method="post" class="login100-form validate-form p-5 gradient-custom-2">
                    @csrf
                    <span class="login100-form-title">
                        Welcome Back ! <br>
                        Sign in to continue . . .
=======
                <form action="{{ route('login.post') }}" method="post" class="login100-form validate-form p-5 bg-form">
                    @csrf
                    <span class="login100-form-title" style="color: 00f7ff;">
                        Đăng nhập
>>>>>>> minhdat
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
<<<<<<< HEAD
                        <input class="input100" type="password" name="password" placeholder="Password">
=======
                        <input class="input100" type="password" name="password" placeholder="Mật khẩu">
>>>>>>> minhdat

                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
<<<<<<< HEAD
                        <button class="login100-form-btn">
                            Login
=======
                        <button class="dangky px-4 py-2">
                            Đăng nhập
>>>>>>> minhdat
                        </button>
                    </div>

                    <div class="text-center pt-4">
                        <span class="txt1">
<<<<<<< HEAD
                            Forgot
                        </span>
                        <a class="txt2" href="#">
                            Password?
                        </a>
                    </div>

                    <div class="text-center pt-4">
                        <a class="txt2" href="{{ route('register') }}" style="font-size: 16px; font-family: Poppins-Bold;">
                            Create your Account
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
=======
                            Quên
                        </span>
                        <a class="txt2" href="#">
                            mật khẩu?
                        </a>
                    </div>

>>>>>>> minhdat
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

</body>

<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> minhdat
