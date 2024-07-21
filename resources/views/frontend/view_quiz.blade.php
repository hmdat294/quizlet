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

            <div class="blog-posts text-center">

                <h2 class="font-weight-bold mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500" style="animation-delay: 1500ms;">Coding Skill Quizzes</h2>
                
                <table class="table appear-animation animated fadeInUpShorter appear-animation-visible text-center profile-tabs " data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                    <tr>
                        <th>Tiêu đề</th>
                        <th>Thời gian làm bài</th>
                        <th>Mô tả</th>
                        <th>#</th>
                    </tr>

                    @foreach ($quizs as $quiz)
                    <tr class="">
                        <td>{{ $quiz->title }}</td>
                        <td>{{ $quiz->duration }} phút</td>
                        <td>{{ $quiz->description }}</td>
                        <td>
                            <a href="{{ route('quiz.start', $quiz->id) }}" class="button px-4 py-1 fs-10">Bắt đầu</a>
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