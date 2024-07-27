@extends('frontend.layout.template')

@section('content')

<section class="page-header page-header-classic" style="padding-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Profile</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col p-static">
                <span class="page-header-title-border visible" style="width: 145.509px;"></span>
                <h1 data-title-border="">Profile</h1>

            </div>
        </div>
    </div>
</section>

<section class="section border-0 my-0 py-0" style="background: none;">

    <div class="tabs tabs-center">

        <ul class="nav nav-tabs justify-content-center border-0">
            <li class="nav-item active">
                <a class="nav-link active" href="#profile" data-toggle="tab"><strong>Thông tin</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#results" data-toggle="tab"><strong>Kết quả làm bài</strong></a>

            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="#certificate" data-toggle="tab"><strong>Certificates</strong></a>

            </li> -->
        </ul>

        <div class="tab-content p-0">

            <div id="profile" class="tab-pane active">

                <div class="col-lg-10 col-md-10 mx-auto profile-tabs p-5">

                    <div class="overflow-hidden mb-1">
                        <h2 class="font-weight-normal text-center text-7 my-3"><strong class="font-weight-extra-bold">Thông tin</strong></h2>
                    </div>

                    <form action="{{ route('profile.update', $user->id) }}" method="post" class="needs-validation">
                        @csrf
                        <div class="form-group row">

                            <label class="col-md-4 font-weight-bold text-dark col-form-label form-control-label text-4 required">Tên</label>
                            <div class="col-md-8">
                                <input class="form-control" name="name" required type="text" value="{{ $user->name }}">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 font-weight-bold text-dark col-form-label form-control-label text-4 required">Email</label>
                            <div class="col-md-8">
                                <input class="form-control" required type="email" name="email" value=" {{ $user->email }}">


                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 font-weight-bold text-dark col-form-label form-control-label text-4 required">Mật khẩu</label>
                            <div class="col-md-8">
                                <input class="form-control" required name="password" type="password" value="">

                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="form-group col-6 mx-auto text-center">
                                <input type="submit" value="Cập nhật thông tin" class="button border-0 px-4 py-2" data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>

                </div>

            </div>

            <div id="results" class="tab-pane">
                <div class="col-lg-10 col-md-10 mx-auto profile-tabs p-5">

                    <div class="overflow-hidden mb-1">
                        <h2 class="font-weight-normal text-center text-7 my-3"><strong class="font-weight-extra-bold">Kết quả làm bài</strong></h2>
                    </div>

                    <table class="table table-responsive text-dark table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Tiêu đề</th>
                                <th>Kết quả</th>
                                <th>Điểm</th>
                                <th>Ngày</th>
                                <th>Đánh giá</th>
                            </tr>
                        </thead>
                        @php
                        $i = 1;
                        @endphp
                        @foreach ($results as $result)
                        <tbody>
                            <tr class="text-center">
                                <td>{{ $i++ }}</td>
                                <td>{{ $result->quiz->title }}</td>
                                <td>{{ $result->score }} / {{ $result->count_quiz }}</td>
                                <td>{{ round(($result->score/$result->count_quiz)*10, 2)}}</td>
                                <td>{{ date('d-m-Y', strtotime($result->created_at)) }}</td>
                                <td>
                                    <a class="btn btn-sm btn-success" href="#" data-toggle="modal" data-target="#Feedback{{$result->quiz->id}}">
                                        <i class="bi bi-send-check"></i>
                                    </a>

                                    <div class="modal fade" id="Feedback{{$result->quiz->id}}" tabindex="-1" aria-labelledby="FeedbackLabel{{$result->quiz->id}}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <form action="{{ route('submitfeedback') }}" method="post" class="modal-content">
                                                @csrf
                                                <div class="modal-header">
                                                    <h3 class="modal-title fs-5" id="FeedbackLabel{{$result->quiz->id}}">Đánh giá</h3>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="text-left row align-items-center">

                                                        <h4 class="col-4">Đánh giá:</h4>

                                                        <div class="d-flex justify-content-end align-items-center col-8">
                                                            <span id="rating-value" class="mx-3">Chưa đánh giá</span>
                                                            <div class="star-rating">
                                                                <span class="star" data-value="1">&#9733;</span>
                                                                <span class="star" data-value="2">&#9733;</span>
                                                                <span class="star" data-value="3">&#9733;</span>
                                                                <span class="star" data-value="4">&#9733;</span>
                                                                <span class="star" data-value="5">&#9733;</span>
                                                            </div>
                                                            <input type="hidden" id="rating-input" name="star" value="">
                                                            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                                            <input type="hidden" name="quiz_id" value="{{ $result->quiz->id }}">
                                                        </div>

                                                        <div class="col-12">
                                                            <label for="content" class="form-label">Nội dung</label>
                                                            <textarea class="form-control" id="content" name="content"></textarea>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                                    <button type="submit" class="btn btn-success">Gửi</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        </tbody>

                        @endforeach

                    </table>
                </div>
            </div>
            <!-- <div id="certificate" class="tab-pane">
                <p>Certificate</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
            </div> -->
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

</section>

@endsection
