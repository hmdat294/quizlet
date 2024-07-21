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
                <h1 data-title-border="">Start Test</h1>

            </div>
        </div>
    </div>
</section>



<section class="section border-0 my-0 py-0">


    <div class="col-md-10 col-lg-10 col-sm-12 mx-auto mb-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">

        <div class="card card-background-image-hover border-0" style="background-image: url({{ asset('frontend/img/blog/square/blog-1.jpg') }});">


            <div class="card-body text-center">
                <div class="d-flex justify-content-between">

                    <div class="">
                        <i class="icon-layers icons text-color-primary text-10"></i>
                        <h4 class="card-title mt-2 mb-3 text-5 font-weight-bold">Tiêu đề</h4>

                    </div>
                    <div class="">
                        <div class="badge badge-warning badge-md">
                            <h1 class='timer m-0 font-weight-bold' style="display: inline-flex;" data-minutes-left=100></h1>
                        </div>

                    </div>
                </div>




                <form action="" id="text_form" method="post">
                    <div class="mb-3 appear-animation animated bounceInRight appear-animation-visible">

                        <div class="card border-radius-0 bg-color-light border-0 box-shadow-1 text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-3 text-4 font-weight-bold">1.
                                    Điền vào chỗ trống
                                </h4>

                                <div class="mx-5 d-inline">
                                    <span>đầu câu</span>
                                    <input class="border-bottom border-0 border-2" type="text">
                                    <span>cuối câu</span>
                                </div>

                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <button type="button" class="btn btn-modern btn-rounded btn-tertiary mb-2 next">Next<i class="icon-arrow-right icons ml-2"></i><i class="icon-arrow-right icons"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection