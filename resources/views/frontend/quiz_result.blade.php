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


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection