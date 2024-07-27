@extends('backend.layout.template')

@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Questions</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('quizs.index') }}"><i class="bx bx-book"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Question Management</li>
                </ol>
            </nav>
        </div>
        {{-- <div class="ms-auto">
            <div class="btn-group">
                <a class="btn btn-primary" href="{{ route('questions.create') }}">
        <i class="bx bxs-plus-square"></i>Add New Question</a>
    </div>
</div> --}}
</div>
<!--end breadcrumb-->

<h6 class="mb-0 text-uppercase">Danh sách câu hỏi thuộc: {{ $quiz->title }}</h6>
<hr />

<div class="card">
    <div class="card-header">
        <h1>Danh sách câu hỏi trắc nghiệm</h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example2" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Câu hỏi</th>
                        <th>Đáp án 1</th>
                        <th>Đáp án 2</th>
                        <th>Đáp án 3</th>
                        <th>Đáp án 4</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($questions as $index=> $question)
                    @php $ans = 'option_' . $question->answer; @endphp
                    <tr>
                        <td>{{ $index+1 }}</td>
                        <td>{{ $question->question }}</td>
                        <td class="{{ $question->answer == 1 ? 'fw-bold' : '' }}">{{ $question->option_1 }}
                        </td>
                        <td class="{{ $question->answer == 2 ? 'fw-bold' : '' }}">{{ $question->option_2 }}
                        </td>
                        <td class="{{ $question->answer == 3 ? 'fw-bold' : '' }}">{{ $question->option_3 }}
                        </td>
                        <td class="{{ $question->answer == 4 ? 'fw-bold' : '' }}">{{ $question->option_4 }}
                        </td>

                        <td class="d-flex gap-2">
                            <div>
                                <a class="btn btn-sm btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#Choice{{$question->id}}">
                                    <i class="bi bi-pencil"></i>
                                </a>

                                <div class="modal fade" id="Choice{{$question->id}}" tabindex="-1" aria-labelledby="ChoiceLabel{{$question->id}}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <form action="{{route('questions.update', $question->id)}}" method="post" class="modal-content">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="ChoiceLabel{{$question->id}}">Sửa câu hỏi</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label class="form-label my-2">Câu hỏi</label>
                                                    {{-- <input type="text" class="form-control" name="question" placeholder="Câu hỏi" value="{{$question->question}}"> --}}
                                                    <textarea class="form-controlr" name="question" cols="10" rows="3" placeholder="Câu hỏi">{{$question->question}}</textarea>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="form-group col-6">
                                                        <label class="form-label my-2">Đáp án 1</label>
                                                        <input type="text" class="form-control" name="option_1" placeholder="Đáp án 1" value="{{$question->option_1}}">
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label class="form-label my-2">Đáp án 2</label>
                                                        <input type="text" class="form-control" name="option_2" placeholder="Đáp án 2" value="{{$question->option_2}}">
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label class="form-label my-2">Đáp án 3</label>
                                                        <input type="text" class="form-control" name="option_3" placeholder="Đáp án 3" value="{{$question->option_3}}">
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label class="form-label my-2">Đáp án 4</label>
                                                        <input type="text" class="form-control" name="option_4" placeholder="Đáp án 4" value="{{$question->option_4}}">
                                                    </div>

                                                </div>

                                                <label for="correct_answer" class="form-label m-2">Chọn câu trả lời đúng</label>
                                                <select class="form-select p-2 border rounded" id="answer" name="answer">
                                                    @for ($i = 1; $i <= 4; $i++) <option value="{{ $i }}" {{($question->answer == $i)?'selected':''}}>Câu trả lời {{ $i }}</option>
                                                        @endfor
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                <button type="submit" class="btn btn-primary">Lưu</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            <form action="{{ route('questions.destroy', $question->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" id="delete-question" class="btn btn-sm btn-danger show_confirm"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h1>Danh sách câu hỏi điền vào chỗ trống</h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="example2" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Câu hỏi</th>
                        <th>Đáp án (trái -> phải)</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i = 0;
                    @endphp
                    @foreach ($essays as $essay)
                    {{-- @php $ans = 'option_' . $question->answer; @endphp --}}
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $essay->question }}</td>
                        <td>{{ $essay->blanks }}
                        </td>
                        <td class="d-flex gap-2">

                            <div>
                                <a class="btn btn-sm btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#Essay{{$essay->id}}">
                                    <i class="bi bi-pencil"></i>
                                </a>

                                <div class="modal fade" id="Essay{{$essay->id}}" tabindex="-1" aria-labelledby="EssayLabel{{$essay->id}}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <form action="{{route('essays.update', $essay->id)}}" method="post" class="modal-content">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="EssayLabel{{$essay->id}}">Sửa câu hỏi</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label class="form-label my-2">Câu hỏi</label>
                                                    <input type="text" class="form-control" placeholder="Câu hỏi" value="{{$essay->question}}" disabled>
                                                </div>
                                                <div class="row my-2">


                                                    @php

                                                    $blanks = explode(',', $essay->blanks);

                                                    @endphp

                                                    @foreach ($blanks as $i => $item)

                                                    <div class="form-group col-6">
                                                        <label class="form-label my-2">Đáp án {{$i+1}}</label>
                                                        <input type="text" class="form-control" placeholder="Đáp án {{$i+1}}" value="{{$item}}" name="dapan[]">
                                                    </div>

                                                    @endforeach

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                                <button type="submit" class="btn btn-primary">Lưu</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <form action="{{ route('essays.destroy', $essay->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" id="delete-question" class="btn btn-sm btn-danger show_confirm"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
@endsection
@section('custom_script')
<script>
    function openModal(questionId) {
        const modal = document.getElementById(`questionModal-${questionId}`);
        const modalInstance = new bootstrap.Modal(modal);
        modalInstance.show();
    }
</script>
@endsection
