<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register | UNICMINDS </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
<<<<<<< HEAD
    <link rel="shortcut icon" href="{{ asset('frontend/img/favicon.ico') }}" type="image/x-icon" />
=======
    <link rel="shortcut icon" href="{{ asset('frontend/img/logos/logoquizlet2.png') }}" type="image/x-icon" />
>>>>>>> minhdat
    <link rel="apple-touch-icon" href="{{ asset('frontend/img/apple-touch-icon.png') }}">

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
            <div class="wrap-login100">

                <div class="login100-pic p-5">
                    <span class="login100-form-title">
                        Certificate Exams for Kids
                    </span>

                    <div>
                        <ul>
                            <li>Free coding exams for kids</li>
                            <li>Sign-up/Sign-in</li>

                            <li>Choose a programming language you want to test
                                yourself in and take the test.</li>

                            <li>Check your knowledge and improve</li>
                            <li>Click here to check our coding classes for kids,
                                tweens, and students.</li>
                        </ul>

=======

        <div class="container container-login100">

            <div class="d-flex justify-content-between align-items-center w-100">

                <img src="{{ asset('frontend/img/logos/logoquizlet.png') }}" alt="LOGO" class="" width="150px">

                <a class="dangky px-3 py-2 d-flex align-items-center fs-16" href="{{ route('login') }}">
                    <i class="bi bi-person fs-25"></i>
                    <span class="px-2">
                        Đăng nhập
                    </span>
                </a>

            </div>

            <div class="wrap-login100">

                <div class="login100-pic p-5">

                    <div class="d-flex justify-content-center align-items-center">
                        <img src="{{ asset('frontend/img/logos/logoquizlet.png') }}" alt="LOGO" class="" height="300px;">
                    </div>
                    <div class="text-center text-white" style="font-family: Poppins;transform: translateY(-50px);">
                        <h1>Let's start the Quiz</h1>
>>>>>>> minhdat
                    </div>

                </div>

<<<<<<< HEAD
                <form action="{{ route('register.post') }}" method="post" class="login100-form validate-form p-5 gradient-custom-2">
                    @csrf
                    <span class="login100-form-title">
                        Hello There! <br>
                        Sign Up for New Account
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Valid name is required: John Doe">
                        <input class="input100" type="text" name="name" placeholder="Full Name">
=======
                <form action="{{ route('register.post') }}" method="post" class="login100-form validate-form p-5 bg-form">
                    @csrf
                    <span class="login100-form-title" style="color: 00f7ff;">
                        Đăng ký
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Valid name is required: John Doe">
                        <input class="input100" type="text" name="name" placeholder="Họ và Tên">
>>>>>>> minhdat
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>

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

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
<<<<<<< HEAD
                        <input class="input100" type="password" name="repassword" placeholder="Retype Password">
=======
                        <input class="input100" type="password" name="repassword" placeholder="Nhập lại mật khẩu">
>>>>>>> minhdat

                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

<<<<<<< HEAD
                    <div class="wrap-input100 validate-input" data-validate="Please Check & Agree">

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="" id="terms">
                            <label style="margin-top: 10px;padding: 5px;" for="terms">I have read and agree to the <a href="#">terms of service</a></label>

                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Register
=======
                    <div class="wrap-input100 validate-input mb-0" data-validate="Please Check & Agree">

                        <div class="d-flex fs-14">
                            <input type="checkbox" class="" id="terms">
                            <label style="margin-top: 10px; padding-left: 5px; color:gray;" for="terms">Tôi đã đọc và đồng ý với các <a href="#" style="color:#00f7ff">điều khoản dịch vụ</a></label>
                        </div>
                        
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="dangky px-4 py-2">
                            Đăng ký
>>>>>>> minhdat
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
    <script src="{{ asset('frontend/vendor/tilt/tilt.jquery.min.js') }}"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
<<<<<<< HEAD

=======
>>>>>>> minhdat
    </script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>

</body>

<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> minhdat
