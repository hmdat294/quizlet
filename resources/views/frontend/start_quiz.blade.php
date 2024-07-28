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

        <div class="card card-background-image-hover border-0" style="box-shadow: 0 0 10px #ddd;">


            <div class="card-body text-center">
                <div class="d-flex justify-content-between align-items-center">

                    <div class="d-flex">
                        <i class="icon-layers icons text-color-primary text-10" style="margin-right: 10px;"></i>
                        <h4 class="card-title mt-2 mb-3 text-5 font-weight-bold">{{ $quiz->title }}</h4>

                    </div>
                    <div class="d-flex">

                        <img src="{{ asset('frontend/img/logos/dongho.gif') }}" alt="LOGO" class="" width="100px">

                        <div class="d-flex justify-content-center align-items-center" style="width: 100px; height: 100px; background-color: #120a30; border-radius: 100px; border:3px solid #5ce1e6;">
                            <h2 class='timer m-0 font-weight-bold' style="display:flex; color: #5ce1e6;" data-minutes-left={{ $quiz->duration }}></h2>
                        </div>

                    </div>
                </div>


                <form action="{{ route('quiz.result') }}" id="text_form" method="post">
                    @csrf
                    <input type="hidden" name="quiz_id" value="{{ $quiz->id }}">
                    @php
                    $i = 1;
                    @endphp
                    @foreach ($allQuestions as $q)
                    <div class="mb-3 appear-animation animated bounceInRight appear-animation-visible q-{{ $i }}" data-appear-animation="bounceInRight" data-appear-animation-delay="0" data-appear-animation-duration="1s" style="animation-duration: 1s; animation-delay: 0ms; display:none;">

                        <div class="card border-radius-0 bg-color-light border-0 text-left">

                            @if ($q['q_type'] == 'question')
                            <div class="card-body">
                                <h4 class="card-title mb-3 text-4 font-weight-bold">{{ $i }}.
                                    {{ $q['question'] }}
                                </h4>

                                <ul class="list list-primary list-borders mcq-list text-4 text-dark">
                                    <li class="d-flex">
                                        <label>
                                            <input type="radio" name="options[{{ $q['id'] }}]" value="1">
                                            {{ $q['option_1'] }}
                                        </label>
                                    </li>
                                    <li class="d-flex">
                                        <label>
                                            <input type="radio" name="options[{{ $q['id'] }}]" value="2">
                                            {{ $q['option_2'] }}
                                        </label>
                                    </li>
                                    <li class="d-flex">
                                        <label>
                                            <input type="radio" name="options[{{ $q['id'] }}]" value="3">
                                            {{ $q['option_3'] }}
                                        </label>
                                    </li>
                                    <li class="d-flex">
                                        <label>
                                            <input type="radio" name="options[{{ $q['id'] }}]" value="4">
                                            {{ $q['option_4'] }}
                                        </label>
                                    </li>

                                </ul>

                            </div>
                            @elseif($q['q_type'] == 'essay')
                            <div class="card-body">
                                <h4 class="card-title mb-3 text-4 font-weight-bold">{{ $i }}. Điền
                                    vào chỗ trống </h4>

                                            <div class="mx-5 d-inline">
                                                <!-- Tính điểm quiz điền vào chỗ trống -->
                                                @php
                                                    $id = $q['id'];
                                                    $outputString = preg_replace_callback(
                                                        '/\[blank_(\d+)\]/',
                                                        function ($matches) use ($id){
                                                            return '<input class="border-bottom border-0 border-2" type="text" name="essays['.$id.'][blank_' . $matches[1] . ']">
                                                                ';
                                                        },
                                                        $q['question'],
                                                    );

                                    @endphp
                                    <input type="hidden" name="blanks{{$i}}" value="{{$q['blanks']}}">
                                    <span>{!! $outputString !!}</span>
                                </div>

                            </div>
                            @endif

                        </div>

                        <div class="form-group mt-3">
                            <button type="button" class="btn btn-modern btn-rounded btn-tertiary mb-2 back"><i class="icon-arrow-left icons"></i><i class="icon-arrow-left icons mr-2"></i>Back</button>
                            <button type="button" class="btn btn-modern btn-rounded btn-tertiary mb-2 next">Next<i class="icon-arrow-right icons ml-2"></i><i class="icon-arrow-right icons"></i></button>
                        </div>
                    </div>
                    @php
                    $i++;
                    @endphp
                    @endforeach
                </form>
            </div>
        </div>
    </div>
</section>

    <script>
        var quiz = @json($limit);
        var total = quiz;
    </script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('text_form');

        form.addEventListener('submit', function(event) {
            // Lấy tất cả các input thuộc type text trong form
            const essayInputs = form.querySelectorAll('input[type="text"]');

            // Điền giá trị mặc định cho các ô trống
            essayInputs.forEach(input => {
                if (input.value.trim() === '') {
                    input.value = ''; // Điền chuỗi rỗng nếu ô trống
                }
            });
        });
    });
</script>
@endsection
