@extends('frontend.layout.template')

@section('content')

<section class="page-header page-header-classic" style="padding-top: 100px; margin:0;">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Quizzes</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col p-static">
                <span class="page-header-title-border visible" style="width: 145.509px;"></span>
                <h1 data-title-border="">Quizzes</h1>
            </div>
        </div>
    </div>
</section>

<section class="container border-0 my-4">
    <div class="row">
        <div class="col-11 mx-auto">

            <div class="blog-posts mt-3">

                <div class="d-flex justify-content-between align-items-center my-3">
                    <h3 class="m-0">Danh sách bài kiểm tra</h3>

                    <div class="w-25">
                        <select class="form-select p-2 w-100" id="quiz-level" name="quiz-level">
                            <option value="0" {{($level == 0)?'selected':''}}>Cơ bản</option>
                            <option value="1" {{($level == 1)?'selected':''}}>Trung bình</option>
                            <option value="2" {{($level == 2)?'selected':''}}>Nâng cao</option>
                        </select>
                    </div>
                </div>

                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                    $(document).ready(function() {
                        $('#quiz-level').change(function() {

                            window.location.href = "{{ route('quiz.view', [$id, ':level']) }}".replace(':level', $(this).val());

                        });
                    });
                </script>

                <table class="table appear-animation animated fadeInUpShorter appear-animation-visible text-center profile-tabs " data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                    <tr>
                        <th>Tiêu đề</th>
                        <th>Thời gian làm bài</th>
                        <th>Dạng câu hỏi</th>
                        <th>Mô tả</th>
                        <th>#</th>
                    </tr>

                    @foreach ($quizs as $quiz)
                    <tr class="">
                        <td>{{ $quiz->title }}</td>
                        <td>{{ $quiz->duration }} phút</td>
                        <td>
                            {{
                                ($quiz->type == 0)?'Trắc nghiệm':
                                (($quiz->type == 1)?'Điền vào chỗ trống':
                                (($quiz->type == 2)?'Kết hợp':''))
                            }}
                        </td>
                        <td>{{ $quiz->description }}</td>
                        <td>
                            <a href="{{ route('quiz.start', [$quiz->id, $quiz->type]) }}" class="button px-4 py-1 fs-10">Bắt đầu</a>
                        </td>
                    </tr>
                    @endforeach

                </table>

                {{-- <div class="row">
                        <div class="col">
                            <ul class="pagination float-right">
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="fas fa-angle-left"></i></a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
                            </ul>
                        </div>
                    </div> --}}

            </div>
        </div>

    </div>

</section>



@endsection