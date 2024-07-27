@extends('frontend.layout.template')

@section('content')

<section class="page-header page-header-classic" style="padding-top: 100px; margin:0;">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Categories</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col p-static">
                <span class="page-header-title-border visible" style="width: 145.509px;"></span>
                <h1 data-title-border="">Categories</h1>

            </div>
        </div>
    </div>
</section>

<section class="container border-0 my-4">
    <div class="row">
        <div class="col-11 mx-auto">

            <div class="blog-posts text-center">

                <h2 class="font-weight-bold mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500" style="animation-delay: 1500ms;">Danh sách danh mục</h2>
                <hr>
                <div class="row">

                    @foreach ($categories as $category)
                    <div class="col-md-3 col-lg-3 mb-3 p-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                        <div class="card border-0 profile-tabs">
                            <div class="card-body text-center d-flex flex-column justify-content-between align-items-center" style="height: 250px;">
                                <img src="{{ asset('frontend/img/category/'.$category->image) }}" alt="{{ $category->title }}" class="" width="100px">
                                <a href="{{ route('quiz.view', $category->id) }}" class="button px-4 py-2 mt-3">View {{ $category->title }}</a>
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