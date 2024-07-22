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
                            @php
                                $i = 0;
                            @endphp
                            @foreach ($questions as $question)
                                @php $ans = 'option_' . $question->answer; @endphp
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $question->question }}</td>
                                    <td class="{{ $question->answer == 1 ? 'fw-bold' : '' }}">{{ $question->option_1 }}
                                    </td>
                                    <td class="{{ $question->answer == 2 ? 'fw-bold' : '' }}">{{ $question->option_2 }}
                                    </td>
                                    <td class="{{ $question->answer == 3 ? 'fw-bold' : '' }}">{{ $question->option_3 }}
                                    </td>
                                    <td class="{{ $question->answer == 4 ? 'fw-bold' : '' }}">{{ $question->option_4 }}
                                    </td>

                                    <td>

                                        <form action="{{ route('questions.destroy', $question->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a class="btn btn-sm btn-primary" href="#"
                                                onclick="openModal({{ $question->id }})">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <button type="button" id="delete-question"
                                                class="btn btn-sm btn-danger show_confirm"><i
                                                    class="bi bi-trash"></i></button>
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
                                <th>Đáp án</th>
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
                                    <td >{{ $essay->blanks }}
                                    </td>
                                    <td>

                                        <form action="{{ route('questions.destroy', $question->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a class="btn btn-sm btn-primary" href="#"
                                                onclick="openModal({{ $question->id }})">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <button type="button" id="delete-question"
                                                class="btn btn-sm btn-danger show_confirm"><i
                                                    class="bi bi-trash"></i></button>
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
