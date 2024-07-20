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
                <hr>
                <div class="row">

                    @foreach ($quizs as $quiz)
                    <div class="col-md-3 col-lg-3 mb-3 appear-animation animated fadeInUpShorter appear-animation-visible profile-tabs rounded shadow" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                        <div class="card border-0 profile-tabs">
                            <div class="card-body text-center p-5">
                                <i class="icon-layers icons text-color-primary text-10"></i>
                                <h4 class="card-title mt-2 mb-2 text-5 font-weight-bold">{{ $quiz->title }}</h4>
                                <p class="card-text">{{ $quiz->description }}</p>
                                <a href="{{ route('quiz.view', $quiz->id) }}" class="button px-4 py-2">View Quiz</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

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
