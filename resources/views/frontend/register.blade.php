<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register | UNICMINDS </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/img/logos/logoquizlet2.png') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('frontend/img/apple-touch-icon.png') }}">

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/css-hamburgers/hamburgers.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/main.css') }}">

    <style>
        .modal-body>ul>li {
            margin-left: 30px;
            font-weight: lighter;
            font-size: 14px;
            text-align: justify;
        }
    </style>

</head>

<body>

    <div class="limiter">

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
                    </div>

                </div>

                <form action="{{ route('register.post') }}" method="post" class="login100-form validate-form p-5 bg-form" id="form-register">
                    @csrf
                    <span class="login100-form-title" style="color: 00f7ff;">
                        Đăng ký
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="Valid name is required: John Doe">
                        <input class="input100" type="text" name="name" placeholder="Họ và Tên">
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

                    <div class="wrap-input100 validate-input mb-0" data-validate="Please Check & Agree">

                        <div class="d-flex fs-14 align-items-center">
                            <input type="checkbox" style="width: 20px; height: 20px;" id="terms">
                            <label style="margin-top: 10px; padding-left: 5px; color:gray;" for="terms">Tôi đã đọc và đồng ý với các <a href="#" data-toggle="modal" data-target="#exampleModal" style="color:#00f7ff">điều khoản dịch vụ</a></label>
                        </div>
                        <p class="error-message text-danger" style="display: none;" id="errorMessage">Bạn chưa đồng ý với các điều khoản và dịch vụ!</p>

                    </div>

                    <div class="container-login100-form-btn">
                        <button class="dangky px-4 py-2" id="submit-register">
                            Đăng ký
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content" style="background-color: #120a30; box-shadow: 0 0 15px #00f7ff; border-radius: 10px;">
                <div class="modal-header px-4" style="border-bottom: 1px solid #00f7ff; color: #00f7ff;">
                    <h4 class="modal-title" id="exampleModalLabel">Điều khoản dịch vụ</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-4" style="color: white;">

                    <h5>1. Giới thiệu</h5>
                    <ul>
                        <li>
                            Chào mừng bạn đến với QuizLet! Chúng tôi cung cấp các dịch vụ liên quan chia sẻ và tham gia các bài kiểm tra trắc nghiệm. Bằng cách sử dụng dịch vụ của chúng tôi, bạn đồng ý tuân thủ các điều khoản và điều kiện dưới đây.
                        </li>
                    </ul>

                    <h5>2. Đăng Ký Tài Khoản</h5>
                    <ul>
                        <li>
                            Bạn cần tạo một tài khoản để sử dụng một số dịch vụ của chúng tôi.
                        </li>
                        <li>
                            Bạn phải cung cấp thông tin chính xác và đầy đủ khi đăng ký.
                        </li>
                        <li>
                            Bạn chịu trách nhiệm bảo mật thông tin tài khoản và mật khẩu của mình.
                        </li>
                        <li>
                            Bạn phải thông báo ngay cho chúng tôi nếu phát hiện bất kỳ hành vi sử dụng trái phép tài khoản của mình.
                        </li>
                    </ul>

                    <h5>3. Sử Dụng Dịch Vụ</h5>
                    <ul>
                        <li>
                            Bạn cam kết sử dụng dịch vụ của chúng tôi một cách hợp pháp và không vi phạm bất kỳ quy định nào của pháp luật.
                        </li>
                        <li>
                            Bạn không được sử dụng dịch vụ để phát tán nội dung không phù hợp, bao gồm nhưng không giới hạn ở nội dung xâm phạm quyền sở hữu trí tuệ, nội dung đồi trụy, nội dung thù địch, và nội dung lừa đảo.
                        </li>
                        <li>
                            Bạn không được can thiệp vào hoạt động của trang web hoặc các hệ thống mạng kết nối với trang web.
                        </li>
                    </ul>

                    <h5>4. Quyền Sở Hữu Trí Tuệ</h5>
                    <ul>
                        <li>
                            Tất cả các nội dung, bao gồm nhưng không giới hạn ở văn bản, đồ họa, logo, hình ảnh, và phần mềm, là tài sản của QuizLet hoặc các bên thứ ba được cấp phép sử dụng.
                        </li>
                        <li>
                            Bạn không được sao chép, phân phối, hoặc sử dụng bất kỳ phần nào của nội dung mà không có sự đồng ý bằng văn bản từ QuizLet.
                        </li>
                    </ul>

                    <h5>5. Quyền Riêng Tư</h5>
                    <ul>
                        <li>
                            Chúng tôi cam kết bảo vệ quyền riêng tư của bạn. Vui lòng tham khảo Chính Sách Bảo Mật của chúng tôi để biết thêm chi tiết về cách chúng tôi thu thập và sử dụng thông tin cá nhân của bạn.
                        </li>
                    </ul>

                    <h5>6. Giới Hạn Trách Nhiệm</h5>
                    <ul>
                        <li>
                            Chúng tôi không chịu trách nhiệm về bất kỳ tổn thất hoặc thiệt hại nào phát sinh từ việc bạn sử dụng dịch vụ của chúng tôi.
                        </li>
                        <li>
                            Dịch vụ của chúng tôi được cung cấp "như là" và chúng tôi không đưa ra bất kỳ đảm bảo nào về tính chính xác, đầy đủ, hoặc khả năng hoạt động không bị gián đoạn của dịch vụ.
                        </li>
                    </ul>

                    <h5>7. Thay Đổi Điều Khoản Dịch Vụ</h5>
                    <ul>
                        <li>
                            Chúng tôi có quyền thay đổi hoặc cập nhật các điều khoản dịch vụ này bất cứ lúc nào mà không cần thông báo trước.
                        </li>
                        <li>
                            Việc bạn tiếp tục sử dụng dịch vụ sau khi các thay đổi có hiệu lực đồng nghĩa với việc bạn chấp nhận các điều khoản dịch vụ mới.
                        </li>
                    </ul>

                    <h5>8. Liên Hệ</h5>
                    <ul>
                        <li>
                            Nếu bạn có bất kỳ câu hỏi hoặc yêu cầu nào liên quan đến điều khoản dịch vụ này, vui lòng liên hệ với chúng tôi qua email:
                            <i style="color: #00f7ff;">start.quizlet@gmail.com.</i>
                        </li>
                        <li>
                            Cảm ơn bạn đã sử dụng dịch vụ của QuizLet!
                        </li>
                    </ul>

                </div>
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

        $('#submit-register').click(function(event) {
            if (!$('#terms').is(':checked')) {
                event.preventDefault();
                $('#errorMessage').show();
            } 
        });

        $('#terms').change(function() {
            if ($(this).is(':checked')) {
                $('#errorMessage').hide();
            }
        });


        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    @include('sweetalert::alert')
</body>

</html>