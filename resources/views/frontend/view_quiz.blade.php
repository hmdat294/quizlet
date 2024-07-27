@extends('frontend.layout.template')

@section('content')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
    <div class="mx-auto">

        <div class="blog-posts mt-3">

            <div class="d-flex justify-content-between align-items-center my-3">
                <h2 class="m-0">Danh sách bài kiểm tra</h2>

                <select class="form-select py-2 px-3" name="" id="quiz-type">
                    <option value="3">Tất cả</option>
                    <option value="0" {{($type == 0)?'selected':''}}>Trắc nghiệm</option>
                    <option value="1" {{($type == 1)?'selected':''}}>Điền vào chỗ trống</option>
                    <option value="2" {{($type == 2)?'selected':''}}>Kết hợp</option>
                </select>
            </div>

            <script>
                $(document).ready(function() {
                    $('#quiz-type').change(function() {
                        console.log($(this).val());
                        window.location.href = "{{ route('quiz.view', [$id, ':type']) }}".replace(':type', $(this).val());
                    });
                });
            </script>

            <div class="row appear-animation animated fadeInUpShorter appear-animation-visible quiz" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">

                @foreach ($quizs as $quiz)
                @php
                $countQuestion = App\Models\Question::where('quiz_id', $quiz->id)->count();
                $countEssay = App\Models\Essay::where('quiz_id', $quiz->id)->count();
                @endphp
                @if ( $countQuestion>0 || $countEssay>0 )

                <a href="{{ route('quiz.start', [$quiz->id, $quiz->type]) }}" class="col-md-4 col-6">
                    <div class="pt-3 px-4 pb-1">
                        <div class="d-flex mb-2" style="height: 170px;">

                            <div style="margin-right: 15px; margin-top: 30px;">
                                @if ($quiz->type == 0)
                                <img src="{{ asset('frontend/img/logos/tracnghiem.gif') }}" alt="LOGO" class="" width="100px">
                                @elseif($quiz->type == 1)
                                <img src="{{ asset('frontend/img/logos/dienvaochotrong.gif') }}" alt="LOGO" class="" width="100px">
                                @elseif($quiz->type == 2)
                                <img src="{{ asset('frontend/img/logos/kethop.gif') }}" alt="LOGO" class="" width="100px">
                                @endif
                            </div>
                            <div class="d-flex flex-column thongtin">

                                <b class="mb-2 fs-20">{{ $quiz->title }}</b>
                                <div>
                                    <span>
                                        Thời gian:
                                    </span>
                                    <b>
                                        {{ $quiz->duration }} phút
                                    </b>
                                </div>
                                <div>
                                    <span>
                                        Loại câu hỏi:
                                    </span>
                                    <b>
                                        {{
                                        ($quiz->type == 0)?'Trắc nghiệm':
                                        (($quiz->type == 1)?'Điền vào chỗ trống':
                                        (($quiz->type == 2)?'Kết hợp':''))
                                    }}
                                    </b>
                                </div>
                                <div>
                                    <span>
                                        Sô lượng:
                                    </span>
                                    <b>
                                        {{ $countQuestion + $countEssay }} câu
                                    </b>
                                </div>

                            </div>
                        </div>

                        <p>{{ $quiz->description }}</p>
                    </div>

                </a>

                @endif
                @endforeach

            </div>

        </div>
    </div>


</section>



@endsection