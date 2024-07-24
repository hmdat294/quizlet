@extends('frontend.layout.template')

@section('content')
<section class="page-header page-header-classic" style="padding-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Test</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col p-static">
                <span class="page-header-title-border visible" style="width: 145.509px;"></span>
                <h1 data-title-border=""> Test Result</h1>

            </div>
        </div>
    </div>
</section>

<div class="container py-4">

    <div class="row">
        <div class="col">
            <div class="blog-posts">

                <div class="col-md-10 col-lg-10 mx-auto mb-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">

                    <div class="card card-background-image-hover border-0" style="background-image: url({{ asset('frontend/img/blog/square/blog-1.jpg') }});">
                        <div class="card-body text-center p-5">
                            <i class="icon-layers icons text-color-primary text-10"></i>
                            <h4 class="card-title mt-2 mb-3 text-5 text-tertiary font-weight-bold">

                            </h4>
                            <hr>

                            <ul class="list list-icons list-primary list-borders text-left text-4 font-weight-bold">

                                <li>
                                    <i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Tên
                                        thí sinh:</strong> {{ Auth::user()->name }}

                                </li>
                                <li>
                                    <i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Tên
                                        bài kiểm tra:</strong> {{ $quiz->title }}

                                </li>
                                <li>
                                    <i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Số câu
                                        đúng:</strong> {{ $score }}/{{ $numberQuestion }}

                                </li>
                                <li>
                                    <i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Số
                                        điểm đạt được:</strong> {{ round(($score / $numberQuestion) * 10, 2) }}
                                </li>

                            </ul>



                            <form action="{{ route('feedback') }}" method="POST" class="text-left mt-5 row align-items-center">
                                @csrf

                                <h4 class="col-4">Đánh giá:</h4>

                                <div class="d-flex justify-content-end align-items-center col-8">
                                    <span id="rating-value" class=" mx-3">Chưa đánh giá</span>
                                    <div class="star-rating">
                                        <span class="star" data-value="1">&#9733;</span>
                                        <span class="star" data-value="2">&#9733;</span>
                                        <span class="star" data-value="3">&#9733;</span>
                                        <span class="star" data-value="4">&#9733;</span>
                                        <span class="star" data-value="5">&#9733;</span>
                                    </div>
                                    <input type="hidden" id="rating-input" name="star" value="0">
                                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                    <input type="hidden" name="quiz_id" value="{{ $quiz->id }}">
                                </div>

                                <div class="col-10">
                                    <label for="content" class="form-label">Nội dung</label>
                                    <textarea class="form-control" id="content" name="content"></textarea>
                                </div>

                                <div class="col-2 text-center mt-3">
                                    <button type="submit" class="button border-0 px-4 py-2 w-100 mt-3">Gửi</button>
                                </div>

                            </form>




                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const stars = document.querySelectorAll('.star');
        const ratingValue = document.getElementById('rating-value');
        const ratingInput = document.getElementById('rating-input');

        stars.forEach(star => {
            star.addEventListener('click', () => {
                const value = star.getAttribute('data-value');

                ratingValue.textContent =
                    (value == 1) ? 'Rất tệ' :
                    (value == 2) ? 'Tệ' :
                    (value == 3) ? 'Trung bình' :
                    (value == 4) ? 'Tốt' :
                    (value == 5) ? 'Rất tốt' : '';

                ratingInput.value = value; // Cập nhật giá trị của input ẩn
                stars.forEach(s => s.classList.remove('selected'));
                star.classList.add('selected');
                let previous = star.previousElementSibling;
                while (previous) {
                    previous.classList.add('selected');
                    previous = previous.previousElementSibling;
                }
            });

            star.addEventListener('mouseover', () => {
                stars.forEach(s => s.classList.remove('selected'));
                star.classList.add('selected');
                let previous = star.previousElementSibling;
                while (previous) {
                    previous.classList.add('selected');
                    previous = previous.previousElementSibling;
                }
            });

            star.addEventListener('mouseout', () => {
                stars.forEach(s => s.classList.remove('selected'));
                const value = ratingInput.value;
                if (value) {
                    stars.forEach(s => {
                        if (s.getAttribute('data-value') <= value) {
                            s.classList.add('selected');
                        }
                    });
                }
            });
        });
    });
</script>
@endsection